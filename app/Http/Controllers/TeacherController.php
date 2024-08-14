<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeachingHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $user = auth()->user();
        $userPermissions = $user->getAllPermissions()->pluck('name');

        // Verificar si el usuario tiene el rol de Admin
        if ($user->hasRole('Admin')) {
            $teachersQuery = Teacher::query();
        } else {
            // Filtrar los profesores basándose en los permisos del usuario
            $teachersQuery = Teacher::query()
                ->whereIn('career', $userPermissions);
        }

        if ($searchTerm) {
            $teachersQuery->where(function ($query) use ($searchTerm) {
                $query->where('first_name', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('last_name', 'LIKE', "%{$searchTerm}%");
            });
        }

        $teachers = $teachersQuery->get();
        $noResults = $teachers->isEmpty() && !empty($searchTerm);

        return view('teachers.index', compact('teachers', 'noResults', 'searchTerm'));
    }

    public function create()
    {
        //$teachingHours = TeachingHour::all();
        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];
        return view('teachers.create', compact('otherOptions'));
    }

    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('teachers.index');
    }

    public function show(Teacher $teacher)
    {
        //tomar del objeto teacher el ci y comparar con la tabla historic el campo IDENTIFICACION, si son iguales mostrar todos los datos y guardarlos en la variable $teacher

        $teachers = DB::table('teachers')
            ->join('historic', 'teachers.ci', '=', 'historic.IDENTIFICACION')
            ->select('teachers.*', 'historic.*')
            ->where('teachers.ci', '=', $teacher->ci)
            ->get();

        //dd($teachers);

        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];

        return view('teachers.show', compact('teacher', 'otherOptions', 'teachers'));
    }

    public function edit(Teacher $teacher)
    {
        //$teachingHours = TeachingHour::all(); // Paso 1
        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];
        return view('teachers.edit', compact('teacher', 'otherOptions')); // Paso 2
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        return redirect()->route('teachers.index');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
