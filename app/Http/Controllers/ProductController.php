<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->stock = $request->input('stock');
        $product->color = $request->input('color');
        $product->size = $request->input('size');

        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $path = $file->store('uploads', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('dashboard')->with('success', 'Product added successfully!');
    }

    public function view($id){
        $product = Product::find($id);
        return view('admin.components.update', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->stock = $request->input('stock');
        $product->color = $request->input('color');
        $product->size = $request->input('size');

        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $path = $file->store('uploads', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('dashboard')->with('success', 'Product updated successfully!');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Product deleted successfully!');
    }


}
