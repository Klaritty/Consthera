<?php
/*
Template Name: idividual
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/FormStyles.css">
    <link rel="stylesheet"
        href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <?php include 'header-custom.php'; ?>
    <main id="individual">
        <section id='home' class=' bg-[#0A2A45]'>
            <div class='pb-[6rem] pt-[8rem] container mx-auto'>
                <h1 class='text-center pb-[2rem] font-belleza text-[60px] text-white'>Constelación familiar individual.
                </h1>
                <div class=" w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
                <div class='flex justify-center items-center'>
                    <p class='text-center mx-auto font-rosario text-[26px] w-[70%] text-white'>$600 MXN- 45 a 60 minutos
                        | Psic. Alma Solís</p>
                </div>
                <div class="buttons-services mt-[3rem]">
                    <button class='font-rosario text-[18px]'>RESERVA</button>
                </div>
            </div>
        </section>
        <section id='home'>
            <div class='pb-[6rem] pt-[2rem] container mx-auto'>
                <div class='pb-[4rem] flex flex-col items-center'>
                    <p class='text-center font-rosario w-[60%]'>Exploramos los sistemas familiares y personales para
                        identificar bloqueos específicos que afectan tu presente. Ya sea que se trate de relaciones
                        tensas, enfermedades recurrentes o patrones de comportamiento, trabajamos para devolver la
                        armonía a tu vida, te guiamos a través de ejercicios simbólicos para desentrañar cargas
                        emocionales.</p>
                    <br>
                    <p class='text-center font-rosario w-[60%]'>Ofrecemos una amplia gama de temas que pueden ser
                        constelados (o tratados), según tus necesidades, desde reconciliaciones familiares hasta la
                        gestión de síntomas físicos como dolores o enfermedades, estamos aquí para acompañarte en tu
                        viaje hacia la curación y la comprensión.</p>
                </div>
                <div class=" w-[45%] mx-auto border-black border-t-2 pb-[4rem]"></div>
                <div class='pb-[4rem]  flex flex-col items-center'>
                    <p class='text-center font-rosario w-[60%]'>"Desata el pasado para abrazar la paz presente, sanamos
                        relaciones, síntomas y patrones, guiándote hacia una vida plena."</p>
                </div>
                <div class='pb-[4rem]  flex flex-col items-center'>
                    <p class='text-center font-rosario w-[60%]'>En <strong>Consthera</strong>, entendemos que los
                        bloqueos emocionales y sistémicos pueden afectar todos los aspectos de tu vida, desde tus
                        relaciones hasta tu salud física y emocional. Al trabajar juntos te empoderamos para que puedas
                        liberarte del pasado y crear un futuro más brillante y armonioso.</p>
                </div>
            </div>
        </section>
        <section class="bg-gray-200 flex justify-center pb-[6rem] pt-[2rem] items-center">
            <p class='text-center font-rosario w-[60%]'>No esperes más para abrazar un presente lleno de posibilidades.
                ¡Programa tu sesión de Constelación Familiar Individual hoy mismo y comienza tu camino hacia una vida
                más plena y consciente!</p>
            <div class='container mx-auto'>
                <div class=" bg-gray-600 rounded-lg " style="width:30rem; height: 20rem;">
                    <div>
                        <p class="text-center text-gray-50">Aquí puedes agregar tu video más tarde</p>
                    </div>
                </div>
            </div>
        </section>
        <section class='pb-[6rem] pt-[2rem] items-center'>
            <div class=' ml-[10rem] container mx-auto'>
                <h1 class='text-left pb-[2rem] font-belleza text-[60px]'>REVIEWS</h1>
                <div class="lg:card flex flex-row justify-center md:flex-col items-center md:py-0 lg:py-0">
                    <div class='md:flex md:flex-col md:items-center'>
                        <div class="p-4 md:text-center md:w-[50%] ">
                            <p class="text-gray-700 font-rosario text-[12px] lg:text-[14px] ">“Trabajar en mis creencias
                                está muy cañón, invertir en cambiar creencias es lo mejor, gracias por estar
                                acompañándome en este camino.”</p>
                            <p>-Patricia </p>
                        </div>
                    </div>
                </div>
                <div class=" w-[45%] mx-auto border-black border-t-2"></div>
                <div class="lg:card flex flex-row justify-center md:flex-col items-center md:py-0 lg:py-0">
                    <div class='md:flex md:flex-col md:items-center'>
                        <div class="p-4 md:text-center md:w-[50%] ">
                            <p class="text-gray-700 font-rosario text-[12px] lg:text-[14px]">D“Me he sentido muy bien
                                haciendo esta terapia.”</p>
                            <p>-Estrella </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id='klaritty' class='py-[5rem] bg-[#e8eaee]'>
            <h1 class='text-black font-bold text-[2rem] font-custom text-center'>
                Otros servicios
            </h1>
            <div
                class="lg:max-w-[1020px]  lg:mb-[2rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-rows-1 gap-8 md:mt-[1rem] lg:container lg:mx-auto">
                <!-- lg:card--1 -->
                <div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem]'>
                        <div
                            class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
                        </div>
                    </div>
                    <div class='md:flex md:flex-col md:items-center'>
                        <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem]">
                            <h3
                                class="text-black font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética de casa y negocio.
                            </h3>
                            <p class="text-gray-700 text-[12px] lg:text-[14px]">Transformamos la energía de tu hogar o
                                negocio, te ayudamos a liberarte de energías negativas, entidades y emociones estancadas
                                para crear un espacio armonioso y vibrante.
                            </p>
                        </div>
                        <div class='pt-8'>
                    <a href='<?php echo esc_url( home_url( '/limpieza-energetica-de-casa-o-negocio/' ) ); ?>'
                        class=' font-rosario bg-transparent border no-underline border-gray-900 text-gray-900 py-3 px-5    rounded-full text-sm'>VER
                        MÁS</a>
                    <a href='#'
                        class=' font-rosario bg-[#BD9062] py-3 px-5 no-underline rounded-full text-white text-[14px]'>RESERVA</a>
                </div>
                    </div>
                </div>
                <div class="md:hidden w-[80%] ml-[2rem] border-black border-t-2 mt-[4rem]"></div>
                <!-- lg:card--2 -->
                <div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem]'>
                        <div
                            class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
                        </div>
                    </div>
                    <div class='md:flex md:flex-col md:items-center'>
                        <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-black  font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética a personas, animales y plantas.
                            </h3>
                            <p class="text-gray-700 text-[12px] lg:text-[14px]">Alineamos chakras, integramos emociones
                                pendientes y promovemos el bienestar físico, mental y emocional en personas, animales y
                                plantas.

                            </p>
                        </div>
                        <div class='pt-8'>
                    <a href='<?php echo esc_url( home_url( '/limpieza-energetica-a-personas-animales-o-plantas/' ) ); ?>'
                        class=' font-rosario bg-transparent border no-underline border-gray-900 text-gray-900 py-3 px-5    rounded-full text-sm'>VER
                        MÁS</a>
                    <a href='#'
                        class=' font-rosario bg-[#BD9062] py-3 px-5 no-underline rounded-full text-white text-[14px]'>RESERVA</a>
                </div>
                    </div>
                </div>
                <div class="md:hidden w-[80%] ml-[2rem] border-black border-t-2 mt-[4rem]"></div>
                <!-- lg:card--3 -->
                <div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
                    <div class=' lg:mt-[3rem]'>
                        <div
                            class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class='md:flex md:flex-col md:items-center'>
                        <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                            <h3
                                class="text-black  font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">
                                Limpieza energética de autos / transportes.
                            </h3>
                            <p class="text-gray-700 text-[12px] lg:text-[14px]">Canalizamos emociones y entidades que
                                pueden causar accidentes, fallas y descuidos en los vehículos, para tener viajes seguros
                                y armoniosos.
                            </p>
                        </div>
                        <div class='pt-8'>
                    <a href='<?php echo esc_url( home_url( '/limpieza-energetica-de-autos-transportes/' ) ); ?>'
                        class=' font-rosario bg-transparent border no-underline border-gray-900 text-gray-900 py-3 px-5    rounded-full text-sm'>VER
                        MÁS</a>
                    <a href='#'
                        class=' font-rosario bg-[#BD9062] py-3 px-5 no-underline rounded-full text-white text-[14px]'>RESERVA</a>
                </div>
                    </div>
                </div>
            </div>

        </section>
        <!--Footer-->
        <?php include 'footer.php'?>
    </main>
    <?php wp_footer(); ?>
</body>

</html>