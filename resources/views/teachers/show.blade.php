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
                    <div class="mt-8 text-2xl">
                        Información del Profesor
                    </div>

                    <div class="mt-4 text-gray-500">
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">CI:</p>
                                <p>{{ $teacher->ci }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Nombre:</p>
                                <p>{{ $teacher->first_name }} {{ $teacher->last_name }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Edad:</p>
                                <p>{{ $teacher->age }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Genero:</p>
                                <p>{{ $teacher->gender }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Número de Celular:</p>
                                <p>{{ $teacher->num_cellphone }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Email:</p>
                                <p>{{ $teacher->email }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Dedicación:</p>
                                <p>{{ $teacher->dedication }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Tipo de Contrato:</p>
                                <p>{{ $teacher->contract_type }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Título de Tercer Nivel:</p>
                                <p>{{ $teacher->third_level_title }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Título de Cuarto Nivel:</p>
                                <p>{{ $teacher->fourth_level_title }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Fecha de Admisión:</p>
                                <p>{{ $teacher->date_of_admission }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Carrera Asignada:</p>
                                <p>{{ $teacher->career_assigned }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Ciclo:</p>
                                <p>{{ $teacher->cycle }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Carrera:</p>
                                <p>{{ $teacher->career }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Título del Trabajo:</p>
                                <p>{{ $teacher->teachingHour->job_title ?? 'No especificado' }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Tiempo de Dedicación:</p>
                                <p>{{ $teacher->teachingHour->dedication_time ?? 'No especificado' }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Horas Mínimas:</p>
                                <p>{{ $teacher->teachingHour->minimum_hours ?? 'No especificado' }}</p>
                            </div>
                            <div class="flex flex-col w-1/2">
                                <p class="font-bold">Horas Máximas:</p>
                                <p>{{ $teacher->teachingHour->maximum_hours ?? 'No especificado' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-4 py-4 sm:px-6">
                        <a href="{{ route('teachers.index') }}"
                           class="text-sm text-blue-500 hover:text-blue-700 whitespace-nowrap py-4">Volver a la
                            lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>t>