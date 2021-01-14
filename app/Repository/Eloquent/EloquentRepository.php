<?php


namespace App\Repository\Eloquent;


use App\Repository\Repository;

abstract class EloquentRepository implements Repository
{
//set Model
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function setModel(){
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
       $result = $this->model->all();
       return $result;
    }
    public function create($data)
    {


        $object = $this->model->create($data);
        return $object;
    }
    public function update($data, $object)
    {
       $object->update($data);
       return $object;
    }
    public function delete($object)
    {
        $object->delete();
    }
    public function findById($id)
    {
       $result = $this->model->find($id);
       return $result;
    }
}
