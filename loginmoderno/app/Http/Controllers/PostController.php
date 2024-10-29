<?php

namespace App\Http\Controllers;


use App\Models\Registro;

use App\Models\Work;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
       $registro = Registro::create([
            'titleDocument'=> $request->titleDocument,
            'school'=> $request->school,
            'nameProgram'=> $request->nameProgram,
            'collaborators'=> $request->collaborators,
            'idCollaborators'=> $request->idCollaborators,
            'email'=> $request->email,
            'id_departament' => $request->departamentos,
            'id_municipality' => $request->municipios,
                    ]);

           $registro->work()->create(        );
        return view('home'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro $registro)
    {
        // 
        $registro->work()->update([
            "name_reality"=>$request->categoria,
            "descrip_reality"=>$request->descripcion
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
