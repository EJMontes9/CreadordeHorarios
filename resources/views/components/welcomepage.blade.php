<!-- component -->
<!-- component -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

<!-- navbar -->
<header class="absolute inset-x-0 top-0 z-50 py-6">
    <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5">
        <nav class="w-full flex justify-between gap-6 relative">
            <!-- logo -->
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

<!-- hero section -->
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
<style>
    body {
        font-family: "Raleway", sans-serif;
    }

    button[data-toggle-navbar][data-is-open="true"] #line-1 {
        transform: translateY(0.375rem) rotate(40deg);
    }

    button[data-toggle-navbar][data-is-open="true"] #line-2 {
        transform: scaleX(0);
        opacity: 0;
    }

    button[data-toggle-navbar][data-is-open="true"] #line-3 {
        transform: translateY(-0.375rem) rotate(-40deg);
    }

    .card {
        position: relative;
        width: 300px;
        height: 200px;
        background-color: #f2f2f2;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        perspective: 1000px;
        box-shadow: 0 0 0 5px #ffffff80;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card svg {
        width: 48px;
        fill: #333;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
    }

    .card__content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f2f2f2;
        transform: rotateX(-90deg);
        transform-origin: bottom;
        transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card:hover .card__content {
        transform: rotateX(0deg);
    }

    .card__title {
        margin: 0;
        font-size: 16px;
        color: #333;
        font-weight: 700;
    }

    .card:hover svg {
        scale: 0;
    }

    .card__description {
        margin: 12px 0 0;
        font-size: 12px;
        color: #777;
        line-height: 1.4;
    }


</style>

<script>
    const btnHumb = document.querySelector("[data-toggle-navbar]")
    const navbar = document.querySelector("[data-navbar]")
    const overlay = document.querySelector("[data-nav-overlay]")
    if (btnHumb && navbar) {
        const toggleBtnAttr = () => {
            const isOpen = btnHumb.getAttribute("data-is-open")
            btnHumb.setAttribute("data-is-open", isOpen === "true" ? "false" : "true")
            if (isOpen === "false") {
                overlay.classList.toggle("hidden")
            } else {
                overlay.classList.add("hidden")
            }
        }
        btnHumb.addEventListener("click", () => {
            navbar.classList.toggle("invisible")
            navbar.classList.toggle("opacity-0")
            navbar.classList.toggle("translate-y-10")
            toggleBtnAttr()
        })

        overlay.addEventListener("click", () => {
            navbar.classList.add("invisible")
            navbar.classList.add("opacity-0")
            navbar.classList.add("translate-y-10")
            toggleBtnAttr()
        })
    }

</script>