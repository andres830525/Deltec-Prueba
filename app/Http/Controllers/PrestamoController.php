<?php

namespace App\Http\Controllers;

use App\Models\prestamo;
use App\Models\persona;
use App\Models\Historial;
use App\Models\recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $prestamos =  Prestamo::paginate(10);

        $recursos = Recurso::all();
        $personas = Persona::all();
        return view('prestamos.index', compact('prestamos','personas','recursos'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        prestamo::create($request->all());
        Historial::create($request->all());
        $recurso = Recurso::find($request->idRecurso);

        $recurso->estado = $request->idRecurso;

        $recurso->save();

        return redirect()->route('prestamos.index')->with('message', 'Se ha creado una nueva Asignacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamo $prestamo )
    {   $personas = Persona::all();


        return view('prestamos.edit', compact('prestamo','personas'));




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamo $prestamo)
    {
        $prestamo->update($request->all());



        return redirect()->route('prestamos.index')->with('message', 'Se ha Reasignado un Recurso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamo $prestamo)
    {
        //
    }
}
