<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $orders = Order::paginate(10);
        $statusCount = Order::where('status', 'success')->count();
        $totalOrders = Order::all()->count();
        $totalProducts = Product::all()->count();
        $revenue = Order::all()->sum('subtotal');
        return view('admin.dashboard.dashboard', compact('products', 'orders', 'totalOrders', 'revenue', 'statusCount', 'totalProducts'));
    }

    public function add(){
        return view('admin.components.store');
    }

}
