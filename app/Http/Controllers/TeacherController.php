<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeachingHour;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $teachers = Teacher::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('first_name', 'LIKE', "%{$searchTerm}%")
                ->orWhere('last_name', 'LIKE', "%{$searchTerm}%");
        })->get();

        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        $teachingHours = TeachingHour::all();
        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];
        return view('teachers.create', compact('teachingHours', 'otherOptions'));
    }

    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('teachers.index');
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        $teachingHours = TeachingHour::all(); // Paso 1
        $otherOptions = ['1' => '1', '2' => '2', '3' => '3', 'none' => 'Ninguno'];
        return view('teachers.edit', compact('teacher', 'teachingHours', 'otherOptions')); // Paso 2
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
