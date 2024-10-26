<?php

namespace App\Http\Controllers;

use App\Models\Reality;
use Illuminate\Http\Request;

class RealityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Reality::create([
            'name'=> $request->categoria,
            'description'=> $request->descripcion,
            'id_registro'=> $request->idDocumento,
            
        ]);
        return view('vistas.enfoque'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Reality $reality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reality $reality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reality $reality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reality $reality)
    {
        //
    }
}
