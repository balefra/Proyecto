<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkaController extends Controller{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateReality(Request $request, Work $work)
    {
       return $work->update([
        "name_reality"=>$request->categoria,
        "descrip_reality"=>$request->descripcion
    ]);
    }

  
     


     /**
     * Update the specified resource in storage.
     */
    public function destroy(Work $work)
    {
        //
    }
}


?>