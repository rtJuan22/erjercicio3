<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinos = Destino::all();
        return view('destinos.index',['destinos' => $destinos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:destinos|max:10',
            'nombre' => 'required|',
            'otros_datos' => 'required|',
        ]);

        $destino = new Destino();
        $destino->codigo = $request->input('codigo');
        $destino->nombre = $request->input('nombre');
        $destino->otros_datos = $request->input('otros_datos');
        $destino->save();

        return view('destinos.message', ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Destino $Destino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destino = Destino::find($id);
        return view('destinos.edit', ['destino' => $destino]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|max:10|unique:destinos,codigo,' .$id,
            'nombre' => 'required|',
            'otros_datos' => 'required|',
        ]);

        $destino = Destino::find($id);
        $destino->codigo = $request->input('codigo');
        $destino->nombre = $request->input('nombre');
        $destino->otros_datos = $request->input('otros_datos');
        $destino->save();

        return view('destinos.message', ['msg' => 'Registro Modificado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destino = Destino::find($id);
        $destino->delete();

        return redirect("destinos");
    }
}
