<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center" style="background-image: url('{{ asset('img/Facultad_dark.jpg') }}');">
    <div class="bg-white bg-opacity-75 rounded-full px-6 pb-6 pt-3">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-75 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
