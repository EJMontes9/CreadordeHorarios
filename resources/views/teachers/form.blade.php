<div class="flex justify-center">
    <ol id="progress-bar" class="flex item-center w-full mb-4 sm:mb-5 ml-7 mr-3">
        <li
            class="step flex w-1/4 items-center justify-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
            <span class="text-center mx-5">Información Personal</span>
        </li>
        <li
            class="step flex w-1/4 items-center justify-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
            <span class="text-center mx-5">Contactos</span>
        </li>
        <li
            class="step flex w-1/4 items-center justify-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
            <span class="text-center mx-5">Información Académica</span>
        </li>
        <li
            class="step flex w-1/4 items-center justify-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
            <span class="text-center mx-5">Información de Materias</span>
        </li>
        <li
            class="step flex w-1/4 items-center justify-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
            <span class="text-center mx-5">Información de Proyectos</span>
        </li>
        <li class="step flex items-center w-1/4 justify-center">
            <span class="text-center mx-5">Información Planificación</span>
        </li>
    </ol>
</div>

<form id="form-all" action="{{ $action }}" method="post">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <!-- Información Personal -->
    <div id="section-personal" class="border border-blue-100 shadow p-4 rounded-2xl">
        <div class="flex flex-col sm:flex-row mb-3 mt-2">
            <div class="w-full">
                <h3 class="text-center font-semibold text-lg">INFORMACIÓN PERSONAL</h3>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row pb-3">
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="ci" :value="__('Cédula de Identidad:')"/>
                <x-input id="ci" class="block mt-1 w-full no-spin" type="number" name="ci"
                         value="{{ $teacher->ci ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="first_name" :value="__('Nombre:')"/>
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                         value="{{ $teacher->first_name ?? '' }}" required autofocus/>
            </div>
            <div class="flex flex-col w-full sm:w-1/3">
                <x-label for="last_name" :value="__('Apellido:')"/>
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                         value="{{ $teacher->last_name ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3 justify-between">
            <div class="flex flex-col w-full sm:w-1/4 mb-3 sm:mb-0">
                <x-label for="gender" :value="__('Género:')"/>
                <x-input id="gender" class="block mt-1 w-full" type="text" name="gender"
                         value="{{ $teacher->gender ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mx-3 mb-3 sm:mb-0">
                <x-label for="date_of_birth" :value="__('Fecha de Nacimiento:')"/>
                <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                         value="{{ $teacher->date_of_birth ?? '' }}" required max="{{ now()->toDateString() }}"/>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mx-3 mb-3 sm:mb-0">
                <x-label for="age" :value="__('Edad:')"/>
                <x-input id="age" class="block mt-1 w-full" type="text" name="age"
                         value="{{ $teacher->age ?? '' }}" readonly="true"/>
            </div>
            <div class="flex flex-col w-full sm:w-1/4">
                <x-label for="nacionality" :value="__('Nacionalidad:')"/>
                <x-input id="nacionality" class="block mt-1 w-full" type="text" name="nacionality"
                         value="{{ $teacher->nacionality ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-between mt-5">
            <!-- Botón regresar a teachers.index -->
            <a href="{{ route('teachers.index') }}"
               class="bg-green-500 hover:bg-green-600 text-white font-bold px-2 rounded inline-flex items-center mb-3 sm:mb-0">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <!-- Icono de flecha hacia la izquierda -->
                    <path fill-rule="evenodd"
                          d="M10 19a9 9 0 110-18 9 9 0 010 18zm4.707-9.707a1 1 0 00-1.414-1.414L10 12.586 7.707 10.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l5-5z"
                          clip-rule="evenodd"></path>
                </svg>
                <span>Regresar</span>
            </a>

            <x-button id="next-to-contact" type="button" class="mt-4 sm:mt-0">
                {{ __('Siguiente') }}
            </x-button>
        </div>
    </div>

    <!-- Información de Contactos -->
    <div id="section-contact" class="hidden border border-blue-200 shadow p-4 rounded-2xl my-5">
        <div class="flex flex-row mb-3 mt-2">
            <div class="w-full">
                <h3 class="text-center font-semibold text-lg">CONTACTOS</h3>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="num_cellphone" :value="__('Numero de celular:')"/>
                <x-input id="num_cellphone" class="block mt-1 w-full no-spin" type="number" name="num_cellphone"
                         value="{{ $teacher->num_cellphone ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="email" :value="__('Correo Personal:')"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                         value="{{ $teacher->email ?? '' }}" required oninput="validateEmail(this)"/>
                <span id="email-error" class="text-red-500 text-sm hidden">Correo no válido</span>
            </div>
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="email_ug" :value="__('Correo Institucional:')"/>
                <x-input id="email_ug" class="block mt-1 w-full" type="email" name="email_ug"
                         value="{{ $teacher->email_ug ?? '' }}" required oninput="validateEmail(this)"/>
                <span id="email_ug-error" class="text-red-500 text-sm hidden">Correo no válido</span>
            </div>
        </div>
        <div class="flex justify-between">
            <x-button id="prev-to-personal" type="button">
                {{ __('Regresar') }}
            </x-button>
            <x-button id="next-to-academic" type="button">
                {{ __('Siguiente') }}
            </x-button>
        </div>
    </div>

    <!-- Información Académica -->
    <div id="section-academic" class="hidden border border-blue-200 shadow p-4 rounded-2xl my-5">
        <div class="flex flex-row mb-3 mt-2">
            <div class="w-full">
                <h3 class="text-center font-semibold text-lg">INFORMACIÓN ACADÉMICA</h3>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col mb-3 w-full sm:w-1/4 sm:mr-3">
                <x-label for="date_of_admission" :value="__('Fecha de Ingreso:')"/>
                <x-input id="date_of_admission" class="block mt-1 w-full" type="date" name="date_of_admission"
                         value="{{ $teacher->date_of_admission ?? '' }}" required max="{{ now()->toDateString() }}"/>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mr-3">
                <x-label for="dedication" :value="__('Dedicación:')"/>
                <x-input id="dedication" class="block mt-1 w-full" type="text" name="dedication"
                         value="{{ $teacher->dedication ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3">
                <x-label for="den_puesto" :value="__('Descripción Puesto:')"/>
                <x-input id="den_puesto" class="block mt-1 w-full" type="text" name="den_puesto"
                         value="{{ $teacher->den_puesto ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3">
                <x-label for="rol" :value="__('Cargo:')"/>
                <x-input id="rol" class="block mt-1 w-full" type="text" name="rol"
                         value="{{ $teacher->rol ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3">
                <x-label for="third_level_title" :value="__('Titulo de tercer nivel:')"/>
                <x-input id="third_level_title" class="block mt-1 w-full" type="text" name="third_level_title"
                         value="{{ $teacher->third_level_title ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3">
                <x-label for="fourth_level_title" :value="__('Titulo de cuarto nivel:')"/>
                <x-input id="fourth_level_title" class="block mt-1 w-full" type="text" name="fourth_level_title"
                         value="{{ $teacher->fourth_level_title ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/4 sm:mr-3">
                <x-label for="master_degree" :value="__('Maestría:')"/>
                <select id="master_degree" class="block mt-1 w-full rounded-md" name="master_degree" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    @foreach ($otherOptions as $value => $label)
                        <option value="{{ $value }}"
                            {{ isset($teacher->master_degree) && $teacher->master_degree == $value ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mr-3">
                <x-label for="doctorate" :value="__('Doctorado o PHD:')"/>
                <select id="doctorate" class="block mt-1 w-full rounded-md" name="doctorate" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    @foreach ($otherOptions as $value => $label)
                        <option value="{{ $value }}"
                            {{ isset($teacher->doctorate) && $teacher->doctorate == $value ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mr-3">
                <x-label for="specialty" :value="__('Especialidad:')"/>
                <select id="specialty" class="block mt-1 w-full rounded-md" name="specialty" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    @foreach ($otherOptions as $value => $label)
                        <option value="{{ $value }}"
                            {{ isset($teacher->specialty) && $teacher->specialty == $value ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col w-full sm:w-1/4 sm:mr-3">
                <x-label for="researcher" :value="__('Diplomado:')"/>
                <select id="researcher" class="block mt-1 w-full rounded-md" name="researcher" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    @foreach ($otherOptions as $value => $label)
                        <option value="{{ $value }}"
                            {{ isset($teacher->researcher) && $teacher->researcher == $value ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3">
                <x-label for="contract_hours" :value="__('Horas de Contrato:')"/>
                <x-input id="contract_hours" class="block mt-1 w-full no-spin" type="number" name="contract_hours"
                         value="{{ $teacher->contract_hours ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-2/3 sm:mr-3">
                <x-label for="contract_type" :value="__('Tipo de contrato:')"/>
                <x-input id="contract_type" class="block mt-1 w-full" type="text" name="contract_type"
                         value="{{ $teacher->contract_type ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-2/3 sm:mr-3">
                <x-label for="career" :value="__('Carrera:')"/>
                <x-input id="career" class="block mt-1 w-full" type="text" name="career"
                         value="{{ $teacher->career ?? '' }}" required/>
            </div>
        </div>
        <div class="flex justify-between">
            <x-button id="prev-to-contact" type="button">
                {{ __('Regresar') }}
            </x-button>
            <x-button id="next-to-subjects" type="button">
                {{ __('Siguiente') }}
            </x-button>
        </div>
    </div>

    <!-- Información de Materias -->
<div id="section-subjects" class="hidden border border-blue-200 shadow p-4 rounded-2xl my-5">
    <div class="flex flex-row mb-3 mt-2">
        <div class="w-full">
            <h3 class="text-center font-semibold text-lg">INFORMACIÓN DE MATERIAS</h3>
        </div>
    </div>

    <div id="subjects-container">
        @if(isset($teacher) && $teacher->subjects)
            @foreach($teacher->subjects as $subject)
                <div class="flex flex-col sm:flex-row mb-3 subject-item">
                    <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                        <x-label for="subject_name" :value="__('Nombre de la Materia:')"/>
                        <x-input id="subject_name" class="block mt-1 w-full" type="text" name="subjects[{{ $loop->index }}][name]"
                                 value="{{ $subject->name }}" required/>
                    </div>
                    <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                        <x-label for="subject_cycle" :value="__('Ciclo:')"/>
                        <x-input id="subject_cycle" class="block mt-1 w-full" type="text" name="subjects[{{ $loop->index }}][cycle]"
                                 value="{{ $subject->cycle }}" required/>
                    </div>
                    <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                        <x-label for="subject_affinity" :value="__('Afinidad:')"/>
                        <select id="subject_affinity" class="block mt-1 w-full rounded-md" name="subjects[{{ $loop->index }}][affinity]"
                                required>
                            <option value="">{{ __('Seleccione una opción') }}</option>
                            <option value="1" {{ $subject->affinity == 1 ? 'selected' : '' }}>{{ __('Sí') }}</option>
                            <option value="0" {{ $subject->affinity == 0 ? 'selected' : '' }}>{{ __('No') }}</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <x-button type="button" class="remove-subject bg-red-500 hover:bg-red-600 text-white">
                            Eliminar2
                        </x-button>
                    </div>
                </div>
            @endforeach
        @else
            <!-- Código para manejar el caso de creación sin materias -->
            <div class="flex flex-col sm:flex-row mb-3 subject-item">
                <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                    <x-label for="subject_name" :value="__('Nombre de la Materia:')"/>
                    <x-input id="subject_name" class="block mt-1 w-full" type="text" name="subjects[0][name]"
                             required/>
                </div>
                <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                    <x-label for="subject_cycle" :value="__('Ciclo:')"/>
                    <x-input id="subject_cycle" class="block mt-1 w-full" type="text" name="subjects[0][cycle]"
                             required/>
                </div>
                <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                    <x-label for="subject_affinity" :value="__('Afinidad:')"/>
                    <select id="subject_affinity" class="block mt-1 w-full rounded-md" name="subjects[0][affinity]"
                            required>
                        <option value="">{{ __('Seleccione una opción') }}</option>
                        <option value="1">{{ __('Sí') }}</option>
                        <option value="0">{{ __('No') }}</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <x-button type="button" class="remove-subject bg-red-500 hover:bg-red-600 text-white">
                        Eliminar2
                    </x-button>
                </div>
            </div>
        @endif
    </div>

    <div class="flex justify-between">
        <x-button id="prev-to-academic" type="button">
            {{ __('Regresar') }}
        </x-button>
        <x-button class="bg-green-500 hover:bg-green-600 text-white" id="add-subject" type="button">
            {{ __('Agregar Materia') }}
        </x-button>
        <x-button id="next-to-project" type="button">
            {{ __('Siguiente') }}
        </x-button>
    </div>
</div>

    <!-- Información de Proyecto -->
    <div id="section-project" class="hidden border border-blue-200 shadow p-4 rounded-2xl my-5">
        <div class="flex flex-row mb-3 mt-2">
            <div class="w-full">
                <h3 class="text-center font-semibold text-lg">INFORMACIÓN DE PROYECTO</h3>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="project_name" :value="__('Nombre del Proyecto:')"/>
                <x-input id="project_name" class="block mt-1 w-full" type="text" name="project[name]"
                         value="{{ $teacher->projects[0]->name ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="project_year" :value="__('Año del Proyecto:')"/>
                <x-input id="project_year" class="block mt-1 w-full" type="number" name="project[year]"
                         value="{{ $teacher->projects[0]->year ?? '' }}" required/>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row mb-3">
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="research_project" :value="__('¿Proyecto de investigación?')"/>
                <select id="research_project" class="block mt-1 w-full rounded-md" name="project[research_project]"
                        required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    <option
                        value="1" {{ isset($teacher->projects[0]->research_project) && $teacher->projects[0]->research_project == 1 ? 'selected' : '' }}>{{ __('Sí') }}</option>
                    <option
                        value="0" {{ isset($teacher->projects[0]->research_project) && $teacher->projects[0]->research_project == 0 ? 'selected' : '' }}>{{ __('No') }}</option>
                </select>
            </div>
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="position" :value="__('Cargo:')"/>
                <select id="position" class="block mt-1 w-full rounded-md" name="project[position]" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    <option
                        value="Docente investigador" {{ isset($teacher->projects[0]->position) && $teacher->projects[0]->position == 'Docente investigador' ? 'selected' : '' }}>{{ __('Docente investigador') }}</option>
                    <option
                        value="Director" {{ isset($teacher->projects[0]->position) && $teacher->projects[0]->position == 'Director' ? 'selected' : '' }}>{{ __('Director') }}</option>
                </select>
            </div>
        </div>
        <div class="flex justify-between">
            <x-button id="prev-to-subjects" type="button">
                {{ __('Regresar') }}
            </x-button>
            <x-button id="next-to-planification" type="button">
                {{ __('Siguiente') }}
            </x-button>
        </div>
    </div>

    <!-- Información de Planificación -->
    <div id="section-planification" class="hidden border border-blue-200 shadow p-4 rounded-2xl my-5">
        <div class="flex flex-row mb-3 mt-2">
            <div class="w-full">
                <h3 class="text-center font-semibold text-lg">INFORMACIÓN DE PLANIFICACIÓN</h3>
            </div>
        </div>

        <div class="flex flex-wrap mb-3">
            <div class="flex flex-col w-full md:w-1/3 mr-3 mb-3">
                <x-label for="period" :value="__('Periodo:')"/>
                <x-input id="period" class="block mt-1 w-full" type="text" name="period"
                         value="{{ $teacher->period ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full md:w-1/3 mr-3 mb-3">
                <x-label for="teacher_schedule_hours" :value="__('Horas Docente Horario')"/>
                <x-input id="teacher_schedule_hours" class="block mt-1 w-full no-spin" type="number"
                         name="teacher_schedule_hours" value="{{ $teacher->teacher_schedule_hours ?? '' }}" required/>
            </div>
            <div class="flex flex-col w-full md:w-1/3 mr-3 mb-3">
                <x-label for="class_preparation_hours" :value="__('Horas Preparación Clases:')"/>
                <x-input id="class_preparation_hours" class="block mt-1 w-full no-spin" type="number"
                         name="class_preparation_hours" value="{{ $teacher->class_preparation_hours ?? '' }}" required/>
            </div>
        </div>

        <div class="flex flex-wrap mb-3">
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="research_hours" :value="__('Horas Investigación:')"/>
                <x-input id="research_hours" class="block mt-1 w-full no-spin" type="number" name="research_hours"
                         value="{{ $teacher->research_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="management_hours" :value="__('Horas Gestión:')"/>
                <x-input id="management_hours" class="block mt-1 w-full no-spin" type="number" name="management_hours"
                         value="{{ $teacher->management_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="social_knowledge_management_hours" :value="__('Horas Gestión Social Conocimiento:')"/>
                <x-input id="social_knowledge_management_hours" class="block mt-1 w-full no-spin" type="number"
                         name="social_knowledge_management_hours"
                         value="{{ $teacher->social_knowledge_management_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="pre_professional_practice_tutoring_hours"
                         :value="__('Horas Tutorías Prácticas Pre Profesionales:')"/>
                <x-input id="pre_professional_practice_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="pre_professional_practice_tutoring_hours"
                         value="{{ $teacher->pre_professional_practice_tutoring_hours ?? '' }}"/>
            </div>
        </div>

        <div class="flex flex-wrap mb-3">
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="academic_tutoring_hours" :value="__('Horas Tutorías Académicas:')"/>
                <x-input id="academic_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="academic_tutoring_hours" value="{{ $teacher->academic_tutoring_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="thesis_tutoring_hours" :value="__('Horas Tutorías Titulación:')"/>
                <x-input id="thesis_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="thesis_tutoring_hours" value="{{ $teacher->thesis_tutoring_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="individual_tutoring_hours" :value="__('Horas Tutorías Individuales:')"/>
                <x-input id="individual_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="individual_tutoring_hours" value="{{ $teacher->individual_tutoring_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="group_tutoring_hours" :value="__('Horas Tutorías Grupales:')"/>
                <x-input id="group_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="group_tutoring_hours" value="{{ $teacher->group_tutoring_hours ?? '' }}"/>
            </div>
        </div>

        <div class="flex flex-wrap mb-3">
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="complex_thesis_tutoring_hours" :value="__('Horas Tutorías Titulación Complejivo:')"/>
                <x-input id="complex_thesis_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="complex_thesis_tutoring_hours"
                         value="{{ $teacher->complex_thesis_tutoring_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="community_practice_tutoring_hours" :value="__('Horas Tutorías Prácticas Comunitarias:')"/>
                <x-input id="community_practice_tutoring_hours" class="block mt-1 w-full no-spin" type="number"
                         name="community_practice_tutoring_hours"
                         value="{{ $teacher->community_practice_tutoring_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="distributive_hours" :value="__('Horas Distributivo:')"/>
                <x-input id="distributive_hours" class="block mt-1 w-full no-spin" type="number"
                         name="distributive_hours" value="{{ $teacher->distributive_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="utah_hours" :value="__('Horas UTAH:')"/>
                <x-input id="utah_hours" class="block mt-1 w-full no-spin" type="number" name="utah_hours"
                         value="{{ $teacher->utah_hours ?? '' }}"/>
            </div>
        </div>

        <div class="flex flex-wrap mb-3">
            <div class="flex flex-col w-full md:w-1/4 mr-3 mb-3">
                <x-label for="academic_hours" :value="__('Horas Académico:')"/>
                <x-input id="academic_hours" class="block mt-1 w-full no-spin" type="number" name="academic_hours"
                         value="{{ $teacher->academic_hours ?? '' }}"/>
            </div>
            <div class="flex flex-col w-full md:w-3/4 mr-3 mb-3">
                <x-label for="managements" :value="__('Gestiones:')"/>
                <x-input id="managements" class="block mt-1 w-full" type="text" name="managements"
                         value="{{ $teacher->managements ?? '' }}"/>
            </div>
        </div>
        <div class="flex justify-between">
            <x-button id="prev-to-project" type="button">
                {{ __('Regresar') }}
            </x-button>
            <x-button id="submit-form" type="submit">
                {{ __('Guardar') }}
            </x-button>
        </div>
    </div>
</form>

<!-- agregar css -->
<style>
    .no-spin::-webkit-inner-spin-button,
    .no-spin::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .no-spin {
        -moz-appearance: textfield;
        /* Firefox */
    }

    .hidden {
        display: none;
    }

    .border-red-500 {
        border-color: #f87171;
    }

    .text-red-500 {
        color: #f87171;
    }

    .hidden {
        display: none;
    }

    /* Define las clases para los pasos activos e inactivos */
    .step {
        position: relative;
    }

    .step.active::after {
        border-bottom-color: #3b82f6;
        /* Azul */
    }

    .step.dark.active::after {
        border-bottom-color: #1d4ed8;
        /* Azul oscuro en modo oscuro */
    }

    .step.inactive::after {
        border-bottom-color: #d1d5db;
        /* Gris claro por defecto */
    }

    .step.dark.inactive::after {
        border-bottom-color: #374151;
        /* Gris oscuro en modo oscuro */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const subjectsContainer = document.getElementById('subjects-container');
        const addSubjectButton = document.getElementById('add-subject');
        let subjectIndex = 1;

        addSubjectButton.addEventListener('click', function () {
            const newSubject = document.createElement('div');
            newSubject.classList.add('flex', 'flex-col', 'sm:flex-row', 'mb-3', 'subject-item');
            newSubject.innerHTML = `
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="subject_name_${subjectIndex}" :value="__('Nombre de la Materia:')"/>
                <x-input id="subject_name_${subjectIndex}" class="block mt-1 w-full" type="text" name="subjects[${subjectIndex}][name]" required/>
            </div>
            <div class="flex flex-col w-full sm:w-1/3 sm:mr-3 mb-3 sm:mb-0">
                    <x-label for="subject_cycle_${subjectIndex}" :value="__('Ciclo:')"/>
                    <x-input id="subject_cycle_${subjectIndex}" class="block mt-1 w-full" type="text" name="subjects[${subjectIndex}][cycle]" required/>
                </div>
            <div class="flex flex-col w-full sm:w-1/2 sm:mr-3 mb-3 sm:mb-0">
                <x-label for="subject_affinity_${subjectIndex}" :value="__('Afinidad:')"/>
                <select id="subject_affinity_${subjectIndex}" class="block mt-1 w-full rounded-md" name="subjects[${subjectIndex}][affinity]" required>
                    <option value="">{{ __('Seleccione una opción') }}</option>
                    <option value="1">{{ __('Sí') }}</option>
                    <option value="0">{{ __('No') }}</option>
                </select>
            </div>
            <div class="flex items-center">
                <x-button type="button" class="remove-subject bg-red-500 hover:bg-red-600 text-white font-bold px-2 rounded">
                    {{ __('Eliminar') }}
            </x-button>
        </div>
`;
            subjectsContainer.appendChild(newSubject);
            subjectIndex++;
        });

        subjectsContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-subject')) {
                event.target.closest('.subject-item').remove();
            }
        });
    });

    document.getElementById('date_of_birth').addEventListener('change', function () {
        var date_of_birth = new Date(this.value);
        var today = new Date();
        var age = today.getFullYear() - date_of_birth.getFullYear();
        var m = today.getMonth() - date_of_birth.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < date_of_birth.getDate())) {
            age--;
        }
        document.getElementById('age').value = age;
    });

    function validateEmail(input) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const isValid = emailRegex.test(input.value);
        const errorElementId = input.id + '-error';
        const errorElement = document.getElementById(errorElementId);
        if (!isValid) {
            errorElement.classList.remove('hidden');
        } else {
            errorElement.classList.add('hidden');
        }
    }

    function validateEmail(input) {
        const email = input.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const errorId = input.id + '-error';
        if (!emailRegex.test(email)) {
            document.getElementById(errorId).classList.remove('hidden');
        } else {
            document.getElementById(errorId).classList.add('hidden');
        }
    }


    document.addEventListener('DOMContentLoaded', function () {
        const sections = {
            personal: document.getElementById('section-personal'),
            contact: document.getElementById('section-contact'),
            academic: document.getElementById('section-academic'),
            subjects: document.getElementById('section-subjects'),
            project: document.getElementById('section-project'),
            planification: document.getElementById('section-planification')
        };

        const buttons = {
            nextToContact: document.getElementById('next-to-contact'),
            prevToPersonal: document.getElementById('prev-to-personal'),
            nextToAcademic: document.getElementById('next-to-academic'),
            prevToContact: document.getElementById('prev-to-contact'),
            nextToSubjects: document.getElementById('next-to-subjects'),
            prevToAcademic: document.getElementById('prev-to-academic'),
            nextToProject: document.getElementById('next-to-project'),
            prevToSubjects: document.getElementById('prev-to-subjects'),
            nextToPlanification: document.getElementById('next-to-planification'),
            prevToProject: document.getElementById('prev-to-project'),
            submitForm: document.getElementById('submit-form'),
        };

        let subjectIndex = 1;

        function showSection(sectionToShow) {
            Object.values(sections).forEach(section => section.classList.add('hidden'));
            sectionToShow.classList.remove('hidden');
        }

        function validateSection(section) {
            const inputs = section.querySelectorAll('input[required], select[required]');
            let valid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('border-red-500');
                    valid = false;
                } else {
                    input.classList.remove('border-red-500');
                }
            });

            return valid;
        }

        buttons.nextToContact.addEventListener('click', function () {
            if (validateSection(sections.personal)) {
                showSection(sections.contact);
            }
        });

        buttons.prevToPersonal.addEventListener('click', function () {
            showSection(sections.personal);
        });

        buttons.nextToAcademic.addEventListener('click', function () {
            if (validateSection(sections.contact)) {
                showSection(sections.academic);
            }
        });

        buttons.prevToContact.addEventListener('click', function () {
            showSection(sections.contact);
        });

        buttons.nextToSubjects.addEventListener('click', function () {
            if (validateSection(sections.academic)) {
                showSection(sections.subjects);
            }
        });

        buttons.prevToAcademic.addEventListener('click', function () {
            showSection(sections.academic);
        });

        buttons.nextToProject.addEventListener('click', function () {
            if (validateSection(sections.subjects)) {
                showSection(sections.project);
            }
        });

        buttons.prevToSubjects.addEventListener('click', function () {
            showSection(sections.subjects);
        });

        buttons.nextToPlanification.addEventListener('click', function () {
            if (validateSection(sections.project)) {
                showSection(sections.planification);
            }
        });

        buttons.prevToProject.addEventListener('click', function () {
            showSection(sections.project);
        });

        buttons.submitForm.addEventListener('click', function () {
            if (validateSection(sections.planification)) {
                document.getElementById('form-all').submit();
            }
        });

    });

</script>
