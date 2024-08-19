<?php

namespace App\Http\Controllers;

use App\Imports\ProjectImport;
use App\Imports\SubjectImport;
use App\Imports\TeacherImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function importTeachers(Request $request)
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

    public function importSubjects(Request $request)
    {
        $file = $request->file('file');
        // Leer y registrar las primeras filas del archivo
        $data = Excel::toArray([], $file);

        Log::info('Contenido del archivo Excel:', ['data' => $data]);

        try {
            Excel::import(new SubjectImport, $file);
            return back()->with('success', 'Datos de materias importados exitosamente.');
        } catch (\Exception $e) {
            Log::error('Error al importar los datos de materias:', ['exception' => $e]);
            return back()->with('error', 'Error al importar los datos de materias: ' . $e->getMessage());
        }
    }

    public function importProjects(Request $request)
    {
        $file = $request->file('file');
        // Leer y registrar las primeras filas del archivo
        $data = Excel::toArray([], $file);

        Log::info('Contenido del archivo Excel:', ['data' => $data]);

        try {
            Excel::import(new ProjectImport, $file);
            return back()->with('success', 'Datos de proyectos importados exitosamente.');
        } catch (\Exception $e) {
            Log::error('Error al importar los datos de proyectos:', ['exception' => $e]);
            return back()->with('error', 'Error al importar los datos de proyectos: ' . $e->getMessage());
        }
    }
}
