<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Profesores
        </h2>
    </x-slot>

    {{-- No borrar esta parte, por si a futuro se la requiere --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div>
                    @php
                        $headers = [
                            ['key' => 'first_name', 'label' => 'Nombre'],
                            ['key' => 'last_name', 'label' => 'Apellido'],
                        ];
                    @endphp
                    <div class="mx-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 w-full sm:w-auto">
                            <input type="text" wire:model.live="search" placeholder="Buscar por nombre o apellido..."
                                class="w-full sm:w-auto px-3 py-2 border rounded-lg">
                            <button wire:click="clear"
                                class="w-full sm:w-auto px-3 py-2 bg-red-500 text-white rounded-lg">Limpiar</button>
                        </div>
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
                                    @if ($noResults)
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 text-center text-red-500">
                                                Los parámetros de búsqueda no coinciden con los resultados.
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
    </div> --}}

    <form method="GET" action="{{ route('teachers.index') }}">
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
                        <div class="mx-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4 w-full sm:w-auto">
                                <input type="text" name="search" value="{{ old('search', $searchTerm ?? '') }}"
                                       placeholder="Buscar por nombre o apellido..."
                                       class="w-full sm:w-auto px-3 py-2 border rounded-lg">
                                <button type="submit"
                                        class="w-full sm:w-auto px-3 py-2 bg-blue-500 text-white rounded-lg">Buscar
                                </button>
                                <a href="{{ route('teachers.index') }}"
                                   class="w-full sm:w-auto px-3 py-2 bg-red-500 text-white rounded-lg">Limpiar</a>
                            </div>
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
                                    @if ($noResults)
                                        <tr>
                                            <td colspan="4" class="px-6 py-4 text-center text-red-500">
                                                Los parámetros de búsqueda no coinciden con los resultados.
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
                        <!-- Form to upload Excel or CSV file -->
                        <form id="importForm" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="file">Choose file to import (Excel or CSV):</label>
                                <input type="file" name="file" id="file" required>
                            </div>
                            <div>
                                <button class="bg-green-500" type="button" onclick="importTeachers()">Import</button>
                            </div>
                        </form>
                        <!-- Button to download template file -->
                        <div class="flex items-center gap-4 mt-4">
                            <a href="{{ '/api/teachers/download-template' }}"
                               class="w-full sm:w-auto px-3 py-2 bg-blue-500 text-white rounded-lg">Descargar
                                Plantilla</a>
                        </div>

                        <!-- Button to download teachers data -->
                        <div class="flex items-center gap-4 mt-4">
                            <a href="{{ 'api/teachers/export'}}"
                               class="w-full sm:w-auto px-3 py-2 bg-blue-500 text-white rounded-lg">Descargar Datos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- component -->

    <script>
        async function importTeachers() {
            const form = document.getElementById('importForm');
            const formData = new FormData(form);

            try {
                const response = await fetch('{{ route('api.teachers.import') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                });

                const result = await response.json();

                if (result.success) {
                    alert(result.message);
                } else {
                    alert(result.message);
                }
            } catch (error) {
                alert('Error al importar los profesores.');
            }
        }
    </script>

</x-app-layout>
