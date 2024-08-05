@php
    use App\Helpers\DocumentHelper;
@endphp

@extends('adminlte::page')

@section('title', 'Administrador FCA')

@section('content_header')
    <h1 class="ml-2 mt-3 font-weight-bold">Documentos</h1>
@stop


@section('content')
    <section class="tailwind-container flex justify-center my-10 pb-10">
        <div class="container flex flex-col w-10/12 justify-center bg-white p-5 rounded-2xl shadow relative">
            <!-- Componente de migas de pan -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('documents.index') }}">Home</a>
                    </li>
                    @if ($path)
                        @php
                            $segments = explode('/', $path);
                            $url = '';
                        @endphp
                        @foreach ($segments as $segment)
                            @php
                                $url .= $segment . '/';
                            @endphp
                            <li class="breadcrumb-item">
                                <a href="{{ route('documents.index', ['path' => trim($url, '/')]) }}">{{ $segment }}</a>
                            </li>
                        @endforeach
                    @endif
                </ol>
            </nav>
            <!-- Fin del componente de migas de pan -->
            <ul class="row">
                @foreach($documents as $document)
                    <li class="col-12 col-md-6 col-lg-3 mb-3">
                        @if($document->link)
                            <a href="{{ $document->link }}" target="_blank"
                               class="d-block border p-3 rounded-xl text-decoration-none">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {!! DocumentHelper::getFileIcon($document) !!}
                                        <span class="ml-3">{{ $document->name }}</span>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('documents.index', ['path' => $path ? $path . '/' . $document->name : $document->name]) }}"
                               class="d-block border p-3 rounded-xl text-decoration-none">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-folder mr-3"></i>
                                        <span>{{ $document->name }}</span>
                                    </div>
                                    <span class="badge text-bg-secondary">
                                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST"
                                              class="delete-form mt-2">
                                @csrf
                                            @method('DELETE')
                                <button type="submit" class="bg-red-500 px-2 py-1 rounded"><i class="fa-solid fa-trash"
                                                                                              style="color: #ffffff;"></i></button>
                            </form>
                                    </span>
                                </div>
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </section>


    <div data-dial-init class="fixed end-6 bottom-6 group">
        <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
            <button type="button" data-modal-target="crud-modal-file" data-modal-toggle="crud-modal-file"
                    data-tooltip-target="tooltip-share" data-tooltip-placement="left"
                    class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <i class="fa-solid fa-file"></i>
                <span class="sr-only">Archivo</span>
            </button>
            <div id="tooltip-share" role="tooltip"
                 class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Agregar Archivo
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    data-tooltip-target="tooltip-print" data-tooltip-placement="left"
                    class="flex justify-center items-center w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                <i class="fa-solid fa-folder"></i>
                <span class="sr-only">Carpeta</span>
            </button>
            <div id="tooltip-print" role="tooltip"
                 class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Agregar Carpeta
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default"
                aria-expanded="false"
                class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <svg class="w-5 h-5 transition-transform group-hover:rotate-45" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 1v16M1 9h16"/>
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Agregar Carpeta
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('documents.createFolder') }}" method="POST" class="p-4 md:p-5">
                    @csrf
                    <input type="hidden" name="parent_id" value="{{ $parent ? $parent->id : '' }}">
                    <div class="mb-4">
                        <label for="folder_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                            de la carpeta</label>
                        <input type="text" name="folder_name" id="folder_name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Nombre de la carpeta" required>
                    </div>
                    <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Crear Carpeta
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div id="crud-modal-file" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Agregar Archivo
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal-file">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('documents.createFile') }}" method="POST" enctype="multipart/form-data"
                      class="p-4 md:p-5">
                    @csrf
                    <input type="hidden" name="parent_id" value="{{ $parent ? $parent->id : '' }}">
                    <div class="mb-4">
                        <label for="file_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                            del archivo</label>
                        <input type="text" name="file_name" id="file_name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Nombre del archivo" required>
                    </div>
                    <div class="mb-4">
                        <label for="file_upload" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subir
                            archivo</label>
                        <input type="file" name="file_upload" id="file_upload"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               required>
                    </div>
                    <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Subir Archivo
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet"/>
    <!-- FONTAWESON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .brand-link .brand-image {
            border-radius: 0 !important;
            box-shadow: none !important;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script>
        import 'flowbite';

        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (confirm('¿Estás seguro de que deseas eliminar este documento?')) {
                    fetch(this.action, {
                        method: 'POST',
                        body: new FormData(this),
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    }).then(response => {
                        if (response.ok) {
                            location.reload();
                        } else {
                            alert('Error al eliminar el documento.');
                        }
                    }).catch(error => {
                        console.error('Error:', error);
                        alert('Error al eliminar el documento.');
                    });
                }
            });
        });
        })
        ;
    </script>
@stop