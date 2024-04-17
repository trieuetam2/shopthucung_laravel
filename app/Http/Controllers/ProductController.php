<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }
    public function create(){
        return view('products.create');
    }

// Controller
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

}
