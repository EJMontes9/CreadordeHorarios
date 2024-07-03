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

                    <div class=" text-gray-500">
                        <p class="font-bold">Nombre:</p>
                        <p>{{ $teacher->name }}</p>
                        <p class="font-bold mt-4">Título del Trabajo:</p>
                        <p>{{ $teacher->teachingHour->job_title ?? 'No especificado' }}</p>
                        <p class="font-bold mt-4">Tiempo de Dedicación:</p>
                        <p>{{ $teacher->teachingHour->dedication_time ?? 'No especificado' }}</p>
                        <p class="font-bold mt-4">Horas Mínimas:</p>
                        <p>{{ $teacher->teachingHour->minimum_hours ?? 'No especificado' }}</p>
                        <p class="font-bold mt-4">Horas Máximas:</p>
                        <p>{{ $teacher->teachingHour->maximum_hours ?? 'No especificado' }}</p>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-4 sm:px-6">
                    <a href="{{ route('teachers.index') }}" class="text-sm text-blue-500 hover:text-blue-700 whitespace-nowrap py-4">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>