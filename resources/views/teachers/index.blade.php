<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Profesores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                @livewire('teachers-search')
            </div>
        </div>
    </div>

    <div class="w-16 h-16 bg-amber-700">
        <h1>Hola</h1>
    </div>

    <!-- component -->

</x-app-layout>