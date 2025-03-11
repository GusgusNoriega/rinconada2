<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Estado de cuenta</title>
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
            <div class="title">Estado de cuenta</div>
            <div class="mensajeError">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.25 11.625C2.25 6.44782 6.44782 2.25 11.625 2.25C16.8022 2.25 21 6.44782 21 11.625C21 16.8022 16.8022 21 11.625 21C6.44782 21 2.25 16.8022 2.25 11.625ZM11.625 3.75C7.27624 3.75 3.75 7.27624 3.75 11.625C3.75 15.9738 7.27624 19.5 11.625 19.5C15.9738 19.5 19.5 15.9738 19.5 11.625C19.5 7.27624 15.9738 3.75 11.625 3.75Z"
                        fill="#720000" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.5625 10.3125C9.5625 9.89829 9.89829 9.5625 10.3125 9.5625H11.8125C12.2267 9.5625 12.5625 9.89829 12.5625 10.3125V15.75C12.5625 16.1642 12.2267 16.5 11.8125 16.5C11.3983 16.5 11.0625 16.1642 11.0625 15.75V11.0625H10.3125C9.89829 11.0625 9.5625 10.7267 9.5625 10.3125Z"
                        fill="#720000" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9 15.9375C9 15.5233 9.33579 15.1875 9.75 15.1875H13.875C14.2892 15.1875 14.625 15.5233 14.625 15.9375C14.625 16.3517 14.2892 16.6875 13.875 16.6875H9.75C9.33579 16.6875 9 16.3517 9 15.9375Z"
                        fill="#720000" />
                    <path
                        d="M11.625 6.09375C11.384 6.09375 11.1483 6.16523 10.9479 6.29915C10.7475 6.43306 10.5913 6.62341 10.499 6.8461C10.4068 7.0688 10.3826 7.31385 10.4297 7.55027C10.4767 7.78668 10.5928 8.00384 10.7632 8.17429C10.9337 8.34473 11.1508 8.46081 11.3872 8.50783C11.6236 8.55486 11.8687 8.53072 12.0914 8.43848C12.3141 8.34623 12.5044 8.19002 12.6384 7.9896C12.7723 7.78918 12.8438 7.55355 12.8438 7.3125C12.8438 6.98927 12.7153 6.67927 12.4868 6.45071C12.2582 6.22215 11.9482 6.09375 11.625 6.09375Z"
                        fill="#720000" />
                </svg>
                Tu proxima deuda vence el 20 de febrero. Recuerda que si debes mas de
                2 cuotas, no podras acceder a ningun servicio del club.
            </div>
            <div class="tablaPagos">
                <div class="head">
                    <div class="part1">
                        <p class="h3">Deuda total: <span>s/580</span></p>
                    </div>
                    <div class="part2 buttons">
                        <div>
                            <button>
                                Descargar
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.25 6C4.05109 6 3.86032 6.07902 3.71967 6.21967C3.57902 6.36032 3.5 6.55109 3.5 6.75V13.25C3.5 13.4489 3.57902 13.6397 3.71967 13.7803C3.86032 13.921 4.05109 14 4.25 14H11.75C11.9489 14 12.1397 13.921 12.2803 13.7803C12.421 13.6397 12.5 13.4489 12.5 13.25V6.75C12.5 6.55109 12.421 6.36032 12.2803 6.21967C12.1397 6.07902 11.9489 6 11.75 6H10.5C10.2239 6 10 5.77614 10 5.5C10 5.22386 10.2239 5 10.5 5H11.75C12.2141 5 12.6592 5.18437 12.9874 5.51256C13.3156 5.84075 13.5 6.28587 13.5 6.75V13.25C13.5 13.7141 13.3156 14.1592 12.9874 14.4874C12.6592 14.8156 12.2141 15 11.75 15H4.25C3.78587 15 3.34075 14.8156 3.01256 14.4874C2.68437 14.1592 2.5 13.7141 2.5 13.25V6.75C2.5 6.28587 2.68437 5.84075 3.01256 5.51256C3.34075 5.18437 3.78587 5 4.25 5H5.5C5.77614 5 6 5.22386 6 5.5C6 5.77614 5.77614 6 5.5 6H4.25Z"
                                        fill="#78B548" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.14645 8.14645C5.34171 7.95118 5.65829 7.95118 5.85355 8.14645L8 10.2929L10.1464 8.14645C10.3417 7.95118 10.6583 7.95118 10.8536 8.14645C11.0488 8.34171 11.0488 8.65829 10.8536 8.85355L8.35355 11.3536C8.15829 11.5488 7.84171 11.5488 7.64645 11.3536L5.14645 8.85355C4.95118 8.65829 4.95118 8.34171 5.14645 8.14645Z"
                                        fill="#78B548" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 1C8.27614 1 8.5 1.22386 8.5 1.5V10.5C8.5 10.7761 8.27614 11 8 11C7.72386 11 7.5 10.7761 7.5 10.5V1.5C7.5 1.22386 7.72386 1 8 1Z"
                                        fill="#78B548" />
                                </svg>
                            </button>
                            <button>
                                Imprimir
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                    fill="none">
                                    <path
                                        d="M14.2498 13.2604H12.6665C12.509 13.2604 12.358 13.1979 12.2467 13.0865C12.1353 12.9752 12.0728 12.8241 12.0728 12.6667C12.0728 12.5092 12.1353 12.3582 12.2467 12.2468C12.358 12.1355 12.509 12.0729 12.6665 12.0729H14.2498C14.5123 12.0729 14.764 11.9687 14.9496 11.7831C15.1352 11.5975 15.2394 11.3458 15.2394 11.0833V7.91668C15.2394 7.65422 15.1352 7.40252 14.9496 7.21694C14.764 7.03135 14.5123 6.92709 14.2498 6.92709H4.74984C4.48738 6.92709 4.23568 7.03135 4.0501 7.21694C3.86451 7.40252 3.76025 7.65422 3.76025 7.91668V11.0833C3.76025 11.3458 3.86451 11.5975 4.0501 11.7831C4.23568 11.9687 4.48738 12.0729 4.74984 12.0729H6.33317C6.49064 12.0729 6.64167 12.1355 6.75302 12.2468C6.86436 12.3582 6.92692 12.5092 6.92692 12.6667C6.92692 12.8241 6.86436 12.9752 6.75302 13.0865C6.64167 13.1979 6.49064 13.2604 6.33317 13.2604H4.74984C4.17244 13.2604 3.61869 13.0311 3.21041 12.6228C2.80212 12.2145 2.57275 11.6607 2.57275 11.0833V7.91668C2.57275 7.33928 2.80212 6.78553 3.21041 6.37725C3.61869 5.96896 4.17244 5.73959 4.74984 5.73959H14.2498C14.8272 5.73959 15.381 5.96896 15.7893 6.37725C16.1976 6.78553 16.4269 7.33928 16.4269 7.91668V11.0833C16.4269 11.6607 16.1976 12.2145 15.7893 12.6228C15.381 13.0311 14.8272 13.2604 14.2498 13.2604Z"
                                        fill="#78B548" />
                                    <path
                                        d="M12.6668 6.92707C12.51 6.92502 12.3602 6.86181 12.2493 6.7509C12.1383 6.63999 12.0751 6.49016 12.0731 6.33332V3.76041H6.92725V6.33332C6.92725 6.4908 6.86469 6.64182 6.75334 6.75317C6.64199 6.86452 6.49097 6.92707 6.3335 6.92707C6.17602 6.92707 6.025 6.86452 5.91365 6.75317C5.8023 6.64182 5.73975 6.4908 5.73975 6.33332V3.56249C5.73975 3.30004 5.84401 3.04833 6.02959 2.86275C6.21517 2.67717 6.46688 2.57291 6.72933 2.57291H12.271C12.5335 2.57291 12.7852 2.67717 12.9707 2.86275C13.1563 3.04833 13.2606 3.30004 13.2606 3.56249V6.33332C13.2585 6.49016 13.1953 6.63999 13.0844 6.7509C12.9735 6.86181 12.8237 6.92502 12.6668 6.92707ZM12.271 16.4271H6.72933C6.46688 16.4271 6.21517 16.3228 6.02959 16.1372C5.84401 15.9516 5.73975 15.6999 5.73975 15.4375V9.89582C5.73975 9.63337 5.84401 9.38167 6.02959 9.19608C6.21517 9.0105 6.46688 8.90624 6.72933 8.90624H12.271C12.5335 8.90624 12.7852 9.0105 12.9707 9.19608C13.1563 9.38167 13.2606 9.63337 13.2606 9.89582V15.4375C13.2606 15.6999 13.1563 15.9516 12.9707 16.1372C12.7852 16.3228 12.5335 16.4271 12.271 16.4271ZM6.92725 15.2396H12.0731V10.0937H6.92725V15.2396Z"
                                        fill="#78B548" />
                                </svg>
                            </button>
                        </div>
                        <button class="filtro1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path d="M5.3335 1.33334V4.00001M10.6668 1.33334V4.00001" stroke="#78B548"
                                    stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.6667 2.66666H3.33333C2.59695 2.66666 2 3.26361 2 3.99999V13.3333C2 14.0697 2.59695 14.6667 3.33333 14.6667H12.6667C13.403 14.6667 14 14.0697 14 13.3333V3.99999C14 3.26361 13.403 2.66666 12.6667 2.66666Z"
                                    stroke="#78B548" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2 6.66666H14" stroke="#78B548" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Feb 1 -Feb 16, 2024
                        </button>
                        <button class="filtro2">
                            Filtrar
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14"
                                fill="none">
                                <path d="M1 1.07407H21" stroke="#78B548" stroke-width="1.48148"
                                    stroke-linecap="round" />
                                <path d="M1 7H18.037" stroke="#78B548" stroke-width="1.48148" stroke-linecap="round" />
                                <path d="M1 12.9259H14.3333" stroke="#78B548" stroke-width="1.48148"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="tabla desktop filtro">
                    <div class="tabs">
                        <div class="tab" data="Pendiente">Pendiente</div>
                        <div class="tab" data="Pagados">Pagados</div>
                        <div class="tab active" data="Todos">Todos</div>
                    </div>
                    <div class="datos2">
                        <table class="filtro">
                            <tr class="head2">
                                <td class="head2">Concepto</td>
                                <td class="head2">Fecha</td>
                                <td class="head2">Vence</td>
                                <td class="head2">Documento</td>
                                <td class="head2">Moneda</td>
                                <td class="head2">Importe</td>
                                <td></td>
                            </tr>
                            <tr data="Pendiente">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>300</td>
                                <td><button class="pagar payButton" data-amount="300">Pagar</button></td>
                            </tr>
                            <tr data="Pagados">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Pagado">Pagado</button></td>
                            </tr>
                            <tr data="">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Vencido">Vencido</button></td>
                            </tr>
                            <tr data="Pendiente">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>310</td>
                                <td><button class="pagar payButton" data-amount="310">Pagar</button></td>
                            </tr>
                            <tr data="Pagados">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Pagado">Pagado</button></td>
                            </tr>
                            <tr data="">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Vencido">Vencido</button></td>
                            </tr>
                            <tr data="Pendiente">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>1800</td>
                                <td><button class="pagar payButton" data-amount="1800">Pagar</button></td>
                            </tr>
                            <tr data="Pagados">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Pagado">Pagado</button></td>
                            </tr>
                            <tr data="">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Vencido">Vencido</button></td>
                            </tr>
                            <tr data="Pendiente">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="pagar payButton" data-amount="290">Pagar</button></td>
                            </tr>
                            <tr data="Pagados">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Pagado">Pagado</button></td>
                            </tr>
                            <tr data="">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Vencido">Vencido</button></td>
                            </tr>
                            <tr data="Pendiente">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="pagar payButton" data-amount="290">Pagar</button></td>
                            </tr>
                            <tr data="Pagados">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Pagado">Pagado</button></td>
                            </tr>
                            <tr data="">
                                <td>Cuota mantenimiento</td>
                                <td>10/02/2024</td>
                                <td>20/02/2024</td>
                                <td>03/B002-0058037</td>
                                <td>S/</td>
                                <td>290</td>
                                <td><button class="Vencido">Vencido</button></td>
                            </tr>
                        </table>

                        <div class="paginacion">
                            <div class="cantidad">
                                <span class="desde">1</span> -
                                <span class="hasta">10</span> de <span class="total">40</span>
                            </div>
                            <div class="flechas">
                                <button class="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.4053 6.96967C14.6982 7.26256 14.6982 7.73744 14.4053 8.03033L10.4357 12L14.4053 15.9697C14.6982 16.2626 14.6982 16.7374 14.4053 17.0303C14.1124 17.3232 13.6376 17.3232 13.3447 17.0303L8.84467 12.5303C8.55178 12.2374 8.55178 11.7626 8.84467 11.4697L13.3447 6.96967C13.6376 6.67678 14.1124 6.67678 14.4053 6.96967Z"
                                            fill="#003C3E" />
                                    </svg>
                                </button>
                                <button class="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.59467 6.96967C9.88756 6.67678 10.3624 6.67678 10.6553 6.96967L15.1553 11.4697C15.4482 11.7626 15.4482 12.2374 15.1553 12.5303L10.6553 17.0303C10.3624 17.3232 9.88756 17.3232 9.59467 17.0303C9.30178 16.7374 9.30178 16.2626 9.59467 15.9697L13.5643 12L9.59467 8.03033C9.30178 7.73744 9.30178 7.26256 9.59467 6.96967Z"
                                            fill="#003C3E" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabla mobile filtro">
                    <div class="tabs">
                        <div class="tab" data="Pendiente">Pendiente</div>
                        <div class="tab" data="Pagados">Pagados</div>
                        <div class="tab active" data="Todos">Todos</div>
                    </div>
                    <div class="datos2">
                        <table class="filtro">
                            <tr data="Pendiente">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/350</b>
                                </td>
                                <td class="botones">
                                    <button class="pagar payButton" data-amount="350">Pagar</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pagados">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Pagado">Pagado</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Vencido">Vencido</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pendiente">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="pagar payButton" data-amount="290">Pagar</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pagados">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Pagado">Pagado</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Vencido">Vencido</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pendiente">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="pagar payButton" data-amount="290">Pagar</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pagados">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Pagado">Pagado</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Vencido">Vencido</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pendiente">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="pagar payButton" data-amount="290">Pagar</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pagados">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Pagado">Pagado</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Vencido">Vencido</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pendiente">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="pagar payButton" data-amount="290">Pagar</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="Pagados">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Pagado">Pagado</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr data="">
                                <td>
                                    Vence 20/02/2024 <br />
                                    Cuota de mantenimiento <br />
                                    <b>Importe: S/290</b>
                                </td>
                                <td class="botones">
                                    <button class="Vencido">Vencido</button>
                                    <button class="flecha">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                            fill="none">
                                            <path
                                                d="M0.000234307 1.27338L1.27482 -8.89895e-06L8.21719 6.93995C8.32909 7.05115 8.41791 7.18339 8.47851 7.32905C8.53911 7.47471 8.57031 7.63091 8.57031 7.78867C8.57031 7.94644 8.53911 8.10264 8.47851 8.2483C8.41791 8.39396 8.32909 8.5262 8.21719 8.6374L1.27482 15.581L0.00143708 14.3076L6.51733 7.79048L0.000234307 1.27338Z"
                                                fill="#003C3E" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </table>

                        <div class="paginacion">
                            <div class="cantidad">
                                <span class="desde">1</span> -
                                <span class="hasta">10</span> de <span class="total">40</span>
                            </div>
                            <div class="flechas">
                                <button class="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.4053 6.96967C14.6982 7.26256 14.6982 7.73744 14.4053 8.03033L10.4357 12L14.4053 15.9697C14.6982 16.2626 14.6982 16.7374 14.4053 17.0303C14.1124 17.3232 13.6376 17.3232 13.3447 17.0303L8.84467 12.5303C8.55178 12.2374 8.55178 11.7626 8.84467 11.4697L13.3447 6.96967C13.6376 6.67678 14.1124 6.67678 14.4053 6.96967Z"
                                            fill="#003C3E" />
                                    </svg>
                                </button>
                                <button class="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.25 12C2.25 6.61704 6.61704 2.25 12 2.25C17.383 2.25 21.75 6.61704 21.75 12C21.75 17.383 17.383 21.75 12 21.75C6.61704 21.75 2.25 17.383 2.25 12ZM12 3.75C7.44546 3.75 3.75 7.44546 3.75 12C3.75 16.5545 7.44546 20.25 12 20.25C16.5545 20.25 20.25 16.5545 20.25 12C20.25 7.44546 16.5545 3.75 12 3.75Z"
                                            fill="#003C3E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.59467 6.96967C9.88756 6.67678 10.3624 6.67678 10.6553 6.96967L15.1553 11.4697C15.4482 11.7626 15.4482 12.2374 15.1553 12.5303L10.6553 17.0303C10.3624 17.3232 9.88756 17.3232 9.59467 17.0303C9.30178 16.7374 9.30178 16.2626 9.59467 15.9697L13.5643 12L9.59467 8.03033C9.30178 7.73744 9.30178 7.26256 9.59467 6.96967Z"
                                            fill="#003C3E" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tablaPagos tablaPagos2">
                <div class="head">
                    <div class="part1">
                        <p class="h3">Resumen de cuenta</p>
                    </div>
                </div>
                <div class="tabla desktop">
                    <div class="datos22">
                        <table>
                            <tr class="head2">
                                <td class="head2">Moneda</td>
                                <td class="head2">Saldo acumulado</td>
                                <td class="head2">Saldo vencido</td>
                                <td class="head2">LÃƒÂ­nea de crÃƒÂ©dito</td>
                            </tr>
                            <tr>
                                <td>S/</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td>$</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="tabla mobile">
                    <div class="datos22">
                        <table>
                            <tr class="head2">
                                <td class="head2">Moneda</td>
                                <td class="moneda">S/</td>
                                <td class="moneda">$</td>
                            </tr>
                            <tr>
                                <td class="head2">Saldo acumulado</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td class="head2">Saldo vencido</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td class="head2">LÃƒÂ­nea de crÃƒÂ©dito</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Carga la librerÃƒÂ­a en ambiente de Testing -->
    <script src="https://static-content-qas.vnforapps.com/vTokenSandbox/js/checkout.js"></script>

    <script>
    // Selecciona todos los botones con la clase 'payButton'
    var buttons = document.querySelectorAll('.payButton');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // ObtÃƒÂ©n el monto del boton usando el atributo data-amount
            var monto = button.getAttribute('data-amount');

            // Configura el checkout con el monto especÃƒÂ­fico
            VisanetCheckout.configure({
                action: 'https://www.tudominio.com/respuesta', // URL de respuesta
                channel: 'paycard',
                merchantid: '456879852', // Codigo de comercio de prueba
                sessiontoken: '{{ $sessionToken }}', // Token generado desde Laravel
                amount: monto,
                purchasenumber: 'ORD' + Math.floor(Math.random() *
                1000000), // Ejemplo de numero de orden unico
                cardholdername: 'Juan',
                cardholderlastname: 'Perez',
                cardholderemail: 'juan@example.com',
                expirationminutes: '20',
                timeouturl: 'https://www.tudominio.com/timeout',
                merchantlogo: 'https://nerd.pe/wp-content/uploads/2025/02/logo_verde-1.png',
                merchantname: 'Mi Comercio',
                formbuttoncolor: button.style.backgroundColor,
                formbuttontext: 'Pagar ' + monto,
                formbackgroundcolor: '#fff',
                formbuttontextcolor: 'white'
            });

            // Abre el formulario de pago
            VisanetCheckout.open();
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
