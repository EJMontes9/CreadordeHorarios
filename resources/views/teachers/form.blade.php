<form action="{{ $action }}" method="post">

    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif
    <div>
        <div class="flex flex-row pb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="first_name" :value="__('Nombre:')"/>
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $teacher->first_name ?? '' }}"
                         required autofocus/>
            </div>
            <div class="flex flex-col  w-1/2">
                <x-label for="last_name" :value="__('Apellido:')"/>
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $teacher->last_name ?? '' }}"
                         required/>
            </div>
        </div>

        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/3 mr-3">
                <x-label for="ci" :value="__('Cedula de Identidad:')"/>
                    <x-input id="ci" class="block mt-1 w-full" type="text" name="ci" value="{{ $teacher->ci ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/3 mr-3">
                <x-label for="gender" :value="__('Genero:')"/>
                <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" value="{{ $teacher->gender ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/3">
                <x-label for="age" :value="__('Edad:')"/>
                <x-input id="age" class="block mt-1 w-full" type="text" name="age" value="{{ $teacher->age ?? '' }}"
                         required/>
            </div>
        </div>
        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="email" :value="__('Email:')"/>
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ $teacher->email ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="num_cellphone" :value="__('Numero de celular:')"/>
                <x-input id="num_cellphone" class="block mt-1 w-full" type="text" name="num_cellphone" value="{{ $teacher->num_cellphone ?? '' }}"
                         required/>
            </div>
        </div>

        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="dedication" :value="__('Dedicación:')"/>
                <x-input id="dedication" class="block mt-1 w-full" type="text" name="dedication" value="{{ $teacher->dedication ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="contract_type" :value="__('Tipo de contrato:')"/>
                <x-input id="contract_type" class="block mt-1 w-full" type="text" name="contract_type" value="{{ $teacher->contract_type ?? '' }}"
                         required/>
            </div>
        </div>
        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="third_level_title" :value="__('Titulo de cuarto nivel:')"/>
                <x-input id="third_level_title" class="block mt-1 w-full" type="text" name="third_level_title" value="{{ $teacher->third_level_title ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="fourth_level_title" :value="__('Titulo de cuarto nivel:')"/>
                <x-input id="fourth_level_title" class="block mt-1 w-full" type="text" name="fourth_level_title" value="{{ $teacher->fourth_level_title ?? '' }}"
                         required/>
            </div>
        </div>
        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="date_of_admission" :value="__('Fecha de entrada:')"/>
                <x-input id="date_of_admission" class="block mt-1 w-full" type="text" name="date_of_admission" value="{{ $teacher->date_of_admission ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="career_assigned" :value="__('Carrera asignada:')"/>
                <x-input id="career_assigned" class="block mt-1 w-full" type="text" name="career_assigned" value="{{ $teacher->career_assigned ?? '' }}"
                         required/>
            </div>
        </div>
        <div class="flex flex-row mb-3">
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="cycle" :value="__('Ciclo:')"/>
                <x-input id="cycle" class="block mt-1 w-full" type="text" name="cycle" value="{{ $teacher->cycle ?? '' }}"
                         required/>
            </div>
            <div class="flex flex-col  w-1/2 mr-3">
                <x-label for="career" :value="__('Carrera:')"/>
                <x-input id="career" class="block mt-1 w-full" type="text" name="career" value="{{ $teacher->career ?? '' }}"
                         required/>
            </div>
        </div>
        <x-label for="teaching_hours_id" :value="__('Horas de Enseñanza:')"/>
    </div>
    @if(isset($teachingHours) && !$teachingHours->isEmpty())
        @php
            $options = [];
            foreach ($teachingHours as $teachingHour) {
                $options[$teachingHour->id] = $teachingHour->job_title . ' - ' . $teachingHour->dedication_time;
            }
        @endphp

        <x-select id="teaching_hours_id" class="block mt-1 w-full" name="teaching_hours_id" :options="$options"
                  required/>
    @else
        <p>Error: No se encontraron horas de enseñanza disponibles.</p>
    @endif
    <x-button class="mt-4">
        {{ __('Guardar') }}
    </x-button>
</form>


