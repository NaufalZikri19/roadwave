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
        

        if (!$order) {
            return view('client.page.checkout.empty', compact('order'));
        }

        if ($order && $order->status == 'success' || $order->status == 'cancel') {
            return view('client.page.checkout.empty', compact('order'));
        }

        $subtotal = $order->subtotal ?: $order->product->price * $order->quantity;

        $params = [
            'transaction_details' => [
                'order_id' => $order->transaction_id,
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

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('SHA512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::where('transaction_id', $request->order_id)->first();
                $order->status = 'success';
                $order->save();
            } else {
                $order = Order::where('transaction_id', $request->order_id)->first();
                $order->status = 'cancel';
                $order->save();
            }
            return redirect()->route('transaction.view')->with('success', 'Transaction status updated successfully!');
        }
    }
}
