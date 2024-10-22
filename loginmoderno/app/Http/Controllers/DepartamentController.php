<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        
      $departament= Departament::all();
      return view('posts.crear')->with('departaments',$departament);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('posts.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departament $departament)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departament $departament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departament $departament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departament $departament)
    {
        //
    }
}
