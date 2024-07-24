

<div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-[35rem]">
        <!-- Asegúrate de que este contenedor tenga un alto definido -->
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/principalUG.jpg') }}"
                 class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                 alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/puertaG3.jpeg') }}"
                 class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                 alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/letrasUG.jpg') }}"
                 class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                 alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/facultadLogoAdministrativa.jpg') }}"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/wikiAdministrativas.jpg') }}"
                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="grid gap-x-8 gap-y-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-12 px-12 my-5 py-4 bg-indigo-50 rounded-2xl">

    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/ADE_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Administración de empresas</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/CAU_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de contabilidad y auditoria</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/COMEX_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de comercio exterior</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/FINANZAS_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de Finanzas</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/LGIG_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de Gestion de la informacion gerencial</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/MERCADOTECNIA_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de mercadotecnia</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/NIN_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de mercadotecnia</p>
    </div>
    <div class="card">
        <div class="icon">
            <img src="{{ asset('img/TURISMO_Mesa de trabajo 1.png') }}">
        </div>
        <p class="text">Carrera de mercadotecnia</p>
    </div>
</div>
<style>

    .card {
        width: 100%;
        max-width: 300px;
        min-width: 200px;
        height: 250px;
        background-color: #e2f2ff;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgba(23, 53, 230, 0.65);
        border: 2px solid rgba(7, 7, 7, 0.12);
        font-size: 16px;
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }

    .icon svg {
        fill: white;
    }

    .card .title {
        width: 100%;
        margin: 0;
        text-align: center;
        margin-top: 30px;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    .card .text {
        width: 80%;
        font-size: 13px;
        text-align: center;
        margin-top: 20px;
        color: #1c1c1c;
        font-weight: 200;
        letter-spacing: 2px;
        opacity: 0;
        max-height: 0;
        transition: all 0.3s ease;
    }

    .card:hover {
        height: 270px;
    }

    .card:hover .text {
        transition: all 0.3s ease;
        opacity: 1;
        max-height: 40px;
    }

    .card:hover .icon {
        background-position: -120px;
        transition: all 0.3s ease;
    }

    .card:hover .icon svg path {
        fill: url('#gradientColor');
        transition: all 0.3s ease;
    }

</style>


<!-- component -->
<!-- component -->
<!--<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />


<header class="absolute inset-x-0 top-0 z-50 py-6">
    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5">
        <nav class="w-full flex justify-between gap-6 relative">

            <div class="min-w-max inline-flex relative">
                <a href="/" class="relative flex items-center gap-3">
                    <div class="relative w-12 h-12 ">
                        <x-application-logo />
                    </div>
                    <div class="inline-flex text-lg font-semibold text-gray-900">
                        Facultad Administrativa
                    </div>
                </a>
            </div>
            <div data-navbar
                 class="flex invisible opacity-0  translate-y-10 overflow-hidden lg:visible lg:opacity-100  lg:-translate-y-0 lg:scale-y-100 duration-300 ease-linear flex-col gap-y-6 gap-x-4 lg:flex-row w-full lg:justify-between lg:items-center absolute lg:relative top-full lg:top-0 bg-white lg:!bg-transparent border-x border-x-gray-100 lg:border-x-0">
                <div>
                    @if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
@auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>




    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesion</a>

                                @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>




        @endif
    @endauth
    </div>




@endif
</div>
</div>


<div class="min-w-max flex items-center gap-x-3">

<button data-toggle-navbar data-is-open="false"
        class="lg:hidden lg:invisible outline-none w-7 h-auto flex flex-col relative">
    <span id="line-1"
          class="w-6 h-0.5 rounded-full bg-gray-700 transition-all duration-300 ease-linear"></span>
    <span id="line-2"
          class="w-6 origin-center  mt-1 h-0.5 rounded-ful bg-gray-700 transition-all duration-300 ease-linear"></span>
    <span id="line-3"
          class="w-6 mt-1 h-0.5 rounded-ful bg-gray-700 transition-all duration-300 ease-linear"></span>
    <span class="sr-only">togglenav</span>
</button>
</div>
</nav>
</div>
</header>


<section class="relative py-32 lg:py-36 bg-white">
<div
class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
<div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0 hidden lg:block">
<span
    class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-green-400 blur-xl opacity-60 lg:opacity-95 lg:block hidden"></span>
<span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-blue-600 blur-xl opacity-80"></span>
</div>
<span
class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-blue-600 to-green-400 absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>
<div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

<h1 class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
font-bold text-gray-900">
Facultad de ciencias <span
        class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 from-20% via-blue-600 via-30% to-green-600">Administrativas</span>
</h1>
<p class="mt-8 text-gray-700">
Generar, difundir y preservar conocimientos científicos, tecnológicos y humanísticos y saberes culturas de forma crítica, creativa y para la innovación social, a través de las funciones de formación, investigación y vinculación con la sociedad, fortaleciendo profesional y éticamente el talento de la nación y la promoción del buen vivir, en el marco de la sustentabilidad, la justicia y la paz.
</p>
</div>
<div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
<img src="{{ asset('img/Facultad.jpg') }}" alt="Hero image" width="2350" height="2359"
                 class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
        </div>
    </div>
</section>
<div class="flex bg-white justify-around pb-16">
    <div class="card ">
        <img src="{{ asset('img/Carrera_Ingenieria_comercial.png') }}">
        <div class="card__content">
            <p class="card__title">Ingenieria Comercial</p>
            <p class="card__description">Ingeniería Comercial enseña gestión empresarial, economía y finanzas, enfocándose en liderazgo e innovación para el crecimiento sostenible de las organizaciones.</p>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/Carrera_Mercadotecnia.jpg') }}" >
        <div class="card__content">
            <p class="card__title">Mercadotecnia</p>
            <p class="card__description">La carrera de Mercadotecnia combina creatividad y análisis para desarrollar estrategias que satisfacen y superan las expectativas del consumidor, impulsando el éxito de marcas y productos.</p>
        </div>
    </div>

</div>
-->


