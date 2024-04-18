<?php
namespace App\Repositories;

use App\Repositories\IProductRepository;
use App\Models\Product;

class ProductRepository implements IProductRepository{

    public function allProduct(){
        return Product::all();
    }

    public function storeProduct($data){
        Product::create($data);
    }

    public function findProduct($id){
        return Product::where('id', $id)->first();
    }

    public function updateProduct($data, $id){
        $this->findProduct($id)->update($data);
    }

    public function deleteProduct($id){
        $this->findProduct($id)->delete();
    }
}