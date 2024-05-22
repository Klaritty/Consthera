<?php
/*
Template Name: espiritual
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
    <main id="sanacion-espiritual-guias">
        <section id='home' class=' hidden md:block bg-cover bg-no-repeat bg-center'
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/S_03_cover_back_desk.jpg');"'>
            <div class=' pb-[6rem] pt-[8rem] container mx-auto'>
            <h1 class='text-center pb-[2rem] font-belleza text-[30px] md:text-[60px] text-white'>SANACION CON GUÍAS</h1>
            <div class=" w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
            <div class='flex justify-center items-center'>
                <p class='text-center mx-auto font-rosario text-[17px] md:text-[26px] w-[70%] text-white'>$1700 MXN- 60
                    a 90 minutos</p>
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
                    <p class='text-justify font-rosario'>Te ofrecemos una experiencia transformadora. Este servicio te
                        brinda la oportunidad de conectar con tus guías espirituales y maestros ascendidos para
                        encontrar respuestas profundas, sanar el alma y liberarte de bloqueos emocionales y energéticos
                        para llevarte a un estado de paz y plenitud.</p>
                    <p class='font-rosario text-justify'>
                        Explora el vasto universo de tu ser interior y descubre la presencia constante de tus guías y
                        maestros espirituales. A través de técnicas de canalización y meditación guiada, te sumerges en
                        un viaje de autoconocimiento y sanación espiritual.
                    </p>
                </div>

                <div class='mb-[2.5rem] py-[2rem] flex flex-col items-center'
                    style="border-bottom: 1px solid black; border-top: 1px solid black">
                    <p class='font-rosario text-justify'>
                        "Descubre la plenitud conectando con tus guías y maestros. Una guía hacia
                        respuestas profundas y una alma sanada, para que avances con confianza hacia tu mejor versión."

                    </p>
                </div>

                <div class='pb-[4rem]  flex flex-col gap-[3rem]'>
                    <p class='font-rosario text-justify'>Obtén acceso directo a la sabiduría y la guía de seres superiores que están siempre dispuestos a ayudarte en tu camino. Al conectarte con tus guías, podrás recibir orientación sobre temas personales, profesionales y espirituales, así como sanar traumas del pasado y encontrar respuestas a preguntas profundas sobre tu vida y tu propósito.</p>
                    <p class="font-rosario text-justify">No esperes más para iniciar este viaje de descubrimiento y transformación espiritual. ¡Reserva tu sesión de Sanación con Guías hoy mismo y comienza a experimentar la sabiduría!</p>
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
                        <img src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                        <p class="font-rosario  italic font text-center px-[3rem]">
                        "Muchas gracias por ayudarme a conectar con mi guía y transmitirme lo que él quería que supiera en este momento de mi vida" 
                        </p>
                        <img class="transform rotate-180"
                            src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                    </div>
                    <p class="text-center text-[13px] font-semibold mt-[-10px]">Gloria </p>
                </div>
                <div>
                    <div class="flex flex-col gap-[1rem]">
                        <img src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                        <p class="font-rosario  italic font text-center px-[3rem]">
                        "Que bello que tú hayas podido ver a mi guía, ahora yo también puedo sentir su presencia y comunicarme con ella" 
                        </p>
                        <img class="transform rotate-180"
                            src="http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png">
                    </div>
                    <p class="text-center text-[13px] font-semibold mt-[-10px]">Teresa</p>
                </div>
        </section>

        <section>
            <div class='bg-cover bg-no-repeat bg-center py-[3rem]'
                style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_back_desk.jpg');"">
            <div class='container mx-auto'>
                <h1 class='text-[#EBDBCE] font-semibold font-belleza text-[30px] md:text-[60px] text-center mb-[1.5rem]'>RESERVA UNA SESIÓN AHORA</h1>
                <img class='w-[10rem] h-auto mx-auto pt-[1rem]'
                     src=" <?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
            <div class=" mx-auto ">
                <div class="flex flex-col md:flex-row justify-center items-center  md:py-0 lg:py-0">
                    <div class="w-full md:w-1/2">
                        <div class="p-[3rem] text-center md:text-left">
                            <h2
                                class="text-[#EBDBCE] font-belleza text-[28px] md:text-[35px] font-semibold mb-[1.5rem]">
                                CONSTELACIÓN CON GUÍAS
                            </h2>
                            <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[1.5rem]">
                            Te conectamos con tu guía espiritual (la persona que no ves pero te acompaña en el camino). Solicitamos orientación sobre algún bloqueo que necesite mayor claridad. 
                            </p>
                            <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[2rem]">$1700 MXN - 45 a 90 minutos | Terapeuta Alma Solís</p>
                            <a href="https://wa.me/528141485521" target="_blank"
                                class='font-rosario bg-[#BD9062] py-3 px-5 no-underline rounded-full text-white text-[14px]'
                                style="letter-spacing: 1px">RESERVA AHORA</a>
                        </div>
                    </div>
                    <div class='hidden md:block ml-[4rem] mr-[4rem]'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pleca_vertical.png" alt=""
                            class=' h-auto rounded-full' />
                    </div>
                    <div class="w-full md:w-[50%] ">
                        <div class='mt-[2rem] md:mt-0 flex items-center justify-center'>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                                alt="facebook" class='object-cover  w-[65%] md:w-[24%] absolute ' />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_serv_3.jpg"
                                alt="" class='w-[60%] h-auto rounded-full relative ' />
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
            <img class='w-[10rem] h-auto mx-auto pt-[2rem]'
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
            <div class="lg:max-w-[1020px]  grid grid-cols-1 md:grid-cols-3 gap-8 lg:container lg:mx-auto">
                <div class="lg:card flex  justify-center flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem] flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="facebook" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicios_thumb_img_07.jpg"
                            alt="facebook" class='object-cover rounded-full w-[60%] relative' />
                    </div>
                    <div class='flex flex-col items-center'>
                        <div class="md:p-4 text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-[#0A2A45]  font-rosario text-[20px] lg:text-[28px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética <br> de casa y negocio. </h3>
                            <p class="text-[#0A2A45] font-rosario text-[12px] lg:text-[14px]">
                                Transformamos la energía de tu hogar o negocio, te ayudamos a liberarte de energías
                                negativas, entidades y emociones estancadas para crear un espacio armonioso y vibrante.
                            </p>
                        </div>
                        <div class='pt-[1rem] md:pt-[3rem] flex flex-row'>
                            <a href="<?php echo esc_url(home_url('/limpieza-energetica-de-casa-o-negocio/')); ?>"
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
                            alt="facebook" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicios_thumb_img_08.jpg"
                            alt="facebook" class='object-cover rounded-full w-[60%] relative' />
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
                            alt="facebook" class='object-cover  w-[30%]  md:w-[14%] absolute' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/servicios_thumb_img_09.jpg"
                            alt="facebook" class='object-cover rounded-full w-[60%] relative' />
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
            <img class='w-[10rem] h-auto mx-auto pt-[2rem]'
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