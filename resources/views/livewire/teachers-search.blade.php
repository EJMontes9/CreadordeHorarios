<div>
    @php

        $headers = [
            ['key' => 'first_name', 'label' => 'Nombre'],
            ['key' => 'last_name', 'label' => 'Apellido'] # <---- nested attributes
        ];
    @endphp
    <input type="text" wire:model.live="search" placeholder="Buscar por nombre o apellido..."
           class="px-3 py-2 border rounded-lg">
    <button wire:click="clear" class="px-3 py-2 bg-red-500 text-white rounded-lg">Limpiar</button>
    <x-button>
        <a href="{{ route('teachers.create') }}">Crear Nuevo Profesor</a>
    </x-button>
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Apellido</th>
                <th scope="col" class="flex px-6 py-4 font-medium text-gray-900 justify-end">Acciones</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($teachers as $teacher)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $teacher->first_name }}</td>
                    <td class="px-6 py-4">{{ $teacher->last_name }}</td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'View' }" href="{{ route('teachers.show', $teacher) }}">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a x-data="{ tooltip: 'Edite' }" href="{{ route('teachers.edit', $teacher) }}">
                                <i class="fas fa-pen-to-square"></i>
                            </a>
                        </div>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
