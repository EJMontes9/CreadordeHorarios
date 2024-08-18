<?php

namespace App\Http\Controllers;

use App\Imports\TeacherImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');
        // Leer y registrar las primeras filas del archivo
        $data = Excel::toArray([], $file);

        Log::info('Contenido del archivo Excel:', ['data' => $data]);

        try {
            Excel::import(new TeacherImport, $file);
            return back()->with('success', 'Datos importados exitosamente.');
        } catch (\Exception $e) {
            Log::error('Error al importar los datos:', ['exception' => $e]);
            return back()->with('error', 'Error al importar los datos: ' . $e->getMessage());
        }
    }
}
