<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Profesor
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-white mt-10
    rounded-2xl shadow-xl">
            @include('teachers.form', [
                'action' => route('teachers.store'),
                'method' => 'POST',
                'teachingHours' => $teachingHours,
            ])
        </div>
    </x-slot>
</x-app-layout>
