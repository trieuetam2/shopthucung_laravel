<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Repositories\IProductRepository;

class ProductController extends Controller
{

    private $productRepository;

    public function __construct(IProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function index(){
        $products = $this->productRepository->allProduct();

        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'mota' => 'required'
        ]);

        $this->productRepository->storeProduct($validatedData);

        return redirect()->route('product.index');
    }

    public function edit($id){
        $product = $this->productRepository->findProduct($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update($id, Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'mota' => 'required'
        ]);

        $this->productRepository->updateProduct($validatedData, $id);

        return redirect()->route('product.index')->with('success', 'update thanh cong');
    }

    public function destroy($id){
        $this->productRepository->deleteProduct($id);

        return redirect()->route('product.index')->with('success', 'xoa thanh cong');
    }

}
