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

        $registro->goal()->create();



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
    public function buscarPorCorreo2(Request $request)
    {
        $registro = Registro::where('email', $request->buscar)->get();
        return view('vistas.TablaBuscar', ['registro' => $registro]);
        
        
    }

    public function buscarPorCorreoDocente(Request $request)
    {
        $registro = Registro::where('email', $request->buscar)->get();
        return view('docente.TablaBuscarDocente', ['registro' => $registro]);
        
        
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
        return view('vistas.infoenfoque',['id' => $registro]);
    }


    public function updateEnfoque(Request $request, Registro $registro)
    {
        $registro->work()->update([
            "name_enfoque" => $request->enfoque
        ]);
        return view('vistas.infoinvestigacion',['id' => $registro]);
    }

    public function updateTecnicas(Request $request, Registro $registro)
    {
        $registro->work()->update([
            "tipo_Estudio" => $request->enfoque,
            "resultado_Esperado" => $request->resultado,
            "tecnicas_Recoleccion" => $request->tecnicas
        ]);

        $tipoInvestigacion = $registro->work()->get();

        return view('vistas.objetivoInvestigacion',['id' => $registro],['tipoInvestigacion' => $tipoInvestigacion]);
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
            return view('analitico.vistaAnalitico',['id' => $registro]); 
        } else if ($request->investigacion === "descriptivo") {
            return view('descritivo.vistaDescriptivo',['id' => $registro]);
        } else if ($request->investigacion === "intervencion") {
            return view('intervencion.vistaIntervencion',['id' => $registro]); 
        } 
    }

    public function updateObjetivos(Request $request, Registro $registro)
    {
       

        $registro->goal()->update([
            "general_Goal" => $request->oGeneral,       
            "specific_Goal1" => $request->oEspecifico1,
            "specific_Goal2" => $request->oEspecifico2,
            "specific_Goal3" => $request->oEspecifico3,
            "specific_Goal4" => $request->oEspecifico4
        ]);
         
    return view('home'); 
       
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
