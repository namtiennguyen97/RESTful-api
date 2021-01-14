<?php


namespace App\Repository\Implement;


use App\Models\Product;
use App\Repository\Eloquent\EloquentRepository;

class ProductRepositoryImpl extends EloquentRepository implements  ProductRepository
{
    public function getModel()
    {
        $model = Product::class;
        return $model;
    }
    public function storeImage(){

    }
}
