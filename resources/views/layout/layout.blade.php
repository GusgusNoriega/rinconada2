<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <div class="page">
        <x-barra-lateral />
        <div class="menuMovil">
            <button class="menuBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="18" viewBox="0 0 32 18" fill="none">
                    <line x1="1" y1="1" x2="31" y2="1" stroke="white" stroke-width="2" stroke-linecap="round" />
                    <line x1="1" y1="9" x2="31" y2="9" stroke="white" stroke-width="2" stroke-linecap="round" />
                    <line x1="1" y1="17" x2="31" y2="17" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <a href="{{ route('inicio') }}"><img src="imgs/logo_blanco.png" alt="" /></a>
            <button class="lupa">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.09992 3.76811C7.48979 2.83943 9.12383 2.34375 10.7954 2.34375V3.125L10.7955 2.34375C13.0369 2.34389 15.1865 3.23437 16.7715 4.81933C18.3564 6.40428 19.2469 8.5539 19.2471 10.7954V10.7954C19.2471 12.467 18.7514 14.101 17.8227 15.4909C16.894 16.8808 15.5741 17.964 14.0297 18.6037C12.4854 19.2434 10.786 19.4108 9.14658 19.0847C7.50712 18.7586 6.00117 17.9536 4.81919 16.7716C3.6372 15.5897 2.83226 14.0837 2.50615 12.4442C2.18004 10.8048 2.34741 9.10544 2.9871 7.5611C3.62678 6.01676 4.71005 4.69679 6.09992 3.76811ZM10.7954 3.90625C12.6225 3.90638 14.3747 4.63224 15.6666 5.92418C16.9586 7.21612 17.6844 8.96833 17.6846 10.7954M10.7954 3.90625C9.43283 3.90626 8.1009 4.3103 6.968 5.06728C5.83508 5.82427 4.95208 6.90021 4.43066 8.15904C3.90924 9.41787 3.77281 10.8031 4.03863 12.1394C4.30445 13.4758 4.96058 14.7033 5.92404 15.6668C6.88751 16.6302 8.11504 17.2864 9.45141 17.5522C10.7878 17.818 12.173 17.6816 13.4318 17.1602C14.6906 16.6387 15.7665 15.7557 16.5235 14.6228C17.2805 13.4899 17.6846 12.158 17.6846 10.7955"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.9656 15.9656C16.2707 15.6605 16.7654 15.6605 17.0705 15.9656L22.4274 21.3226C22.7325 21.6277 22.7325 22.1223 22.4274 22.4274C22.1223 22.7325 21.6277 22.7325 21.3226 22.4274L15.9656 17.0705C15.6605 16.7654 15.6605 16.2707 15.9656 15.9656Z"
                        fill="white" />
                </svg>
            </button>
        </div>
        <main>
            <x-cabecera-top />
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
    <script src="js/main-socio-consulta.js"></script>
    @stack('scripts')
</body>

</html>