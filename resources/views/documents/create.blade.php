<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Subir Documento
        </h2>
    </x-slot>
    <section class="flex justify-center my-10 pb-10">
        <div class="container flex flex-col w-10/12 justify-center bg-white p-5 rounded-2xl shadow relative">

            <div id="error-alert" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 absolute top-0 left-1/2 transform -translate-x-1/2 mt-4" role="alert">
                <span class="font-medium">Error:</span> Por favor, llene todos los campos.
            </div>

            @if (session('success'))
                <div id="success-alert"
                     class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 absolute top-0 left-1/2 transform -translate-x-1/2 mt-4"
                     role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('success') }}
                </div>
            @endif
            <form id="document-form" action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="group_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del Grupo</label>
                    <select id="group_name" name="group_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" selected>Seleccione un grupo</option>
                        <option value="Informes">Informes</option>
                        <option value="Estructura organizacional">Estructura Organizacional</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="document_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del Documento</label>
                    <input type="text" name="document_name" id="document_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar documento</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('document-form');
            const errorAlert = document.getElementById('error-alert');
            const successAlert = document.getElementById('success-alert');

            form.addEventListener('submit', function (event) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                    errorAlert.classList.remove('hidden');
                    if (successAlert) {
                        successAlert.classList.add('hidden');
                    }
                } else {
                    errorAlert.classList.add('hidden');
                }
            });

            if (successAlert) {
                successAlert.classList.add('fade-in');
                setTimeout(() => {
                    successAlert.classList.add('fade-out');
                    setTimeout(() => {
                        successAlert.remove();
                    }, 1000);
                }, 5000);
            }
        });
    </script>
    <style>
        .fade-in {
            animation: fadeIn 1s;
        }

        .fade-out {
            animation: fadeOut 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
</x-app-layout>