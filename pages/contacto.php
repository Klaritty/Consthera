<?php
?>

<section class="bg-[#E8E0DC]">
  <div class="px-5 py-[3rem] lg:max-w-[900px] lg:mx-auto">
    <div class="mb-[3rem]">
      <h1 class="text-center mb-[1.5rem] font-belleza text-[#0A2A45] text-[30px] font-normal md:text-[60px]">CONTÁCTANOS</h1>
      <div style="border-bottom: 1px red solid">pleca</div>
    </div>
    <div class="flex flex-col md:flex-row">
      <div class="py-2 flex flex-col mb-[2rem] md:w-1/2">
        <div class="mb-[2rem]">
          <h3 class="text-center font-bold font-rosario text-[#0A2A45]">¡CONÉCTATE <br>CON TU BIENESTAR!</h3>
          <p class="text-center px-[3rem] font-normal font-rosario text-[#0A2A45]">Completa el formulario o contáctanos directamente para empezar tu evolución.</p>
        </div>
        <div style="border-bottom: #BD9062 1px solid" class="mb-[2rem]"></div>
          <ol class="">
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo_email.svg' class="w-[2rem] h-[2rem]" alt="Correo">
              <a class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">consthera4@gmail.com</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo_email.svg' class="w-[2rem] h-[2rem]" alt="Teléfono">
              <a class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">(+52) 8141485521</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo_email.svg' class="w-[2rem] h-[2rem]" alt="instagram">
              <a class="my-auto font-normal font-rosario no-underline cursor-pointer" href="" target="_blank">@consthera.psic</a>
            </li>
            <li class="flex gap-1 mb-[5px]">
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo_email.svg' class="w-[2rem] h-[2rem]" alt="Facebook">
              <a class="my-auto font-normal  font-rosario no-underline cursor-pointer" target="_blank"href="">@Consthera</a>
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
