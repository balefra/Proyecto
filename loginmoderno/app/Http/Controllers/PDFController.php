<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Registro;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generarPDF(/*Request $request*/)
    {
        // Obtener los datos del formulario
        // $categoria = $request->input('categoria');
        // $descripcion = $request->input('descripcion');

        // Cargar la vista del PDF con los datos
        $pdf = PDF::loadView('pdf.pdf'/*, compact('categoria', 'descripcion')*/);

        // descargar pdf 
        // return $pdf->dowload('reporte.pdf');
        // Mostrar el PDF en el navegador (stream)
        return $pdf->stream('reporte.pdf');
    }


    //buscar por registro
    public function generaridPDF($registro)
    {


        $proyecto = Registro::with('departamento','municipio')->get();

    
        $pdf = PDF::loadView('pdf.pdf', ['proyecto' => $proyecto]);
        return $pdf->stream('reporte.pdf');
    }
}
