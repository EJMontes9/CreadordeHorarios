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
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 0 ? null : 0">
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
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 1 ? null : 1">
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
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 2 ? null : 2">
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
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 3 ? null : 3">
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

                        <!-- Gestión Academica 5 años, modal -->
                        <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="my-10 block mx-auto text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800"
                            type="button">
                            VER HISTÓRICO DE GESTIÓN DE HACE 5 AÑOS
                        </button>

                        <!-- Main modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-4xl max-h-full">
                                <!-- Cambiado max-w-2xl a max-w-4xl para hacer el modal más ancho -->
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <div class="flex-grow text-center">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                GESTIÓN DE HACE 5 AÑOS
                                            </h3>
                                        </div>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4 overflow-x-auto"
                                        style="height: calc(7 * 3.5rem); overflow-y: auto;">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        ID</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        CI</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Nombre Completo</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Fecha de Nacimiento</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Edad</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Género</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Nacionalidad</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Teléfono</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Email</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Email UG</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Dedicación</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Tipo de Contrato</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Denominación del Puesto</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Título de Tercer Nivel</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Título de Cuarto Nivel</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Fecha de Admisión</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Carrera</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Rol</th>
                                                    <!-- Agrega más columnas según necesites -->
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($teachers as $teacher)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->id }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->ci }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->date_of_birth }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->age }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->gender }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->nacionality }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->num_cellphone }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->email }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->email_ug }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->dedication }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->contract_type }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->den_puesto }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->third_level_title }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->fourth_level_title }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->date_of_admission }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->career }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{ $teacher->rol }}</td>
                                                        <!-- Continúa con el resto de los datos según necesites -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="default-modal" type="button"
                                            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                            Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex justify-left items-center px-4 py-4 sm:px-6">
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
