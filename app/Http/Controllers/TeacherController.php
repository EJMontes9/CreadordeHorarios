<?php

namespace App\Http\Controllers;

use App\Exports\TeachersExport;
use App\Models\Project;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeachingHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;
use Maatwebsite\Excel\Facades\Excel;
use Ramsey\Uuid\Type\Integer;


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
        // Crear el registro del Teacher
        $teacher = Teacher::create([
            'ci' => $request->input('ci'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'nacionality' => $request->input('nacionality'),
            'num_cellphone' => $request->input('num_cellphone'),
            'email' => $request->input('email'),
            'email_ug' => $request->input('email_ug'),
            'dedication' => $request->input('dedication'),
            'contract_type' => $request->input('contract_type'),
            'den_puesto' => $request->input('den_puesto'),
            'third_level_title' => $request->input('third_level_title'),
            'fourth_level_title' => $request->input('fourth_level_title'),
            'date_of_admission' => $request->input('date_of_admission'),
            'career' => $request->input('career'),
            'rol' => $request->input('rol'),
            'master_degree' => $request->input('master_degree'),
            'doctorate' => $request->input('doctorate'),
            'specialty' => $request->input('specialty'),
            'researcher' => $request->input('researcher'),
            'contract_hours' => $request->input('contract_hours'),
            'afinity' => $request->input('afinity'),
            'period' => $request->input('period'),
            'teacher_schedule_hours' => $request->input('teacher_schedule_hours'),
            'class_preparation_hours' => $request->input('class_preparation_hours'),
            'research_hours' => $request->input('research_hours'),
            'management_hours' => $request->input('management_hours'),
            'social_knowledge_management_hours' => $request->input('social_knowledge_management_hours'),
            'pre_professional_practice_tutoring_hours' => $request->input('pre_professional_practice_tutoring_hours'),
            'academic_tutoring_hours' => $request->input('academic_tutoring_hours'),
            'thesis_tutoring_hours' => $request->input('thesis_tutoring_hours'),
            'individual_tutoring_hours' => $request->input('individual_tutoring_hours'),
            'group_tutoring_hours' => $request->input('group_tutoring_hours'),
            'complex_thesis_tutoring_hours' => $request->input('complex_thesis_tutoring_hours'),
            'community_practice_tutoring_hours' => $request->input('community_practice_tutoring_hours'),
            'distributive_hours' => $request->input('distributive_hours'),
            'utah_hours' => $request->input('utah_hours'),
            'academic_hours' => $request->input('academic_hours'),
            'managements' => $request->input('managements'),
        ]);

        // Crear el proyecto
        $project = Project::create([
            'name' => $request->input('project.name'),
            'year' => $request->input('project.year'),
            'research_project' => $request->input('project.research_project'),
            'position' => $request->input('project.position'),
            'teacher_id' => $teacher->ci,
        ]);

        // Crear las materias
        foreach ($request->input('subjects') as $subjectData) {
            // Verificar si la clave 'affinity' existe en el array $subjectData
            if (!array_key_exists('affinity', $subjectData)) {
                // Manejar el caso en que 'affinity' no esté definido
                return redirect()->back()->withErrors(['affinity' => 'El campo afinidad es obligatorio para todas las materias.']);
            }

            Subject::create([
                'name' => $subjectData['name'],
                'cycle' => $subjectData['cycle'],
                'affinity' => $subjectData['affinity'],
                'teacher_ci' => $teacher->ci,
            ]);
        }

        // Redirigir o devolver una respuesta
        return redirect()->route('teachers.index')->with('success', 'Datos guardados correctamente.');
    }

    public function show(Teacher $teacher)
    {
        //tomar del objeto teacher el ci y comparar con la tabla historic el campo IDENTIFICACION, si son iguales mostrar todos los datos y guardarlos en la variable $teacher

        $teachers = DB::table('teachers')
            ->join('historic', 'teachers.ci', '=', 'historic.IDENTIFICACION')
            ->select('teachers.*', 'historic.*')
            ->where('teachers.ci', '=', $teacher->ci)
            ->get();

        // Cargar las materias y proyectos relacionados
        $teacher->load(['subjects', 'projects']);

        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];

        return view('teachers.show', compact('teacher', 'otherOptions', 'teachers'));
    }

    public function edit(Teacher $teacher)
    {
        //$teachingHours = TeachingHour::all(); // Paso 1
        $teacher->load(['subjects', 'projects']); // Load related subjects

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

    public function import(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,csv',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'El archivo es requerido y debe ser de tipo xlsx o csv.',
                'errors' => $validator->errors(),
            ], 400);
        }

        try {
            Excel::import(new TeachersImport, $request->file('file'));

            return response()->json([
                'success' => true,
                'message' => 'Profesores importados correctamente.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error al importar los profesores.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function downloadTemplate()
    {
        $filePath = storage_path('app/public/teachers_template.xlsx');
        return response()->download($filePath, 'teachers_template.xlsx');
    }

    public function export()
    {
        return Excel::download(new TeachersExport, 'teachers.xlsx');
    }
}
