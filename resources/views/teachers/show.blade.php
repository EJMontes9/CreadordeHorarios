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
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 0 ? null : 0">
                                Información Personal
                            </h3>
                            <div x-show="open === 0" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">Cédula de Identidad:</p>
                                    <p>{{ $teacher->ci ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Nombre:</p>
                                    <p>{{ $teacher->first_name ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Apellido:</p>
                                    <p>{{ $teacher->last_name ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Género:</p>
                                    <p>{{ $teacher->gender ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Fecha de Nacimiento:</p>
                                    <p>{{ $teacher->date_of_birth ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Edad:</p>
                                    <p>{{ $teacher->age ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Nacionalidad:</p>
                                    <p>{{ $teacher->nacionality ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Información de Contactos -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 1 ? null : 1">
                                Información de Contactos
                            </h3>
                            <div x-show="open === 1" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">Número de Celular:</p>
                                    <p>{{ $teacher->num_cellphone ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Correo Personal:</p>
                                    <p>{{ $teacher->email ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Correo Institucional:</p>
                                    <p>{{ $teacher->email_ug ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Información Académica -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 2 ? null : 2">
                                Información Académica
                            </h3>
                            <div x-show="open === 2" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">Fecha de Ingreso:</p>
                                    <p>{{ $teacher->date_of_admission ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Dedicación:</p>
                                    <p>{{ $teacher->dedication ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Descripción Puesto:</p>
                                    <p>{{ $teacher->den_puesto ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Cargo:</p>
                                    <p>{{ $teacher->rol ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Título de Cuarto Nivel:</p>
                                    <p>{{ $teacher->third_level_title ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Título de Cuarto Nivel:</p>
                                    <p>{{ $teacher->fourth_level_title ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Maestría:</p>
                                    <p>{{ $otherOptions[$teacher->master_degree] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Doctorado o PhD:</p>
                                    <p>{{ $otherOptions[$teacher->doctorate] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Especialidad:</p>
                                    <p>{{ $otherOptions[$teacher->specialty] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Diplomado:</p>
                                    <p>{{ $otherOptions[$teacher->researcher] ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas de Contrato:</p>
                                    <p>{{ $teacher->contract_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Tipo de Contrato:</p>
                                    <p>{{ $teacher->contract_type ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Carrera:</p>
                                    <p>{{ $teacher->career ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Afinidad:</p>
                                    <p>{{ $teacher->afinity ? 'Sí' : 'No' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 4 ? null : 4">
                                Materias
                            </h3>
                            <div x-show="open === 4" x-transition class="grid grid-cols-2 gap-4">
                                @foreach($teacher->subjects as $subject)
                                    <div class="border p-4 rounded-lg">
                                        <p><strong>Nombre:</strong> {{ $subject->name }}</p>
                                        <p><strong>Ciclo:</strong> {{ $subject->cycle }}</p>
                                        <p><strong>Afinidad:</strong> {{ $subject->afinity }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Card para Projects -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 5 ? null : 5">
                                Proyectos
                            </h3>
                            <div x-show="open === 5" x-transition class="grid grid-cols-2 gap-4">
                                @foreach($teacher->projects as $project)
                                    <div class="border p-4 rounded-lg">
                                        <p><strong>Nombre:</strong> {{ $project->name }}</p>
                                        <p><strong>Año:</strong> {{ $project->year }}</p>
                                        <p><strong>Proyecto de Investigación:</strong> {{ $project->research_project ? 'Sí' : 'No' }}</p>
                                        <p><strong>Posición:</strong> {{ $project->position }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Card para Información de Planificación -->
                        <div class="card border border-gray-300 shadow p-4 rounded-lg mb-4 hover:shadow-lg">
                            <h3 class="text-center font-semibold text-lg mb-4 cursor-pointer"
                                @click="open = open === 3 ? null : 3">
                                Información de Planificación
                            </h3>
                            <div x-show="open === 3" x-transition class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">Periodo:</p>
                                    <p>{{ $teacher->period ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Docente Horario:</p>
                                    <p>{{ $teacher->teacher_schedule_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Preparación Clases:</p>
                                    <p>{{ $teacher->class_preparation_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Investigación:</p>
                                    <p>{{ $teacher->research_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Gestión:</p>
                                    <p>{{ $teacher->management_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Gestión Social Conocimiento:</p>
                                    <p>{{ $teacher->social_knowledge_management_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Prácticas Pre Profesionales:</p>
                                    <p>{{ $teacher->pre_professional_practice_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Académicas:</p>
                                    <p>{{ $teacher->academic_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Titulación:</p>
                                    <p>{{ $teacher->thesis_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Individuales:</p>
                                    <p>{{ $teacher->individual_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Grupales:</p>
                                    <p>{{ $teacher->group_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Titulación Complejivo:</p>
                                    <p>{{ $teacher->complex_thesis_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Tutorías Prácticas Comunitarias:</p>
                                    <p>{{ $teacher->community_practice_tutoring_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Distributivo:</p>
                                    <p>{{ $teacher->distributive_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas UTAH:</p>
                                    <p>{{ $teacher->utah_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Horas Académico:</p>
                                    <p>{{ $teacher->academic_hours ?? '' }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Gestiones:</p>
                                    <p>{{ $teacher->managements ?? '' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gestión Academica 5 años, modal -->
                        <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            class="my-10 block mx-auto text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800"
                            type="button">
                            VER HISTÓRICO DE GESTIÓN DE HACE 5 AÑOS
                        </button>

                        <!-- Main modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <div class="flex-grow text-center">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                GESTIÓN DE HACE 5 AÑOS
                                            </h3>
                                            <h2 class="text-base font-medium text-gray-500 dark:text-gray-400 mt-5">
                                                <span class="font-semibold">Docente:</span> {{ $teacher->first_name }}
                                                {{ $teacher->last_name }}
                                            </h2>
                                            <h2 class="text-base font-medium text-gray-500 dark:text-gray-400 mt-2">
                                                <span class="font-semibold">Cédula de Identidad:</span>
                                                {{ $teacher->ci }}
                                            </h2>
                                            <div class="mt-4">
                                                <select id="periodoSelect" onchange="filtrarPorPeriodo()"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-gray-700 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:text-white">
                                                    <option value="">Seleccione un Periodo para Filtrar</option>
                                                    @php
                                                        $periodosUnicos = [];
                                                    @endphp
                                                    @foreach ($teachers as $teacher)
                                                        @if (!in_array($teacher->PERIODO, $periodosUnicos))
                                                            @php
                                                                $periodosUnicos[] = $teacher->PERIODO;
                                                            @endphp
                                                            <option value="{{ $teacher->PERIODO }}">
                                                                {{ $teacher->PERIODO }}</option>
                                                        @endif
                                                    @endforeach
                                                    <option value="todos">Ver Todos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4 overflow-x-auto">
                                        <div class="contenedor-tabla">
                                            <!-- Mensaje cuando no hay datos disponibles -->
                                            <div id="no-data-message" class="hidden text-center text-gray-500">
                                                <p class="text-lg">No hay datos históricos disponibles para este Profesor . . .</p>
                                            </div>
                                            <table id="historical-table"
                                                class="min-w-full divide-y divide-gray-200 hidden">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold hidden">
                                                            COD PLECTIVO</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            PERIODO</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            FACULTAD</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            CARRERA</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            NIVEL</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            MATERIA</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            GRUPO</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            AULA</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            MODALIDAD</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            MODALIDAD MALLA</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            CON MOVILIDAD</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold hidden">
                                                            IDENTIFICACION</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold hidden">
                                                            DOCENTE</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            JORNADA</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            HORAS</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            LUNES</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            MARTES</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            MIERCOLES</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            JUEVES</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            VIERNES</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            SABADO</th>
                                                        <th
                                                            class="px-6 py-3 text-center text-sm text-gray-500 uppercase tracking-wider font-bold">
                                                            DOMINGO</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @foreach ($teachers as $teacher)
                                                        <tr data-periodo="{{ $teacher->PERIODO }}">
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center hidden">
                                                                {{ $teacher->COD_PLECTIVO }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->PERIODO }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->FACULTAD }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->CARRERA }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->NIVEL }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->MATERIA }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->GRUPO }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->AULA }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->MODALIDAD }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->MODALIDAD_MALLA }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->CON_MOVILIDAD }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center hidden">
                                                                {{ $teacher->IDENTIFICACION }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center hidden">
                                                                {{ $teacher->DOCENTE }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->JORNADA }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->HORAS }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->LUNES }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->MARTES }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->MIERCOLES }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->JUEVES }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->VIERNES }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->SABADO }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                                                {{ $teacher->DOMINGO }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="default-modal" type="button"
                                            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-left items-center px-4 py-4 sm:px-6">
                            <a href="{{ route('teachers.index') }}"
                                class="inline-block text-sm text-white whitespace-nowrap py-2 px-4 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 font-semibold rounded-lg">
                                Volver a la lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>t>

<style>
    /* Estilo para el contenedor de la tabla */
    .contenedor-tabla {
        max-height: 500px;
        /* Ajusta esto según necesites */
        overflow-y: auto;
    }

    /* Estilo para fijar la cabecera */
    thead th {
        position: sticky;
        top: 0;
        background-color: #f9fafb;
        /* Asegúrate de establecer un fondo para la cabecera */
        z-index: 1;
        /* Esto asegura que la cabecera se muestre sobre el contenido al hacer scroll */
    }
</style>

<script>
    function filtrarPorPeriodo() {
        var seleccionado = document.getElementById("periodoSelect").value;
        var filas = document.querySelectorAll("table tr[data-periodo]");

        filas.forEach(function(fila) {
            // Obtiene el valor del atributo data-periodo de la fila
            var periodo = fila.getAttribute("data-periodo");

            if (seleccionado === "todos" || periodo === seleccionado) {
                fila.style.display = ""; // Muestra la fila
            } else {
                fila.style.display = "none"; // Oculta la fila
            }
        });
    }


    document.addEventListener('DOMContentLoaded', function() {
        var teachers = @json($teachers);
        var table = document.getElementById('historical-table');
        var noDataMessage = document.getElementById('no-data-message');

        if (teachers.length === 0) {
            table.classList.add('hidden');
            noDataMessage.classList.remove('hidden');
        } else {
            table.classList.remove('hidden');
            noDataMessage.classList.add('hidden');
        }
    });
</script>
