<?php

namespace App\Http\Controllers;


use App\Services\Implement\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index(){
        $product = $this->productService->getAll();
        return $product;
    }

    public function store(Request $request){

        if ($request->hasFile('image')){
            $image1 = $request->file('image');
            $path = $image1->store('images','public');
            $product = $this->productService->create([
                'name' => $request->name,
                'vendor' => $request->vendor,
                'price' => $request->price,
                'image' => $path
            ]);
            return $product;
        }

        //cach viet cu neu ko co image:
//        $newProduct = $this->productService->create($request->all());
//        return $newProduct;


    }

    public function update(Request $request,$id){

        $newProduct = $this->productService->update($request->all(),$id);

        return response()->json($newProduct);
    }

    public function destroy($id){

        $this->productService->delete($id);
        $message = "deleted";
        return response()->json($message);
    }
}
