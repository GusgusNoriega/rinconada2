<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Control de ingreso</title>
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

            <div class="title">Control de ingreso</div>
            <div class="subtitle">
                Gestiona y controla tu acceso a la asociación.
            </div>
            <div class="tablaIngreso">
                <button class="filtro" id="filtro">
                    Filtrar
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14" fill="none">
                        <path d="M1 1.07422H21" stroke="#78B548" stroke-width="1.48148" stroke-linecap="round" />
                        <path d="M1 7H18.037" stroke="#78B548" stroke-width="1.48148" stroke-linecap="round" />
                        <path d="M1 12.9258H14.3333" stroke="#78B548" stroke-width="1.48148" stroke-linecap="round" />
                    </svg>
                </button>
                <div class="tabla mesaPartes">
                    <div class="cabecera">
                        <div>Nombre</div>
                        <div>Fecha</div>
                        <div>Categoría</div>
                    </div>
                    <div class="tabla">
                        <div class="contentTabla">
                            <div class="tr" fecha="06/01/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/01/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/02/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/02/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/03/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/03/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/04/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/04/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/05/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/0/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/01/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/01/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/02/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/02/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/03/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/03/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/04/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/04/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/05/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/0/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/01/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/01/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/02/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/02/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/03/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/03/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/04/2025" categoria="Familiar">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/04/2025</div>
                                <div class="buttons">
                                    <div class="estado Familiar">Familiar</div>
                                </div>
                            </div>
                            <div class="tr" fecha="06/05/2025" categoria="Asociado">
                                <div class="flecha">José Menendez</div>
                                <div class="resumen">06/0/2025</div>
                                <div class="buttons">
                                    <div class="estado Asociado">Asociado</div>
                                </div>
                            </div>
                        </div>
                        <div class="paginacion">
                            <div class="cantidad">
                                <span class="desde">1</span> - <span class="hasta">5</span> de
                                <span class="total">40</span>
                            </div>
                            <div class="flechas">
                                <button class="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.4053 6.96967C14.6982 7.26256 14.6982 7.73744 14.4053 8.03033L10.4357 12L14.4053 15.9697C14.6982 16.2626 14.6982 16.7374 14.4053 17.0303C14.1124 17.3232 13.6376 17.3232 13.3447 17.0303L8.84467 12.5303C8.55178 12.2374 8.55178 11.7626 8.84467 11.4697L13.3447 6.96967C13.6376 6.67678 14.1124 6.67678 14.4053 6.96967Z"
                                            fill="#003C3E"></path>
                                    </svg>
                                </button>
                                <button class="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.59467 6.96967C9.88756 6.67678 10.3624 6.67678 10.6553 6.96967L15.1553 11.4697C15.4482 11.7626 15.4482 12.2374 15.1553 12.5303L10.6553 17.0303C10.3624 17.3232 9.88756 17.3232 9.59467 17.0303C9.30178 16.7374 9.30178 16.2626 9.59467 15.9697L13.5643 12L9.59467 8.03033C9.30178 7.73744 9.30178 7.26256 9.59467 6.96967Z"
                                            fill="#003C3E"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalfiltromain main">
                <div class="container">
                    <div class="content">
                        <div class="tabs">
                            <div class="tab" id="fecha">Filtrar por fecha</div>
                            <div class="tab" id="categoria">Filtrar por categoria</div>
                        </div>
                        <div class="btns">
                            <button class="cancelar">Cancelar</button>
                            <button class="aplicar">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalfiltromain categoria">
                <div class="container">
                    <div class="content">
                        <div class="tabs">
                            <div class="tab" id="Asociado">Asociado</div>
                            <div class="tab" id="Familiar">Familiar</div>
                        </div>
                        <div class="btns">
                            <button class="cancelar">Cancelar</button>
                            <button class="aplicar">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalfiltromain fecha">
                <div class="container">
                    <div class="content">
                        <div class="containerFechas">
                            <button class="prev1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13"
                                    fill="none">
                                    <path d="M7 1L1 6.5L7 12" stroke="#003C3E" stroke-width="1.57061"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="contentFechas">
                                <div class="mes">Enero 2025</div>
                                <div class="mes">Febrero 2025</div>
                                <div class="mes">Marzo 2025</div>
                                <div class="mes">Abril 2025</div>
                                <div class="mes">Mayo 2025</div>
                                <div class="mes">Junio 2025</div>
                                <div class="mes">Julio 2025</div>
                                <div class="mes">Agosto 2025</div>
                                <div class="mes">Setiembre 2025</div>
                                <div class="mes">Octubre 2025</div>
                                <div class="mes">Noviembre 2025</div>
                                <div class="mes">Diciembre 2025</div>
                            </div>
                            <button class="next1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13"
                                    fill="none">
                                    <path d="M1 12L6 6.5L1 1" stroke="#003C3E" stroke-width="1.57061"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="btns">
                            <button class="cancelar">Cancelar</button>
                            <button class="aplicar">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/control-ingreso.js"></script>
    <script src="js/main-socio-consulta.js"></script>
</body>

</html>