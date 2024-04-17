<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create(){
        return view('products.create');
    }


    public function store(Request $request){
        $data = $request->all(); // Retrieve all form input data

        // Validation can be uncommented after testing the form
        $validatedData = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'mota' => 'required'
        ]);

        // Create and save the product
        $saveProduct = Product::create($data);

        // Redirect to the product index page
        return redirect()->route('product.index');
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'mota' => 'required'
        ]);

        $product->update($validatedData);

        return redirect()->route('product.index')->with('success', 'update thanh cong');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success', 'xoa thanh cong');
    }

}
