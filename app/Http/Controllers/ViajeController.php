<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index',['viajes' => $viajes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:viajes|max:10',
            'numero_plazas' => 'required|',
            'fecha' => 'required|date',
            'otros_datos' => 'required|',
        ]);

        $viaje = new Viaje();
        $viaje->codigo = $request->input('codigo');
        $viaje->numero_plazas = $request->input('numero_plazas');
        $viaje->fecha = $request->input('fecha');
        $viaje->otros_datos = $request->input('otros_datos');
        $viaje->save();

        return view('viajes.message', ['msg' => 'Registro Guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $viaje = Viaje::find($id);
        return view('viajes.edit', ['viaje' => $viaje]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|max:10|unique:viajes,codigo,' .$id,
            'numero_plazas' => 'required|',
            'fecha' => 'required|date',
            'otros_datos' => 'required|',
        ]);

        $viaje = Viaje::find($id);
        $viaje->codigo = $request->input('codigo');
        $viaje->numero_plazas = $request->input('numero_plazas');
        $viaje->fecha = $request->input('fecha');
        $viaje->otros_datos = $request->input('otros_datos');
        $viaje->save();

        return view('viajes.message', ['msg' => 'Registro Modificado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $viaje = Viaje::find($id);
        $viaje->delete();

        return redirect("viajes");
    }
}
