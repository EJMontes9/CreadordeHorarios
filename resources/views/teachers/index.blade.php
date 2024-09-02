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

    @if (session('success'))
        <div id="toast-success"
             class="fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
             role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div id="toast-danger"
             class="fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
             role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                const successToast = document.getElementById('toast-success');
                const errorToast = document.getElementById('toast-danger');
                if (successToast) {
                    successToast.classList.add('hidden');
                }
                if (errorToast) {
                    errorToast.classList.add('hidden');
                }
            }, 5000);
        });
    </script>
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
                            <!-- Modal toggle -->
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                Importar
                            </button>
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
        </div>
    </form>


    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Importar Información
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Tab navigation -->
                <div class="flex border-b border-gray-200 dark:border-gray-600">
                    <button class="tab-link p-4 text-gray-600 dark:text-gray-400" onclick="openTab(event, 'profesores')">Importar Profesores</button>
                    <button class="tab-link p-4 text-gray-600 dark:text-gray-400" onclick="openTab(event, 'materias')">Importar Materias</button>
                    <button class="tab-link p-4 text-gray-600 dark:text-gray-400" onclick="openTab(event, 'proyectos')">Importar Proyectos</button>
                    <button class="tab-link p-4 text-gray-600 dark:text-gray-400" onclick="openTab(event, 'detalles')">Importar Detalles</button>
                </div>
                <form method="POST" action="{{ route('teachers.import') }}" enctype="multipart/form-data" id="profesores"
                class="tab-content">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-2">
                        <p class="text-2xl">Importar Profesores</p>
                        <!-- Modal body -->
                        <div class="px-4 md:p-5">
                            @csrf
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="file_input">Seleccione el archivo a importar</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="file_input_help" id="file_input" type="file" name="file" required>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Solo se
                                aceptan archivos Excel (MAX. 2MB).</p>


                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Importar
                        </button>
                        <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Cancelar
                        </button>

                    </div>
                </form>

                <form method="POST" action="{{ route('subjects.import') }}" enctype="multipart/form-data" id="materias"
                      class="tab-content hidden">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-2">
                        <p class="text-2xl">Importar Materias</p>
                        <!-- Modal body -->
                        <div class="px-4 md:p-5">
                            @csrf
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="file_input">Seleccione el archivo a importar</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="file_input_help" id="file_input" type="file" name="file" required>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Solo se
                                aceptan archivos Excel (MAX. 2MB).</p>


                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Importar
                        </button>
                        <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Cancelar
                        </button>

                    </div>
                </form>

                <form method="POST" action="{{ route('projects.import') }}" enctype="multipart/form-data" id="proyectos"
                      class="tab-content hidden">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-2">
                        <p class="text-2xl">Importar Proyectos</p>
                        <!-- Modal body -->
                        <div class="px-4 md:p-5">
                            @csrf
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="file_input">Seleccione el archivo a importar</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="file_input_help" id="file_input" type="file" name="file" required>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Solo se
                                aceptan archivos Excel (MAX. 2MB).</p>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Importar
                        </button>
                        <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Cancelar
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('detail.import') }}" enctype="multipart/form-data" id="detalles"
                      class="tab-content hidden">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-2">
                        <p class="text-2xl">Importar Detalles</p>
                        <!-- Modal body -->
                        <div class="px-4 md:p-5">
                            @csrf
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="file_input">Seleccione el archivo a importar</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="file_input_help" id="file_input" type="file" name="file" required>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Solo se
                                aceptan archivos Excel (MAX. 2MB).</p>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Importar
                        </button>
                        <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Cancelar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.add("hidden");
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("text-blue-700", "dark:text-blue-500");
            }
            document.getElementById(tabName).classList.remove("hidden");
            evt.currentTarget.classList.add("text-blue-700", "dark:text-blue-500");
        }
    </script>

</x-app-layout>
