<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Order::paginate(10);
        $totalOrders = Order::all()->count();
        $revenue = Order::all()->sum('subtotal');
        return view('admin.dashboard.dashboard', compact('products', 'orders', 'totalOrders', 'revenue'));
    }

    public function add(){
        return view('admin.components.store');
    }

}
