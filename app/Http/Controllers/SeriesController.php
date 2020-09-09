<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()->json(Serie::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $serie = Serie::find($id);

        if (is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie, 200);
    }

    public function update(int $id, Request $request)
    {
        $serie = Serie::find($id);

        if (is_null($serie)) {
            return response()->json(['Erro' => 'Recurso não encontrado'], 404);
        }

        $serie->fill($request->all());
        $serie->save();

        return response()->json($serie, 200);
    }

    public function destroy(int $id)
    {
        $serie = Serie::find($id);

        if (is_null($serie)) {
            return response()->json(['Erro' => 'Recurso não encontrado'], 404);
        }

        $serie->delete();
        return response()->json('', 204);
    }
}
