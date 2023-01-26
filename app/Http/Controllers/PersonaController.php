<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Persona::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $personas=Persona::find($id);
        return view('personas.editar', compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $personas=Persona::find($id);
        $personas->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Persona::find($id)->delete();
        return redirect('/');
    }

    public function ordenar(){
        $personas=Persona::orderBy('nombre', 'asc')->get();
        return view('personas.index', compact('personas'));
    }
    public function buscar(Request $request ){
        $personas = Persona::where('nombre','like','%'.$request->buscar.'%')->get();
        return view('personas.index', compact('personas'));
    }
}
