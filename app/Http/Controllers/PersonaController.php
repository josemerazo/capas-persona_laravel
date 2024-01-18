<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('lista', ["personas" => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->nacimiento = $request->nacimiento;
        $persona->estatura = $request->estatura;
        $persona->save();

        return redirect()->route("persona.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $persona = Persona::find($request->id);
        $fechaFormateada = date("Y-m-d", strtotime($persona->nacimiento));
        $persona->nacimiento = $fechaFormateada;
        return view('form', ["persona" => $persona]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona = Persona::find($request->id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->nacimiento = $request->nacimiento;
        $persona->estatura = $request->estatura;
        $persona->save();
        return redirect()->route("persona.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $persona = Persona::find($request->id);
        $persona->delete();
        return redirect()->route("persona.index");
    }
}
