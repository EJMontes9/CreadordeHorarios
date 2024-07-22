<form action="{{ $action }}" method="post">

    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif
    <div>
        <!-- Separador para datos de Información Personal -->
        <div class="border border-blue-100 shadow p-4 rounded-2xl">
            <div class="flex flex-row mb-3 mt-2">
                <div class="w-full">
                    <h3 class="text-center font-semibold text-lg">INFORMACIÓN PERSONAL</h3>
                </div>
            </div>
            <div class="flex flex-row pb-3">
                <div class="flex flex-col w-1/3 mr-3">
                    <x-label for="ci" :value="__('Cédula de Identidad:')" />
                    <x-input id="ci" class="block mt-1 w-full no-spin" type="number" name="ci"
                        value="{{ $teacher->ci ?? '' }}" required />
                </div>
                <div class="flex flex-col  w-1/3 mr-3">
                    <x-label for="first_name" :value="__('Nombre:')" />
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        value="{{ $teacher->first_name ?? '' }}" required autofocus />
                </div>
                <div class="flex flex-col  w-1/3">
                    <x-label for="last_name" :value="__('Apellido:')" />
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        value="{{ $teacher->last_name ?? '' }}" required />
                </div>
            </div>
            <div class="flex flex-row mb-3 justify-between">
                <div class="flex flex-col w-1/4">
                    <x-label for="gender" :value="__('Género:')" />
                    <x-input id="gender" class="block mt-1 w-full" type="text" name="gender"
                        value="{{ $teacher->gender ?? '' }}" required />
                </div>
                <div class="flex flex-col w-1/4 mx-3">
                    <x-label for="date_of_birth" :value="__('Fecha de Nacimiento:')" />
                    <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                        value="{{ $teacher->date_of_birth ?? '' }}" required max="{{ now()->toDateString() }}" />
                </div>
                <div class="flex flex-col w-1/4 mx-3">
                    <x-label for="age" :value="__('Edad:')" />
                    <x-input id="age" class="block mt-1 w-full" type="text" name="age"
                        value="{{ $teacher->age ?? '' }}" readonly="true" />
                </div>
                <div class="flex flex-col w-1/4">
                    <x-label for="nacionality" :value="__('Nacionalidad:')" />
                    <x-input id="nacionality" class="block mt-1 w-full" type="text" name="nacionality"
                        value="{{ $teacher->nacionality ?? '' }}" required />
                </div>
            </div>
        </div>


        <div class="border border-blue-200 shadow p-4 rounded-2xl my-5">
            <!-- Separador para datos de Contactos -->
            <div class="flex flex-row mb-3 mt-2">
                <div class="w-full">
                    <h3 class="text-center font-semibold text-lg">CONTACTOS</h3>
                </div>
            </div>
            <div class="flex flex-row mb-3">
                <div class="flex flex-col  w-1/3 mr-3">
                    <x-label for="num_cellphone" :value="__('Numero de celular:')" />
                    <x-input id="num_cellphone" class="block mt-1 w-full no-spin" type="number" name="num_cellphone"
                        value="{{ $teacher->num_cellphone ?? '' }}" required />
                </div>
                <!-- Correo Personal -->
                <div class="flex flex-col w-1/3 mr-3">
                    <x-label for="email" :value="__('Correo Personal:')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                        value="{{ $teacher->email ?? '' }}" required oninput="validateEmail(this)" />
                    <span id="email-error" class="text-red-500 text-sm hidden">Correo no válido</span>
                </div>

                <!-- Correo Institucional -->
                <div class="flex flex-col w-1/3 mr-3">
                    <x-label for="email_ug" :value="__('Correo Institucional:')" />
                    <x-input id="email_ug" class="block mt-1 w-full" type="email" name="email_ug"
                        value="{{ $teacher->email_ug ?? '' }}" required oninput="validateEmail(this)" />
                    <span id="email_ug-error" class="text-red-500 text-sm hidden">Correo no válido</span>
                </div>
            </div>
        </div>


        <div class="border border-blue-200 shadow p-4 rounded-2xl my-5">
            <!-- Separador para datos de Información Académica -->
            <div class="flex flex-row mb-3 mt-2">
                <div class="w-full">
                    <h3 class="text-center font-semibold text-lg">INFORMACIÓN ACADÉMICA</h3>
                </div>
            </div>

            <div class="flex flex-row mb-3">
                <div class="flex flex-col mb-3 w-1/4 mr-3">
                    <x-label for="date_of_admission" :value="__('Fecha de Ingreso:')" />
                    <x-input id="date_of_admission" class="block mt-1 w-full" type="date" name="date_of_admission"
                        value="{{ $teacher->date_of_admission ?? '' }}" required
                        max="{{ now()->toDateString() }}" />
                </div>
                <div class="flex flex-col  w-1/4 mr-3">
                    <x-label for="dedication" :value="__('Dedicación:')" />
                    <x-input id="dedication" class="block mt-1 w-full" type="text" name="dedication"
                        value="{{ $teacher->dedication ?? '' }}" required />
                </div>
                <div class="flex flex-col  w-1/2 mr-3">
                    <x-label for="den_puesto" :value="__('Descripción Puesto:')" />
                    <x-input id="den_puesto" class="block mt-1 w-full" type="text" name="den_puesto"
                        value="{{ $teacher->den_puesto ?? '' }}" required />
                </div>
            </div>
            <div class="flex flex-row mb-3">
                <div class="flex flex-col w-full mr-3">
                    <x-label for="rol" :value="__('Cargo:')" />
                    <x-input id="rol" class="block mt-1 w-full" type="text" name="rol"
                        value="{{ $teacher->rol ?? '' }}" required />
                </div>
            </div>
            <div class="flex flex-row mb-3">
                <div class="flex flex-col  w-1/2 mr-3">
                    <x-label for="third_level_title" :value="__('Titulo de cuarto nivel:')" />
                    <x-input id="third_level_title" class="block mt-1 w-full" type="text"
                        name="third_level_title" value="{{ $teacher->third_level_title ?? '' }}" required />
                </div>
                <div class="flex flex-col  w-1/2 mr-3">
                    <x-label for="fourth_level_title" :value="__('Titulo de cuarto nivel:')" />
                    <x-input id="fourth_level_title" class="block mt-1 w-full" type="text"
                        name="fourth_level_title" value="{{ $teacher->fourth_level_title ?? '' }}" required />
                </div>
            </div>
            <div class="flex flex-row mb-3">
                <div class="flex flex-col w-1/4 mr-3">
                    <x-label for="master_degree" :value="__('Maestría:')" />
                    <select id="master_degree" class="block mt-1 w-full rounded-md" name="master_degree" required>
                        <option value="">{{ __('Seleccione una opción') }}</option>
                        @foreach ($otherOptions as $value => $label)
                            <option value="{{ $value }}"
                                {{ isset($teacher->master_degree) && $teacher->master_degree == $value ? 'selected' : '' }}>
                                {{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col w-1/4 mr-3">
                    <x-label for="doctorate" :value="__('Doctorado o PHD:')" />
                    <select id="doctorate" class="block mt-1 w-full rounded-md" name="doctorate" required>
                        <option value="">{{ __('Seleccione una opción') }}</option>
                        @foreach ($otherOptions as $value => $label)
                            <option value="{{ $value }}"
                                {{ isset($teacher->doctorate) && $teacher->doctorate == $value ? 'selected' : '' }}>
                                {{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col w-1/4 mr-3">
                    <x-label for="specialty" :value="__('Especialidad:')" />
                    <select id="specialty" class="block mt-1 w-full rounded-md" name="specialty" required>
                        <option value="">{{ __('Seleccione una opción') }}</option>
                        @foreach ($otherOptions as $value => $label)
                            <option value="{{ $value }}"
                                {{ isset($teacher->specialty) && $teacher->specialty == $value ? 'selected' : '' }}>
                                {{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col w-1/4 mr-3">
                    <x-label for="researcher" :value="__('Diplomado:')" />
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
            <div class="flex flex-row mb-3">
                <div class="flex flex-col  w-1/3 mr-3">
                    <x-label for="contract_hours" :value="__('Horas de Contrato:')" />
                    <x-input id="contract_hours" class="block mt-1 w-full no-spin" type="number"
                        name="contract_hours" value="{{ $teacher->contract_hours ?? '' }}" required />
                </div>
                <div class="flex flex-col  w-full mr-3">
                    <x-label for="contract_type" :value="__('Tipo de contrato:')" />
                    <x-input id="contract_type" class="block mt-1 w-full" type="text" name="contract_type"
                        value="{{ $teacher->contract_type ?? '' }}" required />
                </div>
            </div>
            <div class="flex flex-row mb-3">
                <div class="flex flex-col  w-full mr-3">
                    <x-label for="career" :value="__('Carrera:')" />
                    <x-input id="career" class="block mt-1 w-full" type="text" name="career"
                        value="{{ $teacher->career ?? '' }}" required />
                </div>
                <div class="flex flex-col w-1/3 mr-3">
                    <x-label for="afinity" :value="__('Afinidad:')" />
                    <select id="afinity" class="block mt-1 w-full rounded-md" name="afinity" required>
                        <option value="">{{ __('Seleccione una opción') }}</option>
                        <option value="1"
                            {{ isset($teacher->afinity) && $teacher->afinity == 1 ? 'selected' : '' }}>
                            {{ __('Sí') }}</option>
                        <option value="0"
                            {{ isset($teacher->afinity) && $teacher->afinity == 0 ? 'selected' : '' }}>
                            {{ __('No') }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <x-button class="mt-4">
        {{ __('Guardar') }}
    </x-button>
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
</style>

<script>
    document.getElementById('date_of_birth').addEventListener('change', function() {
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
</script>
