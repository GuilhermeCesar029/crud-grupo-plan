<?php

namespace App\Services;

use App\Repositories\EletroRepositoryInterface;

class EletroService
{
    private $repository;
    public function __construct(EletroRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function showById($id)
    {
        return $this->repository->showById($id);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

}
