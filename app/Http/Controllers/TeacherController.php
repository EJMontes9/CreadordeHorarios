<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeachingHour;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        $teachingHours = TeachingHour::all();
        return view('teachers.create', compact('teachingHours'));
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
    return view('teachers.edit', compact('teacher', 'teachingHours')); // Paso 2
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