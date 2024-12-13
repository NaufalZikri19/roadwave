<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('client.index', compact('products'));
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('client.page.detail.detail', compact('products'));
    }

}
