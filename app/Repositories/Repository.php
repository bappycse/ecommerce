<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements IRepository
{

    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getWithFilter($field,$fieldValue,$orderColumn,$orderDirection, $itemCount){
        return $this->model->where($field,$fieldValue)
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function add($data)
    {
        $this->model->create($data);
    }

    public function update($data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }


    public function delete($id)
    {
        return $this->model->destroy($id);
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }


    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }
    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }
    /**
     * @param array $data
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }


}
