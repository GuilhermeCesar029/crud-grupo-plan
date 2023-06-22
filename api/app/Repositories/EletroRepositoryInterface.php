<?php

namespace App\Repositories;

use App\Models\Eletrodomestico;

interface EletroRepositoryInterface
{
    public function __construct(Eletrodomestico $eletro);
    public function index();
    public function create(array $data);
    public function showById($id);
    public function update(array $data, $id);
    public function delete($id);
}
