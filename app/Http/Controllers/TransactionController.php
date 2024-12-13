<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
        public function index(Request $request)
        {
            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = config('midtrans.is_production');
            Config::$isSanitized = config('midtrans.is_sanitized');
            Config::$is3ds = config('midtrans.is_3ds');

            $user = auth()->user();

            $order = Order::with('product')
                ->where('user_id', $user->id)
                ->latest()
                ->first();

            $subtotal = $order->subtotal ?: $order->product->price * $order->quantity;

            $params = [
                'transaction_details' => [
                    'order_id' => 'ORDER-' . $order->id,
                    'gross_amount' => $subtotal,
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone,
                ],
                'item_details' => [
                    [
                        'id' => $order->product->id,
                        'price' => $order->product->price,
                        'quantity' => $order->quantity,
                        'name' => $order->product->name,
                    ],
                ],
            ];

            try {
                $snapToken = Snap::getSnapToken($params);
                return view('client.page.checkout.checkout', compact('snapToken', 'order'));
            } catch (\Exception $e) {
                return response()->json(['error' => 'Failed to create transaction: ' . $e->getMessage()], 500);
            }
        }

        public function notification(Request $request)
        {   
            // Set Midtrans configuration
            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = config('midtrans.is_production');

            // Instantiate Midtrans Notification
            $notification = new Notification();

            // Get the transaction status
            $status = $notification->transaction_status;
            $orderId = $notification->order_id;

            // Verify the signature
            $signatureKey = hash('sha512', $notification->transaction_id . $notification->order_id . $notification->gross_amount . config('midtrans.server_key'));

            if ($signatureKey !== $notification->signature_key) {
                // Signature does not match
                return response()->json(['status' => 'failed', 'message' => 'Invalid signature'], 403);
            }

            // Find the order in your database
            $order = Order::where('id', str_replace('ORDER-', '', $orderId))->first();

            if ($order) {
                // Update the order status based on the notification
                switch ($status) {
                    case 'capture':
                        $order->status = 'paid';
                        break;
                    case 'pending':
                        $order->status = 'pending';
                        break;
                    case 'expire':
                        $order->status = 'expired';
                        break;
                    case 'cancel':
                        $order->status = 'cancelled';
                        break;
                    default:
                        // Handle other statuses if necessary
                        break;
                }

                // Save the order status
                $order->save();
            }

            // Return a response to Midtrans
            return response()->json(['status' => 'success']);
        }
}
