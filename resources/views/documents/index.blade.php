<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <section class="flex justify-center my-10 pb-10">
        <div class="container flex flex-col w-10/12 justify-center bg-white p-5 rounded-2xl shadow">
            <p class="text-xl font-bold">{{ $group }}</p>
            <div class="flex justify-end">
                <a href="{{ route('documents.create') }}"
                   class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700
                               rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                               dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Crear Documento
                </a>
            </div>
            @if($documents->isEmpty())
                <p class="text-xl font-bold">No existen documentos en este grupo.</p>
            @else
                <ul class="list-group grid grid-cols-3 gap-4 mt-6">
                    @foreach($documents as $document)
                        <li class="list-group-item flex justify-content-between items-center flex-row">
                            <a href="{{ $document->link }}" target="_blank"
                               class="font-medium text-xl text-blue-600 dark:text-blue-500 hover:underline mr-4">
                                {{ $document->document_name }}
                            </a>
                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white  hover:bg-red-200 focus:ring-4 focus:outline-none
                                    focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2
                                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fa-solid fa-trash" style="color: #bd0000;"></i>
                                    <span class="sr-only">Icon description</span>
                                </button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
        });
    </script>
</x-app-layout>