<!-- resources/views/perfil.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="access-token" content="{{ session('access_token') }}">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-login.css" />
    <title>Socio</title>
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
            <a href="#"><img src="imgs/logo_blanco.png" alt="" /></a>
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
            <div class="datos">
                <h2>Datos personales</h2>
                <div class="card">
                    <div class="part1">
                        <div class="contentavatar">
                            <img id="foto-perfil2" src="imgs/avatar.png" alt="" id="imagenPerfil" />
                        </div>
                        <label for="imagenPerfil" style="cursor: pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M14.25 4.87499H13.29L13.05 4.12499C12.8944 3.68491 12.6058 3.30411 12.2242 3.03536C11.8425 2.7666 11.3868 2.62319 10.92 2.62499H7.08C6.60866 2.62587 6.1495 2.77475 5.76732 3.05062C5.38515 3.32648 5.09926 3.7154 4.95 4.16249L4.71 4.91249H3.75C3.15326 4.91249 2.58097 5.14954 2.15901 5.5715C1.73705 5.99345 1.5 6.56575 1.5 7.16249V13.1625C1.5 13.7592 1.73705 14.3315 2.15901 14.7535C2.58097 15.1754 3.15326 15.4125 3.75 15.4125H14.25C14.8467 15.4125 15.419 15.1754 15.841 14.7535C16.2629 14.3315 16.5 13.7592 16.5 13.1625V7.16249C16.505 6.86387 16.4505 6.56725 16.3396 6.28993C16.2288 6.0126 16.0638 5.76012 15.8544 5.5472C15.645 5.33428 15.3952 5.16518 15.1198 5.04977C14.8443 4.93436 14.5487 4.87494 14.25 4.87499ZM15 13.125C15 13.3239 14.921 13.5147 14.7803 13.6553C14.6397 13.796 14.4489 13.875 14.25 13.875H3.75C3.55109 13.875 3.36032 13.796 3.21967 13.6553C3.07902 13.5147 3 13.3239 3 13.125V7.12499C3 6.92607 3.07902 6.73531 3.21967 6.59466C3.36032 6.454 3.55109 6.37499 3.75 6.37499H5.25C5.41355 6.38352 5.5754 6.33829 5.71083 6.2462C5.84625 6.15411 5.94782 6.02022 6 5.86499L6.405 4.63499C6.45531 4.48602 6.55117 4.35663 6.67903 4.26512C6.80688 4.1736 6.96027 4.12458 7.1175 4.12499H10.9575C11.1147 4.12458 11.2681 4.1736 11.396 4.26512C11.5238 4.35663 11.6197 4.48602 11.67 4.63499L12.075 5.86499C12.1231 6.00805 12.2133 6.13325 12.3337 6.22424C12.4542 6.31523 12.5992 6.36777 12.75 6.37499H14.25C14.4489 6.37499 14.6397 6.454 14.7803 6.59466C14.921 6.73531 15 6.92607 15 7.12499V13.125ZM9 6.37499C8.40666 6.37499 7.82664 6.55093 7.33329 6.88058C6.83994 7.21022 6.45542 7.67876 6.22836 8.22694C6.0013 8.77511 5.94189 9.37831 6.05764 9.96026C6.1734 10.5422 6.45912 11.0767 6.87868 11.4963C7.29824 11.9159 7.83279 12.2016 8.41473 12.3173C8.99667 12.4331 9.59987 12.3737 10.1481 12.1466C10.6962 11.9196 11.1648 11.535 11.4944 11.0417C11.8241 10.5483 12 9.96833 12 9.37499C12 8.57934 11.6839 7.81628 11.1213 7.25367C10.5587 6.69106 9.79565 6.37499 9 6.37499ZM9 10.875C8.70333 10.875 8.41332 10.787 8.16665 10.6222C7.91997 10.4574 7.72771 10.2231 7.61418 9.94901C7.50065 9.67492 7.47094 9.37332 7.52882 9.08235C7.5867 8.79138 7.72956 8.52411 7.93934 8.31433C8.14912 8.10455 8.41639 7.96169 8.70736 7.90381C8.99834 7.84593 9.29994 7.87564 9.57403 7.98917C9.84811 8.1027 10.0824 8.29496 10.2472 8.54163C10.412 8.7883 10.5 9.07831 10.5 9.37499C10.5 9.77281 10.342 10.1543 10.0607 10.4356C9.77936 10.717 9.39782 10.875 9 10.875Z"
                                    fill="black"></path>
                            </svg>
                        </label>
                        <input type="file" name="imagenPerfil" id="imagenPerfil" style="display: none" />
                    </div>
                    <div class="part2">
                        <div>
                            <h3 id="nombre-completo">Gonzales Menendez Jose Manuel</h3>
                            <div class="estado1">Activo</div>
                        </div>
                        <div class="estado2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="14" viewBox="0 0 11 14"
                                fill="none">
                                <mask id="path-1-inside-1_596_506" fill="white">
                                    <rect y="5" width="11" height="9" rx="1.5" />
                                </mask>
                                <rect y="5" width="11" height="9" rx="1.5" stroke="#78B548" stroke-width="3.2"
                                    mask="url(#path-1-inside-1_596_506)" />
                                <path d="M3 6.5V3C3 1.89543 3.89543 1 5 1H6C7.10457 1 8 1.89543 8 3V4" stroke="#78B548"
                                    stroke-width="1.6" />
                            </svg>
                            Habilitado
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemInfo active">
                <div class="cabecera">
                    <div class="part1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.10421 6.87499C7.10421 6.36338 7.20498 5.85678 7.40076 5.38412C7.59654 4.91145 7.88351 4.48198 8.24527 4.12022C8.60703 3.75846 9.03651 3.47149 9.50917 3.27571C9.98183 3.07993 10.4884 2.97916 11 2.97916C11.5116 2.97916 12.0182 3.07993 12.4909 3.27571C12.9636 3.47149 13.393 3.75846 13.7548 4.12022C14.1166 4.48198 14.4035 4.91145 14.5993 5.38412C14.7951 5.85678 14.8959 6.36338 14.8959 6.87499C14.8959 7.90823 14.4854 8.89915 13.7548 9.62976C13.0242 10.3604 12.0333 10.7708 11 10.7708C9.9668 10.7708 8.97588 10.3604 8.24527 9.62976C7.51466 8.89915 7.10421 7.90823 7.10421 6.87499ZM11 4.35416C10.3315 4.35416 9.69029 4.61974 9.21754 5.09249C8.74479 5.56524 8.47921 6.20642 8.47921 6.87499C8.47921 7.54356 8.74479 8.18474 9.21754 8.65749C9.69029 9.13024 10.3315 9.39582 11 9.39582C11.6686 9.39582 12.3098 9.13024 12.7825 8.65749C13.2553 8.18474 13.5209 7.54356 13.5209 6.87499C13.5209 6.20642 13.2553 5.56524 12.7825 5.09249C12.3098 4.61974 11.6686 4.35416 11 4.35416ZM7.33337 13.5208C6.78636 13.5208 6.26176 13.7381 5.87497 14.1249C5.48817 14.5117 5.27087 15.0363 5.27087 15.5833V16.6723C5.27087 16.6888 5.28279 16.7035 5.29929 16.7062C9.07504 17.3222 12.926 17.3222 16.7008 16.7062C16.7086 16.7045 16.7156 16.7002 16.7207 16.6941C16.7258 16.6879 16.7288 16.6803 16.7292 16.6723V15.5833C16.7292 15.0363 16.5119 14.5117 16.1251 14.1249C15.7383 13.7381 15.2137 13.5208 14.6667 13.5208H14.355C14.3305 13.5212 14.3062 13.5249 14.2826 13.5318L13.4897 13.7912C11.872 14.3195 10.1281 14.3195 8.51037 13.7912L7.71654 13.5318C7.69359 13.5251 7.66986 13.5214 7.64596 13.5208H7.33337ZM3.89587 15.5833C3.89587 14.6716 4.25804 13.7973 4.90269 13.1526C5.54735 12.508 6.42169 12.1458 7.33337 12.1458H7.64504C7.81615 12.1464 7.98237 12.1727 8.14371 12.2247L8.93754 12.4841C10.2777 12.9216 11.7223 12.9216 13.0625 12.4841L13.8564 12.2247C14.0168 12.1724 14.1855 12.1458 14.3541 12.1458H14.6667C15.5784 12.1458 16.4527 12.508 17.0974 13.1526C17.742 13.7973 18.1042 14.6716 18.1042 15.5833V16.6723C18.1042 17.3635 17.6037 17.952 16.9217 18.0629C12.9999 18.7031 9.0002 18.7031 5.07837 18.0629C4.74854 18.0086 4.44867 17.8391 4.23213 17.5845C4.01559 17.3298 3.89643 17.0066 3.89587 16.6723V15.5833Z"
                                fill="#003C3E" />
                        </svg>
                        Informacion personal
                    </div>
                    <div class="part2">
                        <button class="editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                    fill="#003C3E" />
                            </svg>
                            Editar
                        </button>
                        <div class="flecha">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="17" viewBox="0 0 33 17"
                                fill="none">
                                <g clip-path="url(#clip0_596_375)">
                                    <path
                                        d="M23.9524 13.1285L25.4099 11.6696L17.4665 3.72352C17.3393 3.59543 17.1879 3.49378 17.0212 3.42441C16.8545 3.35505 16.6757 3.31934 16.4951 3.31934C16.3145 3.31934 16.1357 3.35505 15.969 3.42441C15.8023 3.49378 15.651 3.59543 15.5237 3.72352L7.57617 11.6696L9.03367 13.1271L16.493 5.66914L23.9524 13.1285Z"
                                        fill="#003C3E" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_596_375">
                                        <rect width="16.5" height="33" fill="white"
                                            transform="matrix(0 -1 -1 4.37114e-08 33 16.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cuerpo">
                    <div class="contentInput">
                        <p>Codigo de socio</p>
                        <input type="text" name="codigo" id="nombre-codigo" value="4546" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Nombres</p>
                        <input type="text" name="nombres" id="nombres" value="Jose Manuel" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Apellido paterno</p>
                        <input type="text" name="apellido_pa" id="apellido_pa" value="Gonzales" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Apellido materno</p>
                        <input type="text" name="apellido_ma" id="apellido_ma" value="Menendez" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Nacionalidad</p>
                        <select name="nacionalidad" id="nacionalidad" disabled>
                            <option value="Peru">Peru</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Chile">Chile</option>
                            <option value="Mexicana">Mexicana</option>
                            
                        </select>
                    </div>
                    <div class="contentInput">
                        <p>Lugar de nacimiento</p>
                        <input type="text" name="lugar_nac" id="lugar_nac" value="Lima" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Tipo de documento</p>
                        <select name="tipo_doc" id="tipo_doc" disabled>
                            <option value="DNI">DNI</option>
                            <option value="CE">CE</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="contentInput">
                        <p>Nro de documento de identidad</p>
                        <input type="number" name="nro_doc" id="nro_doc" value="29422633" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Estado civil</p>
                        <input type="text" name="edo_civil" id="edo_civil" value="Casado(a)" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Genero</p>
                        <select name="sexo" id="sexo" disabled>
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                    <div class="contentInput">
                        <p>Edad</p>
                        <input type="number" name="edad" id="edad" value="53" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Fecha de nacimiento</p>
                        <input type="date" name="fech_nac" id="fech_nac" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Fecha de ingreso</p>
                        <input type="date" name="fech_ingreso" id="fech_ingreso" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Nro Solicitud</p>
                        <input type="text" name="nro_solicitud" id="nro_solicitud" value="XXXXX" disabled/>
                    </div>
                </div>
                <div class="btnResponsive">
                    <button class="editar2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path
                                d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                fill="#003C3E" />
                        </svg>
                        Editar
                    </button>
                </div>
            </div>
            <div class="itemInfo">
                <div class="cabecera">
                    <div class="part1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5ZM12 2C13.8565 2 15.637 2.7375 16.9497 4.05025C18.2625 5.36301 19 7.14348 19 9C19 14.25 12 22 12 22C12 22 5 14.25 5 9C5 7.14348 5.7375 5.36301 7.05025 4.05025C8.36301 2.7375 10.1435 2 12 2ZM12 4C10.6739 4 9.40215 4.52678 8.46447 5.46447C7.52678 6.40215 7 7.67392 7 9C7 10 7 12 12 18.71C17 12 17 10 17 9C17 7.67392 16.4732 6.40215 15.5355 5.46447C14.5979 4.52678 13.3261 4 12 4Z"
                                fill="#003C3E" />
                        </svg>
                        Datos de direccion
                    </div>
                    <div class="part2">
                        <button class="editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                    fill="#003C3E" />
                            </svg>
                            Editar
                        </button>
                        <div class="flecha">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="17" viewBox="0 0 33 17"
                                fill="none">
                                <g clip-path="url(#clip0_596_375)">
                                    <path
                                        d="M23.9524 13.1285L25.4099 11.6696L17.4665 3.72352C17.3393 3.59543 17.1879 3.49378 17.0212 3.42441C16.8545 3.35505 16.6757 3.31934 16.4951 3.31934C16.3145 3.31934 16.1357 3.35505 15.969 3.42441C15.8023 3.49378 15.651 3.59543 15.5237 3.72352L7.57617 11.6696L9.03367 13.1271L16.493 5.66914L23.9524 13.1285Z"
                                        fill="#003C3E" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_596_375">
                                        <rect width="16.5" height="33" fill="white"
                                            transform="matrix(0 -1 -1 4.37114e-08 33 16.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cuerpo">
                    <div class="contentInput">
                        <p>Direccion</p>
                        <input type="text" name="direccion" id="direccion" value="Av. Alejandro Velasco Astete 1231 dpto 204 urb..." disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Ubicacion</p>
                        <input type="text" name="ubicacion" id="ubicacion" value="01140140 Peru/Lima/Lima/San Borja" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Telofono fijo</p>
                        <input type="number" name="tel_fijo" id="tel_fijo" value="980500900" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Telofono celular</p>
                        <input type="text" name="tel_cel" id="tel_cel" value="Av Los Alamos 777" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Email</p>
                        <input type="email" name="email" id="email" value="magdieljose@gmail.com" disabled/>
                    </div>
                </div>
                <div class="btnResponsive">
                    <button class="editar2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path
                                d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                fill="#003C3E" />
                        </svg>
                        Editar
                    </button>
                </div>
            </div>
            <div class="itemInfo">
                <div class="cabecera">
                    <div class="part1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M20 6C20.58 6 21.05 6.2 21.42 6.59C21.8 7 22 7.45 22 8V19C22 19.55 21.8 20 21.42 20.41C21.05 20.8 20.58 21 20 21H4C3.42 21 2.95 20.8 2.58 20.41C2.2 20 2 19.55 2 19V8C2 7.45 2.2 7 2.58 6.59C2.95 6.2 3.42 6 4 6H8V4C8 3.42 8.2 2.95 8.58 2.58C8.95 2.2 9.42 2 10 2H14C14.58 2 15.05 2.2 15.42 2.58C15.8 2.95 16 3.42 16 4V6H20ZM4 8V19H20V8H4ZM14 6V4H10V6H14Z"
                                fill="#003C3E" />
                        </svg>
                        Centro laboral
                    </div>
                    <div class="part2">
                        <button class="editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                    fill="#003C3E" />
                            </svg>
                            Editar
                        </button>
                        <div class="flecha">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="17" viewBox="0 0 33 17"
                                fill="none">
                                <g clip-path="url(#clip0_596_375)">
                                    <path
                                        d="M23.9524 13.1285L25.4099 11.6696L17.4665 3.72352C17.3393 3.59543 17.1879 3.49378 17.0212 3.42441C16.8545 3.35505 16.6757 3.31934 16.4951 3.31934C16.3145 3.31934 16.1357 3.35505 15.969 3.42441C15.8023 3.49378 15.651 3.59543 15.5237 3.72352L7.57617 11.6696L9.03367 13.1271L16.493 5.66914L23.9524 13.1285Z"
                                        fill="#003C3E" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_596_375">
                                        <rect width="16.5" height="33" fill="white"
                                            transform="matrix(0 -1 -1 4.37114e-08 33 16.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cuerpo">
                    <div class="contentInput">
                        <p>Centro de estudio</p>
                        <input type="text" name="centro_estudio" id="centro_estudio" value="Los Olivos" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Especialidad</p>
                        <input type="text" name="especialidad" id="especialidad" value="Lima" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Profesion</p>
                        <input type="text" name="profesion" id="profesion" value="Lima" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Telefono empresa</p>
                        <input type="number" name="telefono_empresa" id="telefono_empresa" value="54984954" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Centro laboral</p>
                        <input type="text" name="centro_laboral" id="centro_laboral" value="Lima" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Fax empresa</p>
                        <input type="text" name="fax_empresa" id="fax_empresa" value="Av Los Alamos 777" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Cargo laboral</p>
                        <input type="text" name="cargo_laboral" id="cargo_laboral" value="Lima" disabled/>
                    </div>
                    <div class="contentInput">
                        <p>Dir. empresa</p>
                        <input type="text" name="dir_empresa" id="dir_empresa" value="Av Los Alamos 777" disabled/>
                    </div>
                </div>
                <div class="btnResponsive">
                    <button class="editar2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path
                                d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z"
                                fill="#003C3E" />
                        </svg>
                        Editar
                    </button>
                </div>
            </div>
            <div class="container-precargador">
                <div class="dash-precargador uno-precargador"></div>
                <div class="dash-precargador dos-precargador"></div>
                <div class="dash-precargador tres-precargador"></div>
                <div class="dash-precargador cuatro-precargador"></div>
            </div>
            @auth
                @if (!Auth::user()->force_password_change)
                    <x-change-password-form />
                @endif
            @endauth
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1) Obtener el user_id desde sessionStorage
            const userId = "{{ Auth::user()->id }}";
            if (!userId) {
                console.error("No se encontro el user_id en la sesion. Asegurate de que el usuario esto autenticado.");
                return;
            }

            const token = document.querySelector('meta[name="access-token"]').getAttribute('content');
            if (!token) {
                console.error("No se encontro el token de acceso.");
                return;
            }
            // 2) Consumir la API con GET /api/users/{userId}
            fetch(`{{ config('app.url') }}/api/users/${userId}`, {
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${token}`
                }
            })
            .then(response => response.json())
            .then(json => {
                if (json.type === 'success') {
                    const user = json.data;
                    // (Opcional) guardar en localStorage para comparaciones al editar
                    localStorage.setItem('datosUserRinconda', JSON.stringify(user));
                    // 3) Poblar campos
                    poblarCamposUsuario(user);
                } else {
                    console.error("Error en la respuesta de la API:", json.message);
                }
            })
            .catch(error => console.error("Error al consumir la API:", error));

            // -------------------------------------------------------------------
            // Funcion para poblar la vista con los datos devueltos por la API
            // -------------------------------------------------------------------
            function poblarCamposUsuario(user) {
                // 1. Campos principales
                if (user.name) {
                    const nombreCompleto = document.getElementById('nombre-completo');
                    const nombreCodigo   = document.getElementById('nombre-codigo');
                    if (nombreCompleto) nombreCompleto.textContent = user.name;
                    if (nombreCodigo && user.detail && user.detail.codigo) {
                        nombreCodigo.innerHTML = `${user.name}<br />NÃ‚Âº ${user.detail.codigo}`;
                    }
                }

                if (user.email) {
                    const emailField = document.getElementById('email');
                    if (emailField) emailField.value = user.email;
                }

                // 2. Si hay campo foto
                if (user.foto) {
                    const fotoPerfil  = document.getElementById('foto-perfil');
                    const fotoPerfil2 = document.getElementById('foto-perfil2');
                    if (fotoPerfil)  fotoPerfil.src  = `/fotos/${user.foto}`;
                    if (fotoPerfil2) fotoPerfil2.src = `/fotos/${user.foto}`;
                }

                if (user.tipo_doc) {
                    const tipo_doc  = document.getElementById('tipo_doc');
                    if (tipo_doc) {
                        tipo_doc.value = user.tipo_doc || '';
                    }
                }

                if (user.nro_doc) {
                    const nro_doc  = document.getElementById('nro_doc');
                    if (nro_doc) {
                        nro_doc.value = user.nro_doc || '';
                    }
                
                }

                // 3. Campos detail
                if (user.detail) {
                    Object.keys(user.detail).forEach(key => {
                        const inputElement = document.getElementById(key);
                        if (inputElement) {
                            inputElement.value = user.detail[key] || '';
                        }
                    });
                }
            }

            // -------------------------------------------------------------------
            // Logica de Editar/Guardar en cada seccion (itemInfo)
            // -------------------------------------------------------------------
            const botonesEditar = document.querySelectorAll('.editar, .editar2');
            botonesEditar.forEach(boton => {
                boton.addEventListener('click', function () {
                    // localizamos el contenedor itemInfo
                    const contenedor = this.closest('.itemInfo');
                    if (!contenedor) return;

                    // inputs y selects del contenedor
                    const campos = contenedor.querySelectorAll('input, select');
                    if (campos.length === 0) return;

                    // verificamos si estÃƒÂ¡n deshabilitados
                    const estanDeshabilitados = campos[0].disabled;

                    if (estanDeshabilitados) {
                        // modo "edicion": habilitar
                        campos.forEach(c => c.disabled = false);
                        this.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z" fill="#003C3E"/>
                            </svg>
                            Guardar
                        `;
                    } else {
                        // modo "lectura": deshabilitar y guardar
                        campos.forEach(c => c.disabled = true);
                        this.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M4.8105 11.9175L12.417 4.31101L11.3565 3.25051L3.75 10.857V11.9175H4.8105ZM5.43225 13.4175H2.25V10.2353L10.8263 1.65901C10.9669 1.51841 11.1576 1.43942 11.3565 1.43942C11.5554 1.43942 11.7461 1.51841 11.8868 1.65901L14.0085 3.78076C14.1491 3.92141 14.2281 4.11214 14.2281 4.31101C14.2281 4.50989 14.1491 4.70062 14.0085 4.84126L5.43225 13.4175ZM2.25 14.9175H15.75V16.4175H2.25V14.9175Z" fill="#003C3E"/>
                            </svg>
                            Editar
                        `;
                        // proceder a enviar la actualizacion
                        const oldUser = JSON.parse(localStorage.getItem('datosUserRinconda') || '{}');
                        prepararYEnviarActualizacion(oldUser);
                    }
                });
            });

            // -------------------------------------------------------------------
            // Funcion para preparar el body y hacer PUT en /api/users/{id}/limited
            // -------------------------------------------------------------------
            function prepararYEnviarActualizacion(oldUser) {
                if (!oldUser || !oldUser.id) {
                    console.warn("No hay datos previos del usuario en localStorage o falta el ID.");
                    return;
                }

                // Campos top-level
                const emailField = document.getElementById('email');
                const newEmail   = emailField ? emailField.value.trim() : '';

                // Campos detail
                const newNombres       = document.getElementById('nombres')?.value.trim()       || '';
                const newApellidoPa    = document.getElementById('apellido_pa')?.value.trim()   || '';
                const newApellidoMa    = document.getElementById('apellido_ma')?.value.trim()   || '';
                const newNacionalidad  = document.getElementById('nacionalidad')?.value         || '';
                const newLugarNac      = document.getElementById('lugar_nac')?.value.trim()     || '';
                const newEdoCivil      = document.getElementById('edo_civil')?.value.trim()     || '';
                const newSexo          = document.getElementById('sexo')?.value                || '';
                const newFechNac       = document.getElementById('fech_nac')?.value             || '';
                const newEdad          = document.getElementById('edad')?.value.trim()          || '';
                const newFechIngreso   = document.getElementById('fech_ingreso')?.value         || '';
                const newNroSolicitud  = document.getElementById('nro_solicitud')?.value.trim() || '';
                const newDireccion     = document.getElementById('direccion')?.value.trim()     || '';
                const newUbicacion     = document.getElementById('ubicacion')?.value.trim()     || '';
                const newTelFijo       = document.getElementById('tel_fijo')?.value.trim()      || '';
                const newTelCel        = document.getElementById('tel_cel')?.value.trim()       || '';
                const newCentroEstudio = document.getElementById('centro_estudio')?.value.trim()|| '';
                const newEspecialidad  = document.getElementById('especialidad')?.value.trim()  || '';
                const newProfesion     = document.getElementById('profesion')?.value.trim()     || '';
                const newTelEmpresa    = document.getElementById('telefono_empresa')?.value.trim() || '';
                const newCentroLaboral = document.getElementById('centro_laboral')?.value.trim()   || '';
                const newFaxEmpresa    = document.getElementById('fax_empresa')?.value.trim()       || '';
                const newCargoLaboral  = document.getElementById('cargo_laboral')?.value.trim()    || '';
                const newDirEmpresa    = document.getElementById('dir_empresa')?.value.trim()      || '';

                // Payload para PUT
                const updatedData = {
                    email: newEmail,
                    detail: {
                        nombres:        newNombres,
                        apellido_pa:    newApellidoPa,
                        apellido_ma:    newApellidoMa,
                        nacionalidad:   newNacionalidad,
                        lugar_nac:      newLugarNac,
                        edo_civil:      newEdoCivil,
                        sexo:           newSexo,
                        fech_nac:       newFechNac,
                        edad:           newEdad || null,
                        fech_ingreso:   newFechIngreso || null,
                        nro_solicitud:  newNroSolicitud || null,
                        direccion:      newDireccion,
                        ubicacion:      newUbicacion,
                        tel_fijo:       newTelFijo,
                        tel_cel:        newTelCel,
                        email:          newEmail, // si tu API requiere email dentro de 'detail'
                        centro_estudio: newCentroEstudio,
                        especialidad:   newEspecialidad,
                        profesion:      newProfesion,
                        telefono_empresa: newTelEmpresa,
                        centro_laboral:  newCentroLaboral,
                        fax_empresa:     newFaxEmpresa,
                        cargo_laboral:   newCargoLaboral,
                        dir_empresa:     newDirEmpresa
                    }
                };

                // Verificar si hubo cambios con respecto a oldUser
                let hayDiferencias = false;

                // top-level: email
                if (oldUser.email !== updatedData.email) {
                    hayDiferencias = true;
                }
                // detail
                if (oldUser.detail) {
                    for (const campo in updatedData.detail) {
                        if (oldUser.detail[campo] !== updatedData.detail[campo]) {
                            hayDiferencias = true;
                            break;
                        }
                    }
                } else {
                    // si antes no habÃƒÂ­a detail, es un cambio
                    hayDiferencias = true;
                }

                if (!hayDiferencias) {
                    console.log("No hay cambios. Se cancela actualizacion.");
                    return;
                }

                // PUT /api/users/{id}/limited
                const userID = oldUser.id;
                fetch(`{{ config('app.url') }}/api/users/${userID}/limited`, {
                    method: 'PUT',
                    headers: { 
                        'Content-Type': 'application/json', 
                        "Authorization": `Bearer ${token}`
                    },
                    body: JSON.stringify(updatedData)
                })
                .then(res => res.json())
                .then(data => {
                    if (data.type === 'success') {
                        // Ãƒâ€°xito: recargamos o volvemos a pedir datos
                        location.reload();
                    } else {
                        alert('Error al actualizar: ' + (data.message || 'Desconocido'));
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert('Error en la peticion: ' + err);
                });
            }
        });
</script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
