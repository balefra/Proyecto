<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generarPDF(Request $request)
    {
        // Obtener los datos del formulario
        $categoria = $request->input('categoria');
        $descripcion = $request->input('descripcion');

        // Cargar la vista del PDF con los datos
        $pdf = PDF::loadView('pdf.pdf', compact('categoria', 'descripcion'));

        // Mostrar el PDF en el navegador (stream)
        return $pdf->stream('reporte.pdf');
    }
}
