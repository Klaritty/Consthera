<?php
/*
Template Name: energetica-casa
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Meta Description -->
<meta name="description" content="Descripción breve y atractiva de tu sitio web que describa de qué trata tu página principal.">

<!-- Meta Keywords -->
<meta name="keywords" content="palabras, clave, relacionadas, con, tu, contenido, separadas, por, comas">

<!-- Author -->
<meta name="author" content="Tu Nombre o Nombre de tu Empresa">

<!-- Open Graph Meta Tags para Redes Sociales -->
<meta property="og:title" content="Cosnthera">
<meta property="og:description" content="Descripción breve de tu página para redes sociales">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo get_permalink(); ?>">
<meta property="og:image" content="URL_de_la_imagen_destacada">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cosnthera">
<meta name="twitter:description" content="Descripción breve de tu página para Twitter">
<meta name="twitter:image" content="URL_de_la_imagen_destacada">

<!-- Google Verification -->
<meta name="google-site-verification" content="tu_codigo_de_verificacion_de_google">

<!-- Enlaces Canonical -->
<link rel="canonical" href="<?php echo get_permalink(); ?>">

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-36VC4346Y2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-36VC4346Y2');
</script>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/formStyles.css">
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">

<!-- Title -->
<title>Consthera</title>

<?php wp_head(); ?>
</head>

<body>
    <?php include 'header-custom.php'; ?>
    <main id="limpieza-energetica-casa-negocio">
        <section class=' hidden md:block bg-cover bg-no-repeat bg-center'
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/S_07_cover_back_desk.jpg');"'>
            <div class=' pb-[6rem] pt-[8rem] container mx-auto'>
            <h1 class='text-center pb-[2rem] font-belleza text-[30px] md:text-[60px] text-white'>LIMPIEZA ENERGÉTICA DE
                CASA Y NEGOCIO.
            </h1>
            <div class=" w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
            <div class='flex justify-center items-center'>
                <p class='text-center mx-auto font-rosario text-[17px] md:text-[26px] w-[70%] text-white'>$1700 MXN- 90
                    a
                    120 minutos</p>
            </div>
            <div class="buttons-services mt-[3rem]">
                <a href="https://wa.me/528141485521" target="_blank"
                    class='font-rosario bg-[#BD9062] py-2 px-4 md:py-3 md:px-5 no-underline rounded-full text-white text-[12px]'
                    style="letter-spacing: 2px">RESERVA UNA SESIÓN</a>
            </div>
            </div>
        </section>
        <section id='home'>
            <div class='py-[4rem] px-4 md:w-[50%] mx-auto'>
                <div class='mb-[2.5rem] flex flex-col gap-[3rem]'>
                    <p class='text-justify font-rosario'>Ofrecemos una solución integral para liberar tu espacio de
                        energías negativas y entidades no deseadas. Simplemente envíanos un croquis de la propiedad,
                        dirección y procederemos a limpiar el lugar energéticamente a distancia, ya sea que estés
                        presente o no.</p>
                    <p class='font-rosario text-justify'>
                        Nuestra técnica especializada elimina cualquier energía estancada que pueda estar afectando la
                        armonía de tu hogar o negocio. No importa si sientes una vibra extraña en el ambiente o
                        experimentas ruidos inexplicables, estamos aquí para ayudarte.
                    </p>
                </div>

                <div class='mb-[2.5rem] py-[2rem] flex flex-col items-center'
                    style="border-bottom: 1px solid black; border-top: 1px solid black">
                    <p class='font-rosario text-justify'>
                        "Renueva la energía de tu hogar. Elimina las energías negativas y estancadas para crear un
                        ambiente armonioso y lleno de vitalidad."
                    </p>
                </div>

                <div class='pb-[4rem]  flex flex-col gap-[3rem]'>
                    <p class='font-rosario text-justify'>Comienza a entrar a tu hogar o negocio y sentir una sensación
                        de ligereza y claridad en el aire. Experimenta una transformación que te permite disfrutar de un
                        ambiente positivo y lleno de vitalidad. ¡Deja que la energía positiva fluya libremente en tu
                        espacio!</p>
                    <p class="font-rosario text-justify">No esperes más para crear un entorno armónico y vibrante en tu
                        casa o negocio. ¡Contáctanos hoy mismo para programar tu sesión de Limpieza Energética y
                        comienza a disfrutar de los beneficios de un espacio positivo.</p>
                </div>

                <!--video-->
                <!-- <div class="bg-gray-600" style="width:100%; height: 20rem;">
                    <div>
                        <p class="text-center text-gray-50">Aquí puedes agregar tu video más tarde</p>
                    </div>
                </div> -->
            </div>
        </section>

        <section class='items-center bg-[#e8eaee]'>
            <div class="py-[3rem] px-4 md:w-[50%] mx-auto">
                <h1 class='mb-[2rem] text-[#0A2A45] font-belleza text-[30px] md:text-[60px] text-center'>REVIEWS</h1>
                <div class="mb-[2rem]">
                    <div class="flex flex-col gap-[0.4rem]">
                        <img src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png" alt='pleca'>
                        <p class="font-rosario  italic font text-center px-[3rem]">
                            "Los ruidos raros en mi casa dejaron de sonar"
                        </p>
                        <img class="transform rotate-180" alt='pleca'
                            src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                    </div>
                    <p class="text-center text-[13px] font-semibold mt-[-10px]">María</p>
                </div>
                <div>
                    <div class="flex flex-col gap-[1rem]">
                        <img src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png" alt='pleca'>
                        <p class="font-rosario  italic font text-center px-[3rem]">
                            "Gracias por la limpieza, poco a poco los clientes van subiendo"
                        </p>
                        <img class="transform rotate-180" alt='pleca'
                            src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                    </div>
                    <p class="text-center text-[13px] font-semibold mt-[-10px]">Alejandro</p>
                </div>
        </section>

        <section>
            <div class='bg-cover bg-no-repeat bg-center py-[3rem]'
                style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_back_desk.jpg');"">
            <div class='container mx-auto'>
                <h1 class='text-[#EBDBCE] font-semibold font-belleza text-[30px] md:text-[60px] text-center mb-[1.5rem]'>RESERVA UNA SESIÓN AHORA</h1>
                <img class='w-[10rem] h-auto mx-auto pt-[1rem]' alt='pleca'
                     src=" <?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
            <div class=" mx-auto ">
                <div class="flex flex-col md:flex-row justify-center items-center  md:py-0 lg:py-0">
                    <div class="w-full md:w-1/2">
                        <div class="p-[3rem] text-center md:text-left">
                            <h2
                                class="text-[#EBDBCE] font-belleza text-[28px] md:text-[35px] font-semibold mb-[1.5rem]">
                                LIMPIEZA ENERGÉTICA DE CASA Y NEGOCIO.
                            </h2>
                            <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[1.5rem]">
                                Transformamos la energía de tu hogar o negocio, te ayudamos a liberarte de energías
                                negativas, entidades y emociones estancadas para crear un espacio armonioso y vibrante.
                            </p>
                            <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[2rem]">$1700 MXN- 90 a
                                120 minutos | Terapeuta Alma Solís</p>
                            <a href="https://wa.me/528141485521" target="_blank"
                                class='font-rosario bg-[#BD9062] py-3 px-5 no-underline rounded-full text-white text-[14px]'
                                style="letter-spacing: 1px">RESERVA AHORA</a>
                        </div>
                    </div>
                    <div class='hidden md:block ml-[4rem] mr-[4rem]'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pleca_vertical.png" alt="pleca"
                            class=' h-auto rounded-full' />
                    </div>
                    <div class="w-full md:w-[50%] ">
                        <div class='mt-[2rem] md:mt-0 flex items-center justify-center'>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                                alt="reserva" class='object-cover  w-[65%] md:w-[24%] absolute ' />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_img_desk.jpg"
                                alt="reserva" class='w-[60%] h-auto rounded-full relative ' />
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id='servicios' class='py-[5rem] bg-[#e8eaee]'>
            <h1 class='text-[#0A2A45] font-semibold font-belleza  text-[30px] md:text-[60px]  text-center'>
                Nuestros Servicios
            </h1>
            <img class='w-[10rem] h-auto mx-auto pt-[2rem]' alt='pleca'
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
            <div class="lg:max-w-[1020px]  grid grid-cols-1 md:grid-cols-3 gap-8 lg:container lg:mx-auto">
                <div class="lg:card flex  justify-center flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem] flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="servicio5" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_serv_5.jpg"
                            alt="servivio5" class='object-cover rounded-full w-[60%] relative' />
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class="md:p-4 text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-[#0A2A45]  font-rosario text-[20px] lg:text-[28px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Sanación con <br> maestros.</h3>
                            </h3>
                            <p class="text-[#0A2A45] font-rosario text-[12px] lg:text-[14px]">
                                Invocamos seres ascendidos,
                                gracias a ello podemos apoyar en la cura de patologías como salud, amor, comunicación,
                                economía
                                y unidad familiar.
                            </p>
                        </div>
                        <div class='pt-[1rem] md:pt-[3rem] flex flex-row'>
                            <a href='<?php echo esc_url( home_url( '/sanacion-con-maestros/' ) ); ?>'
                                class=' font-rosario bg-transparent border  border-gray-900 text-gray-900 py-2 px-4 md:py-3 md:px-5  no-underline rounded-full  text-[12px]'>VER
                                MÁS</a>
                            <a href="https://wa.me/528141485521" target="_blank"
                                class=' font-rosario bg-[#BD9062] py-2 px-4 md:py-3 md:px-5 no-underline rounded-full text-white text-[12px]'>RESERVA</a>
                        </div>
                    </div>
                </div>

                <div class="lg:card flex  justify-center flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem] flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="servicio8" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicios_thumb_img_08.jpg"
                            alt="servicio8" class='object-cover rounded-full w-[60%] relative' />
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class="md:p-4 text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-[#0A2A45]  font-rosario text-[20px]  lg:text-[28px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética a <br> personas, animales y plantas.</h3>
                            <p class="text-[#0A2A45] font-rosario  text-[12px] lg:text-[14px]">
                                Alineamos chakras, integramos emociones pendientes y promovemos el bienestar físico,
                                mental y emocional en personas, animales y plantas.
                            </p>
                        </div>
                        <div class='pt-[3rem] flex flex-row'>
                            <a href="<?php echo esc_url(home_url('/limpieza-energetica-a-personas-animales-o-plantas/')); ?>"
                                class=' font-rosario bg-transparent border  border-gray-900 text-gray-900 py-2 px-4 md:py-3 md:px-5  no-underline rounded-full  text-[12px]'>VER
                                MÁS</a>
                            <a href="https://wa.me/528141485521" target="_blank"
                                class=' font-rosario bg-[#BD9062] py-2 px-4 md:py-3 md:px-5 no-underline rounded-full text-white text-[12px]'>RESERVA</a>
                        </div>
                    </div>
                </div>

                <div class="lg:card flex  justify-center flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem] flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="servicio9" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicios_thumb_img_09.jpg"
                            alt="servicio9" class='object-cover rounded-full w-[60%] relative' />
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class="md:p-4 text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-[#0A2A45] font-rosario text-[20px]  lg:text-[28px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética de autos / transportes. </h3>
                            <p class="text-[#0A2A45] font-rosario  text-[12px] lg:text-[14px]">
                                Canalizamos emociones y entidades que pueden causar accidentes, fallas y descuidos en
                                los vehículos, para tener viajes seguros y armoniosos.
                            </p>
                        </div>
                        <div class='pt-[1rem] md:pt-[3rem] flex flex-row'>
                            <a href="<?php echo esc_url(home_url('/limpieza-energetica-de-autos-transportes/')); ?>"
                                class=' font-rosario bg-transparent border  border-gray-900 text-gray-900 py-2 px-4 md:py-3 md:px-5  no-underline rounded-full  text-[12px]'>VER
                                MÁS</a>
                            <a href="https://wa.me/528141485521" target="_blank"
                                class=' font-rosario bg-[#BD9062] py-2 px-4 md:py-3 md:px-5 no-underline rounded-full text-white text-[12px]'>RESERVA</a>
                        </div>
                    </div>
                </div>

            </div>
            <img class='w-[10rem] h-auto mx-auto pt-[2rem]' alt='pleca'
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
            <div class="buttons-services mt-[3rem]">
                <a href='<?php echo esc_url( home_url( '/nuestros-servicios/' ) ); ?>'
                    class='font-rosario bg-[#BD9062] no-underline py-2 px-5 rounded-full text-white text-[14px]'>MÁS
                    SERVICIOS
                </a>
            </div>
        </section>
        <?php include 'contacto.php'?>
        <!--Footer-->
        <?php include 'footer.php'?>
        <!--button to up -->
        <?php include 'scroll-to-up.php'?>
    </main>
    <?php wp_footer(); ?>
    <!--button to up -->
    <?php include 'scroll-to-up.php'?>
</body>

</html>