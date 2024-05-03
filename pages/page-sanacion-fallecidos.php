<?php
/*
Template Name: fallecidos
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/FormStyles.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>
<body>
<?php include 'header-custom.php'; ?>
<main id="individual">
    <section id='home' class=' bg-[#0A2A45]'>
        <div class='pb-[6rem] pt-[8rem] container mx-auto'>
            <h1 class='text-center pb-[2rem] font-belleza text-[60px] text-white'>Nombre de servicio</h1>
            <div class=" w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
            <div class='flex justify-center items-center'>
                <p class='text-center mx-auto font-rosario text-[26px] w-[70%] text-white'>1,500$ MXN - 1 hora | Psic. Alma Solis</p>
            </div>
            <div class="buttons-services mt-[3rem]">
                 <button class='font-rosario text-[18px]'>RESERVA</button>
            </div>
        </div>
    </section>
    <section id='home' >
    <div class='pb-[6rem] pt-[2rem] container mx-auto'>
        <div class='pb-[4rem] flex flex-col items-center'>
            <p class='text-center font-rosario w-[60%]'><strong>Consthera</strong> surge de un viaje personal de autodescubrimiento y transformación que abarca generaciones. Hace 4 años, en el último tramo de su diplomado en Constelaciones Familiares nuestra fundadora Alma se dio cuenta de que su propósito trascendía la psicología convencional. Aunque inicialmente la idea de estudiar psicología había sido desaprobada por su padre, él la llevó a esta experiencia de Constelaciones Familiares que marcó un punto de inflexión. No solo fue un despertar para ella, sino también para su legado ancestral y su comunidad.</p>
            <br>
            <p class='text-center font-rosario w-[60%]'>Durante años, había experimentado visiones y mensajes de seres queridos fallecidos y entidades de otras dimensiones, sin comprender completamente su significado o propósito. Gracias al estar en una comida con amigos y la repentina presencia de un familiar fallecido de ellos, la llevaron a reconocer el valor de su don, potencial y propósito para ayudar a otros. Al transmitir mensajes de sus fallecidos a sus amigos vivos, se dio cuenta del poder de la comunicación entre los dos mundos. Esto la inspiró a explorar más a fondo su conexión con el mundo espiritual y a desarrollar las terapias integrales que hoy ofrecemos en <strong>Consthera</strong>.</p>
        </div>
        <div class=" w-[45%] mx-auto border-black border-t-2 pb-[4rem]"></div>
        <div class='pb-[4rem]  flex flex-col items-center'>
            <p class='text-center font-rosario w-[60%]'><strong>Consthera</strong> surge de un viaje personal de autodescubrimiento y transformación que abarca generaciones. Hace 4 años, en el último tramo de su diplomado en Constelaciones Familiares nuestra fundadora Alma se dio cuenta de que su propósito trascendía la psicología convencional. Aunque inicialmente la idea de estudiar psicología había sido desaprobada por su padre, él la llevó a esta experiencia de Constelaciones Familiares que marcó un punto de inflexión. No solo fue un despertar para ella, sino también para su legado ancestral y su comunidad.</p>
        </div>
    </div>
</section>
<section class="bg-gray-200 flex justify-center pb-[6rem] pt-[2rem] items-center">
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
                    <p class="text-gray-700 font-rosario text-[12px] lg:text-[14px] ">Abarcar sesiones grupales, individuales y de pareja. Identificar dinámicas familiares que obstaculizan relaciones presentes, desentrañar patrones disfuncionales y guiar hacia soluciones al acceder al inconsciente para sanar y liberar emociones bloqueadas.</p>
                </div>
            </div>
        </div>
        <div class=" w-[45%] mx-auto border-black border-t-2"></div>
        <div class="lg:card flex flex-row justify-center md:flex-col items-center md:py-0 lg:py-0">
            <div class='md:flex md:flex-col md:items-center'>
                <div class="p-4 md:text-center md:w-[50%] ">
                    <p class="text-gray-700 font-rosario text-[12px] lg:text-[14px]">Dominar la canalización con guías y seres espirituales. Identificar mensajes auténticos y expandir la conciencia hacia dimensiones superiores, reduciendo el ruido mental y conectando con la luz interior para ayudar a otros.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id='klaritty' class='py-[5rem] bg-[#e8eaee]'>
  <h1 class='text-black font-bold text-[2rem] font-custom text-center'>
   otros servicios
  </h1>
  <div class="lg:max-w-[1020px]  lg:mb-[2rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-rows-1 gap-8 md:mt-[1rem] lg:container lg:mx-auto">
    <!-- lg:card--1 -->
    <div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
        <div class=' lg:mt-[3rem]'>
            <div class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
            </div>
        </div>
        <div class='md:flex md:flex-col md:items-center'>
            <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem]">
                <h3 class="text-black font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">servicio 1 
                </h3>
                <p class="text-gray-700 text-[12px] lg:text-[14px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio corrupti, velit reiciendis nesciunt veritatis culpa incidunt optio iste ducimus nam vitae deserunt ea rem consectetur dolores id delectus in beatae?.</p>
            </div>
        </div>
    </div>
    <div class="md:hidden w-[80%] ml-[2rem] border-black border-t-2 mt-[4rem]"></div>
<!-- lg:card--2 -->
    <div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
        <div class=' lg:mt-[3rem]'>
            <div class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
            </div>
        </div>
        <div class='md:flex md:flex-col md:items-center'>
            <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                <h3 class="text-black  font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">servicio 2</h3>
                    <p class="text-gray-700 text-[12px] lg:text-[14px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem rem exercitationem eos, ea laudantium dolores nostrum pariatur laborum blanditiis aliquid ab totam eum. Iste delectus similique vel veniam eius beatae!</p>
                </div>
        </div>
    </div>
    <div class="md:hidden w-[80%] ml-[2rem] border-black border-t-2 mt-[4rem]"></div>
<!-- lg:card--3 -->
<div class="lg:card flex flex-row justify-center md:flex-col items-center  md:py-0 lg:py-0">
        <div class=' lg:mt-[3rem]'>
            <div class="bg-black rounded-full w-24 h-24 md:w-[8rem] md:h-[8rem] flex items-center justify-center">
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_bullet_2.svg" alt="facebook" class='w-[70%]' /> -->
            </div>
        </div>
        <div>
        </div>
        <div class='md:flex md:flex-col md:items-center'>
            <div class="p-4 md:text-center w-[100%] md:w-[75%] lg:w-full md:h-[12rem] ">
                <h3 class="text-black  font-custom text-[17px] md:text-[14px] lg:text-xl font-semibold mb-2 lg:mt-[1rem] lg:mb-[1rem]">servicio 3.</h3>
                    <p class="text-gray-700 text-[12px] lg:text-[14px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, laudantium rerum veritatis odit vel aut! Exercitationem impedit ab tenetur dolor amet necessitatibus quae cumque, laudantium iste odio, voluptates, officiis totam!</p>
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






