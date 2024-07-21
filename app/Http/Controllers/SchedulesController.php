<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Schedule;

use Illuminate\Http\Request;

class SchedulesController extends Controller
{

    public function generateSchedulesAutomatically()
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();

        foreach ($subjects as $subject) {
            // Suponiendo que tienes una lógica para asignar profesores a materias
            $teacher = $teachers->random(); // Ejemplo: asignar un profesor al azar

            // Suponiendo que tienes una lógica para definir el día y la hora
            $day = 'Lunes'; // Ejemplo estático
            $start_time = '08:00:00';
            $end_time = '10:00:00';
            $classroom = '101';

            // Crear el horario
            Schedule::create([
                'day' => $day,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'classroom' => $classroom,
                'subject_id' => $subject->id,
                'teacher_id' => $teacher->id,
            ]);
        }

        // Redirigir al usuario o enviar una respuesta
        return redirect()->route('schedules.index')->with('success', 'Horarios generados automáticamente con éxito.');
    }

}
