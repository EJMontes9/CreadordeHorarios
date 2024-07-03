<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Profesores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <x-button>
                    <a href="{{ route('teachers.create') }}">Crear Nuevo Profesor</a>
                </x-button>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                            <th scope="col" class="flex px-6 py-4 font-medium text-gray-900 justify-end">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($teachers as $teacher)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $teacher->name }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <a x-data="{ tooltip: 'View' }" href="{{ route('teachers.show', $teacher) }}">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a x-data="{ tooltip: 'Edite' }" href="{{ route('teachers.edit', $teacher) }}">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->

</x-app-layout>