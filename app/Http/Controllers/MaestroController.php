<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use App\Http\Requests\StoreMaestroRequest;
use App\Http\Requests\UpdateMaestroRequest;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();
        return view('privado.profesor.index')->with('maestro', Maestro::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privado.profesor.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaestroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestro = new Maestro();

        $maestro->nombres = $request->nombres;
        $maestro->apellidos = $request->apellidos;
        $maestro->telefono = $request->telefono;
        $maestro->fecha_nac = $request->fecha_nac;
        $maestro->fecha_ing = $request->fecha_ing;
        $maestro->alberca = $request->alberca;
        $maestro->email = $request->email;
        $maestro->password = $request->password;
        $maestro->clave1 = $request->clave1;
        $maestro->status = $request->status;
        $maestro->comentarios = $request->comentarios;
        $maestro->color = $request->color;
        $maestro->img = $request->img;
        $maestro->save();

        echo ("Registro realizado");
        return view('privado.profesor.index')->with('maestro', Maestro::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaestroRequest  $request
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maestro = Maestro::find($id);

        $maestro->nombres = $request->nombres;
        $maestro->apellidos = $request->apellidos;
        $maestro->telefono = $request->telefono;
        $maestro->fecha_nac = $request->fecha_nac;
        $maestro->fecha_ing = $request->fecha_ing;
        $maestro->alberca = $request->alberca;
        $maestro->email = $request->email;
        $maestro->password = $request->password;
        $maestro->clave1 = $request->clave1;
        $maestro->status = $request->status;
        $maestro->comentarios = $request->comentarios;
        $maestro->color = $request->color;
        $maestro->img = $request->img;
        $maestro->save();

        echo ("Registro actualizado");
        return view('privado.profesor.index')->with('maestro', Maestro::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro = Maestro::find($id);
        $maestro->delete();
        return view('privado.profesor.index')->with('maestro', Maestro::all());
    }
}
