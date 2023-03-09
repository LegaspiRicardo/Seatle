<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateNivelRequest;

use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles= Nivel::all();
        return view('privado.nivel.index')->with('nivel',Nivel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privado.nivel.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNivelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Nivel;

        $nivel->nivel = $request->nivel;
        $nivel->img = $request->img;
        $nivel->color = $request->color;
        $nivel->descripcion = $request->descripcion;
        $nivel->save();

        echo "registro realizado";
        return view('privado.nivel.index')->with('nivel',Nivel::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNivelRequest  $request
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nivel = Nivel::find($id);

        $nivel->nivel = $request->nivel;
        $nivel->img = $request->img;
        $nivel->color = $request->color;
        $nivel->descripcion = $request->descripcion;
        $nivel->save();

        return view('privado.nivel.index')->with('nivel',Nivel::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = Nivel::find($id);
        $nivel->delete();
        return view('privado.nivel.index')->with('nivel',Nivel::all());
    }
}
