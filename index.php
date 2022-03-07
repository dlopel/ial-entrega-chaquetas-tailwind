<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <!-- SEO TAGS -->
    <title>IAL | Recojo de Chaquetas </title>
    <meta name="description" content="Inscripción para la entrega de chaquetas de IAL.">
    <link rel="canonical" href="https://www.ial.edu.pe/graduacion/">

    <meta name="Resource-type" content="Document" />
    <meta http-equiv="X-UA-Compatible" content="IE=5; IE=6; IE=7; IE=8; IE=9; IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="https://www.ial.edu.pe/isotipo.png">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/base.css<?php echo '?rand=' . rand(); ?>">

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-color': 'var(--primary-color)',
                        'secondary-color': 'var(--secondary-color)'
                    }
                }
            }
        }
    </script> 
    <style type="text/tailwindcss">
        @tailwind components;
        @tailwindcss utilities;

        @layer utilities {
          .pop-reg {
            font-family: 'PopRegular';
          }
          .pop-med {
            font-family: 'PopMedium';
          }
          .pop-sem {
            font-family: 'PopSemiBold';
          }
          .pop-bol {
            font-family: 'PopBold';
          }
          .pop-ext {
            font-family: 'PopExtra';
          }
        }
        @layer components {
          .wrapper {
            @apply max-w-[1400px] w-full px-4 mx-auto;
          }
          
        }
    </style>

</head>

<body>
    <header class="bg-[url('assets/img/banner_chaquetas_pequeno.jpg')] bg-cover lg:h-[700px] md:bg-[url('assets/img/banner_chaquetas_largo.jpg')] py-12">
        <div class="wrapper relative h-full flex flex-col items-center md:justify-end md:items-start text-white">
            <div class="mb-16 md:ml-auto">
                <img src="assets/img/logo.png" alt="instituto tecnologico arzobispo loayza" width="88" height="115">
            </div>
            <h1 class="text-[2rem] text-center lg:text-[2.75rem] leading-tight mb-[100px] pop-bol">
                <span class="text-[color:var(--secondary-color)]">LOS PROFESIONALES</span> <br>
                DEL SECTOR SALUD <br>
                <span class="text-[color:var(--secondary-color)]">SON CADA VEZ MÁS</span> <br>
                REQUERIDOS <img src="assets/img/ico_celeteste_flecha-derecha.png" height="32" width="32" class="inline">
            </h1>
            <div class="flex flex-col">
                <span class="pop-med text-[1.25rem] lg:text-[1.75rem] text-center text-secondary-color tracking-[.35em]">REGISTRO DE</span>
                <span class="pop-bol text-center text-2xl lg:text-3xl py-1 px-6 bg-secondary-color rounded-full">ENTREGA DE CHAQUETA</span>
            </div>
        </div>
    </header>

    <section class="bg-[url('assets/img/bg-animado-ligth.png')] bg-cover py-[100px]">
        <div class="wrapper flex flex-col gap-y-12">
                <h2 class="pop-ext text-center text-4xl lg:text-[3.5rem]">
                    <div class="text-primary-color mb-4">LLENA EL FORMULARIO E INSCRÍBETE</div>
                    <div class="text-secondary-color">PARA ENTREGA DE CHAQUETA</div>
                </h2>

                <form class="grid gap-y-8 md:grid-cols-2 md:gap-x-32" method="post" name="form_inscripcion" id="form_inscripcion">
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_usuario.png" width="55" height="55">
                        <input name="nombres" type="text" placeholder="Nombres:" id="nombres" required>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_usuario.png" width="55" height="55">
                        <input name="apellidos" type="text" placeholder="Apellidos:" id="apellidos" required>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_documento.png" width="55" height="55">
                        <input name="dni" type="tel" minlength="8" maxlength="9" placeholder="DNI/CE:" id="dni" required>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_whatsapp.png" width="55" height="55">
                        <input name="celular" type="tel" minlength="9" maxlength="9" placeholder="Whatsapp:" id="celular" required>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_arroba.png" width="55" height="55">
                        <input name="correo" id="correo" type="email" placeholder="Correo electrónico:" required>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_ubicacion.png" width="55" height="55">
                        <select name="sede" id="sede" required="">
                            <option value="" disabled selected>Sede de recojo:</option>
                            <option value="milagros">Clínica Señor de los Milagros (Av. Alfonso ugarte 1061)</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_signo_corazon.png" width="55" height="55">
                        <select name="carrera" id="carrera" required="">
                            <option value="" disabled selected>Carrera:</option>
                            <option value="Enfermeria">Enfermeria Técnica</option>
                            <option value="Farmacia">Farmacia Técnica</option>
                            <option value="Fisioterapia">Fisioterapia</option>
                            <option value="Laboratio">Laboratorio Clínico</option>
                            <option value="Protesis">Prótesis Dental</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <img src="./assets/img/ico_azul_polo.png" width="55" height="55">
                        <select name="talla" id="talla" required="">
                            <option value="" disabled selected>Talla:</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                </form>

                <div>
                    <div class="inscription__auth">
                        <input name="chbx_confirmarcion" type="checkbox" id="chbx_confirmarcion" class="chk" value="" />
                        <span> Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar mis datos para comunicarse conmigo y entregarme la información solicitada.</span>
                    </div>
                </div>
                <div class="flex justify-center gap-y-6">
                    <button class="button-big" id="btn_registrar">REGISTRARSE</button>
                    <div class="lds-default lds-default_hidden" id="lds-default">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
        </div>
    </section>

    <footer class="bg-primary-color py-16">
        <div class="wrapper">
            <h2 class="text-white text-3xl lg:text-5xl pop-ext mb-8">CONTÁCTANOS</h2>
            <ul class="footer-list">
                <li>
                    <img src="assets/img/ico_blanco_reloj.png" height="55" width="55"> Lunes a Viernes 8:00 - 17:00 / Sábados 8:00 - 13:00
                </li>
                <li>
                    <img src="assets/img/ico_blanco_ubicacion.png" height="55" width="55"> Pasaje Nueva Rosita 140, Cercado de Lima
                </li>
                <li>
                    <img src="assets/img/ico_blanco_telefono.png" height="55" width="55"> (01) 330 9090
                </li>
            </ul>
        </div>
    </footer>

    <!-- JQUERY -->
    <script src="libraries/jquery/jquery-3.6.0.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/base.js<?php echo '?rand=' . rand(); ?>"></script>

</body>

</html>