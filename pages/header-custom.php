
  <div>
  <nav id="site-navigation"  class="navbar">
    <div class="logo">
      <a href="<?php echo get_site_url(); ?>/#inicio">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_logo.svg"
        alt="logo">
      </a>
    </div>
    <div class='navbar__links'>
            <ul class="links font-custom">
               <li><a href='<?php echo esc_url( home_url( '/about-consthera/' ) ); ?>' class='font-rosario font-bold'>About</a><span class='span'>|</span></li> 
                <li><a href='<?php echo esc_url( home_url( '/nuestros-servicios/' ) ); ?>' class='font-rosario font-bold '>Servicios</a><span class='span'>|</span></li> 
                <li><a href="<?php echo get_site_url(); ?>/#testimonios" class='mr-[0.5rem] font-rosario font-bold'>Testimonio</a><span class='span'>|</span></li> 
                <li><a href="<?php echo get_site_url(); ?>/#klaritty" class='font-rosario font-bold'>Contáctanos</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#klaritty" class='font-rosario font-bold'>Reserva</a></li>
            </ul>
            <div class="social-icons">
              <div class='flex '>
                <a href="https://www.facebook.com/profile.php?id=100063472513452"  target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb_white.svg"
                  alt="facebook">
                  
                </a>
                <a href="https://www.instagram.com/consthera.psic/" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_ig_white.svg"
                  alt="instagram" target="_blank">
              </a>
              </div>
            </div>
      </div>
      <div class='buttons md:hidden'>
          <button class="menu-button open-menu">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button_menu.svg" alt="Menú">
          </button>
          <button class="menu-button close-menu" style="display: none;" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button_menu_close.svg" alt="Menú">
          </button> 
      </div>
    </div>

  </nav>
  </div>
  
  <div id="slide-menu" class="slide-menu ">
    <ul class='mt-[3rem] mb-[1rem] font-custom text-[16px]'>
      <li class='border-[#BD9062] border-b-2'><a  href='<?php echo esc_url( home_url( '/about-consthera/' ) ); ?>' class='font-rosario font-bold '>About</a></li> 
      <li class='border-[#BD9062] border-b-2'><a href='<?php echo esc_url( home_url( '/nuestros-servicios/' ) ); ?>' class='font-rosario font-bold '>Servicios</a></li> 
      <li class='border-[#BD9062] border-b-2'><a href="<?php echo get_site_url(); ?>/#testimonios" class='mr-[1rem] mb-4 font-rosario font-bold'>Testimonio</a></li> 
      <li class='border-[#BD9062] border-b-2'><a href="<?php echo get_site_url(); ?>/#klaritty" class='font-rosario font-bold'>Contáctanos</a></li>
    </ul>
<div class="social">
      <div class="social-item">
          <a  href="mailto:consthera4@gmail.com" target="_blank" class="icon-text">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_mail.svg" alt="whatsapp">
              <p class='text-[16px] font-custom'>consthera4@gmail.com</p>
          </a>
      </div>
       <div class="social-item">
        <div class="icon-text flex flex-row items-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_ws.svg" alt="WhatsApp">
        <div class="flex flex-col">
            <a href="https://wa.me/528141485521" target="_blank" class="text-[16px] text-white no-underline font-custom">(+52) 8141485521</a>
        </div>
    </div>
    </div>
        <div class="social-item">
        <a href="https://www.instagram.com/consthera.psic/"target="_blank" class="icon-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_ig.svg" alt="instagram">
                <p class='text-[18px] font-custom'>@Consthera</p>
            </a>
        </div>
        <div class="social-item">
        <a href="https://www.facebook.com/profile.php?id=100063472513452" target="_blank" class="icon-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb.svg" alt="instagram">
                <p class='text-[18px] font-custom'>@Consthera</p>
            </a>
        </div>
    </div>
    <div class='border-[#BD9062] border-b-2'></div>
    <div class="buttons-services mt-[3rem]">
        <a  href='<?php echo esc_url( home_url( '/#/' ) ); ?>' class='font-rosario bg-[#BD9062] no-underline py-3 px-5 rounded-full text-white text-[15px]'>RESERVA UNA SESIÓN</a>
      </div>
    </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
  const openButton = document.querySelector(".open-menu");
  const closeButton = document.querySelector(".close-menu");
  const slideMenu = document.getElementById("slide-menu");

  openButton.addEventListener("click", function() {
    slideMenu.classList.add("open");
    openButton.style.display = "none";
    closeButton.style.display = "inline-block";
  });

  closeButton.addEventListener("click", function() {
    slideMenu.classList.remove("open");
    closeButton.style.display = "none";
    openButton.style.display = "inline-block";
  });

  // Cerrar el menú cuando se hace clic fuera de él
  document.addEventListener("click", function(event) {
    if (!slideMenu.contains(event.target) && !openButton.contains(event.target)) {
      slideMenu.classList.remove("open");
      closeButton.style.display = "none";
      openButton.style.display = "inline-block";
    }
  });

  const menuLinks = document.querySelectorAll("#slide-menu a");
        menuLinks.forEach(function(link) {
            link.addEventListener("click", function() {
                slideMenu.classList.remove("open");
                closeButton.style.display = "none";
                openButton.style.display = "inline-block";
            });
        });

  // Verificar el tamaño de la ventana al cargar y redimensionar
  window.addEventListener("resize", checkWindowSize);
  checkWindowSize();

  function checkWindowSize() {
    if (window.innerWidth >= 770) {
      openButton.style.display = "none";
    } else {
      openButton.style.display = "inline-block";
    }
  }


  function closeMenu() {
    const slideMenu = document.getElementById("slide-menu");
    const closeButton = document.querySelector(".close-menu");
    slideMenu.classList.remove("open");
    closeButton.style.display = "none";
    openButton.style.display = "inline-block";
  }

  
});

document.addEventListener("DOMContentLoaded", function() {
  const navbar = document.querySelector('.navbar');
  const gradientColor = 'linear-gradient(to bottom, transparent, transparent)';
  const solidColor = '#0A2A45';

  window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
      navbar.style.transition = 'background 0.3s ease-in-out'; // Añadir transición
      navbar.style.background = solidColor;
    } else {
      navbar.style.transition = 'background 0.3s ease-in-out'; // Añadir transición
      navbar.style.background = gradientColor;
    }
  });
});

</script>
