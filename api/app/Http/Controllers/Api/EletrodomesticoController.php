<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EletroService;
use Illuminate\Http\Request;

class EletrodomesticoController extends Controller
{
    private $service;
    public function __construct(EletroService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->index();
    }

    public function create(Request $request)
    {
        return $this->service->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'tensao' => $request->tensao,
            'marca' => $request->marca,
        ]);
    }

    public function showById($id)
    {
        return $this->service->showById($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'tensao' => $request->tensao,
            'marca' => $request->marca,
        ], $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }

}
