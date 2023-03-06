<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAlumnoRequest;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos= Alumno::all();
        return view('privado.alumno.index')->with('alumno',Alumno::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privado.alumno.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno;

        $alumno->nombres = $request->nombres;
        $alumno->apellido_pat = $request->apellido_pat;
        $alumno->apellido_mat = $request->apellido_mat;
        $alumno->sexo = $request->sexo;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->tutor = $request->tutor;
        $alumno->calle = $request->calle;
        $alumno->numero = $request->numero;
        $alumno->colonia = $request->colonia;
        $alumno->cp = $request->cp;
        $alumno->comentarios = $request->comentarios;
        $alumno->fecha_ing = $request->fecha_ing;
        $alumno->nivel = $request->nivel;
        $alumno->alberca = $request->alberca;
        $alumno->status = $request->status;
        $alumno->save();

        echo "registro realizado";
        return view('privado.alumno.index')->with('alumno',Alumno::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumnoRequest  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $alumno->nombres = $request->nombres;
        $alumno->apellido_pat = $request->apellido_pat;
        $alumno->apellido_mat = $request->apellido_mat;
        $alumno->sexo = $request->sexo;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->tutor = $request->tutor;
        $alumno->calle = $request->calle;
        $alumno->numero = $request->numero;
        $alumno->colonia = $request->colonia;
        $alumno->cp = $request->cp;
        $alumno->comentarios = $request->comentarios;
        $alumno->fecha_ing = $request->fecha_ing;
        $alumno->nivel = $request->nivel;
        $alumno->alberca = $request->alberca;
        $alumno->status = $request->status;
        $alumno->save();

        return view('privado.alumno.index')->with('alumno',Alumno::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return view('privado.alumno.index')->with('alumno',Alumno::all());
    }
}
