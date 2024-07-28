@php
    use App\Helpers\DocumentHelper;
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contenido de la Carpeta: {{ $parent->name }}
        </h2>
    </x-slot>
    <section class="tailwind-container flex justify-center my-10 pb-10">
        <div class="container flex flex-col w-10/12 justify-center bg-white p-5 rounded-2xl shadow relative">
            @if($subIds)
                <div class="mb-4">
                    <a href="{{ route('documents.specific', ['rootId' => $rootId]) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        Regresar
                    </a>
                </div>
            @endif

            @if($documents->isEmpty())
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('svg/nodocument.svg') }}" alt="No documents available" class="w-3/4 h-3/4">
                    <p class="text-4xl">No se encontraron carpetas o documentos</p>
                </div>
            @else
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($documents as $document)
                        <li class="mb-3">
                            @if($document->link)
                                <a href="{{ $document->link }}" target="_blank" class="block border p-3 rounded-xl text-decoration-none">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            {!! DocumentHelper::getFileIcon($document) !!}
                                            <span class="ml-3">{{ $document->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('documents.specific', ['rootId' => $rootId, 'subIds' => $subIds ? $subIds . '/' . $document->id : $document->id]) }}" class="block border p-3 rounded-xl text-decoration-none">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-folder mr-3"></i>
                                            <span>{{ $document->name }}</span>
                                        </div>
                                        <span class="badge bg-gray-200 text-gray-800">{{ DocumentHelper::getFolderItemCount($document) }}</span>
                                    </div>
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
</x-app-layout>