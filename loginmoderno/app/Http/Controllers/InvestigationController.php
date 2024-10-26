<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use Illuminate\Http\Request;


class InvestigationController extends Controller
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
        Investigation::create([
            'enfoque'=> $request->enfoque,
            'tipo'=> $request->tipo,
            'id_registro'=> $request->idDocumento,
            
        ]);
        return view('home'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Investigation $tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investigation $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investigation $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investigation $tes)
    {
        //
    }
}
