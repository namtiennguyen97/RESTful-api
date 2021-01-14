<?php


namespace App\Services\Implement;



use App\Repository\Implement\ProductRepositoryImpl;

class ProductService implements \App\Services\ProductService
{

    protected $productRepository;
    public function __construct(ProductRepositoryImpl $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
       $product = $this->productRepository->getAll();
       return $product;
    }

    public function findById($id)
    {
       $product = $this->productRepository->findById($id);
       return $product;
    }

    public function delete($id)
    {
       $currentProduct = $this->productRepository->findById($id);
       $this->productRepository->delete($currentProduct);
    }

    public function create($request)
    {
        $product = $this->productRepository->create($request);
        return $product;
    }

    public function update($request, $id)
    {
        $oldProduct = $this->productRepository->findById($id);
        $newProduct = $this->productRepository->update($request, $oldProduct);

        return $newProduct;
    }
}
