<?php

namespace App\Traits;

trait BaseRepository
{
    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function store($input = [])
    {
        return $this->model->create($input);
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function query()
    {
        return $this->model;
    }
}
