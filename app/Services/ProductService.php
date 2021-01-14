<?php


namespace App\Services;


interface ProductService
{
    public function getAll();
    public function findById($id);
    public function delete($id);
    public function create($request);
    public function update($request, $id);
}
