<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Profesores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div>
                    @php
                        $headers = [
                            ['key' => 'first_name', 'label' => 'Nombre'],
                            ['key' => 'last_name', 'label' => 'Apellido'],
                        ];
                    @endphp
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <input type="text" wire:model.live="search" placeholder="Buscar por nombre o apellido..."
                            class="w-full sm:w-auto px-3 py-2 border rounded-lg">
                        <button wire:click="clear"
                            class="w-full sm:w-auto px-3 py-2 bg-red-500 text-white rounded-lg">Limpiar</button>

                        <x-button class="w-full sm:w-auto">
                            <a href="{{ route('teachers.create') }}">Crear Nuevo Profesor</a>
                        </x-button>
                    </div>

                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse bg-white text-center text-sm text-gray-500">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Apellido</th>
                                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Carrera</th>
                                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                                    @if ($unauthorized)
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 text-center text-red-500">
                                                No tienes profesores registrados
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($teachers as $teacher)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4">{{ $teacher->first_name }}</td>
                                                <td class="px-6 py-4">{{ $teacher->last_name }}</td>
                                                <td class="px-6 py-4">{{ $teacher->career }}</td>
                                                <td class="px-6 py-4">
                                                    <div class="flex justify-center gap-4">
                                                        <a x-data="{ tooltip: 'View' }"
                                                            href="{{ route('teachers.show', $teacher) }}">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </a>
                                                        <a x-data="{ tooltip: 'Edit' }"
                                                            href="{{ route('teachers.edit', $teacher) }}">
                                                            <i class="fas fa-pen-to-square"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- component -->

</x-app-layout>
