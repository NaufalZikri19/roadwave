<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function store()
    {
        $product = Product::find(request('product_id'));

        if (!$product) {
            return back()->withErrors(['error' => 'Product not found!']);
        }

        if ($product->stock < request('quantity')) {
            return back()->withErrors(['error' => 'Insufficient stock for this product!']);
        }

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->product_id = $product->id;
        $order->quantity = request('quantity');
        $order->subtotal = $product->price * request('quantity');
        $order->status = 'pending';

        $order->save();

        $product->stock -= request('quantity');
        $product->save();

        return redirect()->route('transaction.view')->with('success', 'Order successfully created!');
    }


}
