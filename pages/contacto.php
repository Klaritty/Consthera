<?php
?>

<section id='contacto' class="bg-[#E8E0DC]">
  <div class="px-5 py-[3rem] lg:max-w-[900px] lg:mx-auto">
    <div class="mb-[2rem]">
      <h1 class="text-center mb-[2rem] font-belleza text-[#0A2A45] text-[30px] font-normal md:text-[60px]">CONTÁCTANOS</h1>
      <img class='w-[10rem] h-auto mx-auto' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg"/>
    </div>
    <div class="flex flex-col md:flex-row gap-[1rem] lg:gap-[3rem] md:h-[500px]">
      <div class="md:pt-[4rem] px-[2rem] flex flex-col mb-[2rem] md:w-1/2 bg-cover bg-no-repeat bg-center md:bg-[url('http://159.223.204.188/wp-content/themes/Consthera/assets/images/contact_frame.png')]">
        <div class="mb-[2rem]">
          <h3 class="text-center font-bold font-rosario text-[#0A2A45] md:text-[20px] ">¡TU BIENESTAR <br>COMIENZA AQUÍ! </h3>
          <p class="text-center px-[3rem] font-normal font-rosario text-[#0A2A45] md:text-[15px]">¡Conéctate al camino ahora!
Completa el formulario o escribe un mensaje de WhatsApp
.</p>
        </div>
        <div style="border-bottom: #BD9062 1px solid" class="mb-[2rem]"></div>
          <ol class="flex flex-col gap-[1rem]">
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_mail.svg' class="w-[2rem] h-[2rem]" alt="Correo">
              <a href="mailto:consthera4@gmail.com" target="_blank" class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">consthera4@gmail.com</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_ws.svg' class="w-[2rem] h-[2rem]" alt="Teléfono">
              <a href="https://wa.me/528141485521" target="_blank"  class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">(+52) 8141485521</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_ig.svg' class="w-[2rem] h-[2rem]" alt="instagram">
              <a href="https://www.instagram.com/consthera.psic/"  target="_blank" class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">@consthera.psic</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb.svg' class="w-[2rem] h-[2rem]" alt="Facebook">
              <a  href="https://www.facebook.com/profile.php?id=100063472513452" target="_blank" class="my-auto font-normal  font-rosario no-underline cursor-pointer" target="_blank"href="">@Consthera</a>
            </li>
          </ol>
      </div>
      <div class="md:hidden mb-[2rem]" style="border-bottom: 1px #BD9062 solid"></div>
      <div class="md:w-1/2">
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
      </div>
    </div>
  </div>
</section>
