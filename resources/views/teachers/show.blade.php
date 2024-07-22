<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del Profesor
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl font-semibold text-center mb-5">
                        Información del Profesor
                    </div>

                    <div x-data="{ open: null }">
                        <!-- Card para Información Personal -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer" @click="open = open === 0 ? null : 0">
                                Información Personal
                            </h3>
                            <div x-show="open === 0" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-medium">Cédula de Identidad:</p>
                                    <p>{{ $teacher->ci ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Nombre:</p>
                                    <p>{{ $teacher->first_name ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Apellido:</p>
                                    <p>{{ $teacher->last_name ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Género:</p>
                                    <p>{{ $teacher->gender ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Fecha de Nacimiento:</p>
                                    <p>{{ $teacher->date_of_birth ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Edad:</p>
                                    <p>{{ $teacher->age ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Nacionalidad:</p>
                                    <p>{{ $teacher->nacionality ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Información de Contactos -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer" @click="open = open === 1 ? null : 1">
                                Información de Contactos
                            </h3>
                            <div x-show="open === 1" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-medium">Número de Celular:</p>
                                    <p>{{ $teacher->num_cellphone ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Correo Personal:</p>
                                    <p>{{ $teacher->email ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Correo Institucional:</p>
                                    <p>{{ $teacher->email_ug ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Información Académica -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer" @click="open = open === 2 ? null : 2">
                                Información Académica
                            </h3>
                            <div x-show="open === 2" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-medium">Fecha de Ingreso:</p>
                                    <p>{{ $teacher->date_of_admission ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Dedicación:</p>
                                    <p>{{ $teacher->dedication ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Descripción Puesto:</p>
                                    <p>{{ $teacher->den_puesto ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Cargo:</p>
                                    <p>{{ $teacher->rol ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Título de Cuarto Nivel:</p>
                                    <p>{{ $teacher->third_level_title ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Título de Cuarto Nivel:</p>
                                    <p>{{ $teacher->fourth_level_title ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Maestría:</p>
                                    <p>{{ $otherOptions[$teacher->master_degree] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Doctorado o PhD:</p>
                                    <p>{{ $otherOptions[$teacher->doctorate] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Especialidad:</p>
                                    <p>{{ $otherOptions[$teacher->specialty] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Diplomado:</p>
                                    <p>{{ $otherOptions[$teacher->researcher] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas de Contrato:</p>
                                    <p>{{ $teacher->contract_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Tipo de Contrato:</p>
                                    <p>{{ $teacher->contract_type ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Carrera:</p>
                                    <p>{{ $teacher->career ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Afinidad:</p>
                                    <p>{{ $teacher->afinity ? 'Sí' : 'No' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Información de Planificación -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer" @click="open = open === 3 ? null : 3">
                                Información de Planificación
                            </h3>
                            <div x-show="open === 3" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-medium">Periodo:</p>
                                    <p>{{ $teacher->period ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Docente Horario:</p>
                                    <p>{{ $teacher->teacher_schedule_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Preparación Clases:</p>
                                    <p>{{ $teacher->class_preparation_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Investigación:</p>
                                    <p>{{ $teacher->research_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Gestión:</p>
                                    <p>{{ $teacher->management_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Gestión Social Conocimiento:</p>
                                    <p>{{ $teacher->social_knowledge_management_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Prácticas Pre Profesionales:</p>
                                    <p>{{ $teacher->pre_professional_practice_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Académicas:</p>
                                    <p>{{ $teacher->academic_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Titulación:</p>
                                    <p>{{ $teacher->thesis_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Individuales:</p>
                                    <p>{{ $teacher->individual_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Grupales:</p>
                                    <p>{{ $teacher->group_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Titulación Complejivo:</p>
                                    <p>{{ $teacher->complex_thesis_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Tutorías Prácticas Comunitarias:</p>
                                    <p>{{ $teacher->community_practice_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Distributivo:</p>
                                    <p>{{ $teacher->distributive_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas UTAH:</p>
                                    <p>{{ $teacher->utah_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Horas Académico:</p>
                                    <p>{{ $teacher->academic_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Gestiones:</p>
                                    <p>{{ $teacher->managements ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Actividades:</p>
                                    <p>{{ $teacher->activities ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Proyectos Investigación:</p>
                                    <p>{{ $teacher->research_projects ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Asignaturas a Dictar Actual:</p>
                                    <p>{{ $teacher->subjects_to_teach_current ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="flex justify-center items-center px-4 py-4 sm:px-6">
                        <a href="{{ route('teachers.index') }}"
                           class="inline-block text-sm text-white whitespace-nowrap py-2 px-4 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-lg">
                            Volver a la lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>t>
