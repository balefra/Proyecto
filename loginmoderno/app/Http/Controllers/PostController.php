<?php

namespace App\Http\Controllers;


use App\Models\Registro;
use Illuminate\Support\Arr;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registro = Registro::create([
            'titleDocument' => $request->titleDocument,
            'school' => $request->school,
            'nameProgram' => $request->nameProgram,
            'email' => $request->email,
            'id_departament' => $request->departamentos,
            'id_municipality' => $request->municipios,
        ]);

        $registro->work()->create();

        $array_num = count($request->get('collaborators'));
        for ($i = 0; $i < $array_num; ++$i) {
            $registro->integrant()->create([
                'nombre' => $request->collaborators[$i],
                'identificacion' => $request->idCollaborators[$i],

            ]);
        }



        return view('home');
    }

    /**
     * buscar las investigaciones que tiene asociado el correo 
     */
    public function buscarPorCorreo(Request $request)
    {
        $registro = Registro::where('email', $request->texto)->get();
        return response()->json(
            [
                'lista' => $registro

            ]
        );
    }

    /**
     * buscar las investigaciones que tiene asociado el correo 
     */
    public function buscarProyecto($id)
    {

        $proyecto = Registro::find($id);
        if (!$proyecto) {
            $data =  [
                'message' => 'Proyecto no encontrado'

            ];
            return response()->json($data,404);
        }

        $data = [
            'proyecto' => $proyecto

        ];

        return response()->json($data,200);
    }



    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro $registro)
    {

        $registro->work()->update([
            "name_reality" => $request->categoria,
            "descrip_reality" => $request->descripcion
        ]);
        return view('vistas.infoenfoque');
    }


    public function updateEnfoque(Request $request, Registro $registro)
    {
        $registro->work()->update([
            "name_enfoque" => $request->enfoque
        ]);
        return view('vistas.infoinvestigacion');
    }

    public function updateTecnicas(Request $request, Registro $registro)
    {
        $registro->work()->update([
            "tipo_Estudio" => $request->enfoque,
            "resultado_Esperado" => $request->resultado,
            "tecnicas_Recoleccion" => $request->tecnicas
        ]);
    }


    public function updateInvesti(Request $request, Registro $registro)
    {
        $registro->work()->update([
            "type_investigation" => $request->investigacion
        ]);
          // Redirigir según el valor seleccionado
          if ($request->investigacion === "analitico") {
         // asi veo qeu pasan las variables de vbista a vista
           // echo($request->investigacion);
            return view('analitico.vistaAnalitico'); 
        } else if ($request->investigacion === "descriptivo") {
            return view('descritivo.vistaDescriptivo');
        } else if ($request->investigacion === "intervencion") {
            return view('intervencion.vistaIntervencion'); 
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
