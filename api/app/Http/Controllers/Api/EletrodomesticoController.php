<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eletrodomestico;

class EletrodomesticoController extends Controller
{
    public function show()
    {
        try {
            $eletro = Eletrodomestico::all();

            return response()->json($eletro);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create(Request $request)
    {
        
        try{
            $eletro = new Eletrodomestico;

            $eletro->nome = $request->nome;
            $eletro->descricao = $request->descricao;
            $eletro->tensao = $request->tensao;
            $eletro->marca = $request->marca;

            $eletro->save();

            return response()->json($eletro);
        }catch(\Exception $error){
            return $error->getMessage();
        }

    }

    public function showById($id)
    {
        try {
            $eletro = Eletrodomestico::find($id);

            if (!$eletro) {
                return response()->json('not found!', 404);
            }

            return response()->json($eletro);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $eletro = Eletrodomestico::find($id);

            if (!$eletro) {
                return response()->json('not found!', 404);
            }
            
            $eletro->nome = $request->nome;
            $eletro->descricao = $request->descricao;
            $eletro->tensao = $request->tensao;
            $eletro->marca = $request->marca;

            $eletro->save();

            return response()->json($eletro);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function delete($id)
    {
        $eletro = Eletrodomestico::find($id);

        if (!$eletro) {
            return response()->json('not found!', 404);
        }

        $eletro->delete();

        return response()->json('removed successfully!');

    }

}
