<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTutorRequest;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutores= Tutor::all();
        return view('privado.tutor.index')->with('tutor',Tutor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('privado.tutor.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutor = new Tutor();

        $tutor->nombre = $request->nombre;
        $tutor->telefono = $request->telefono;
        $tutor->correo = $request->correo;

        $tutor->save();
        return view('privado.tutor.index')->with('tutor',Tutor::all());
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorRequest  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tutor = Tutor::find($id);

        $tutor->nombre = $request->nombre;
        $tutor->telefono = $request->telefono;
        $tutor->correo = $request->correo;

        $tutor->save();
        return view('privado.tutor.index')->with('tutor',Tutor::all());
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();
        return view('privado.tutor.index')->with('tutor',Tutor::all());
    }
}
