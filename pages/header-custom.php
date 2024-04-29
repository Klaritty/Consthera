
  <div>
  <nav id="site-navigation"  class="navbar">
    <div class="logo">
      <a href="#">
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_klaritty.svg"
        alt="logo"> -->
        LOGO
      </a>
    </div>
    <div class='navbar__links'>
            <ul class="links font-custom">
              <li><a href="#" class='font-rosario font-bold'>About</a><span class='span'>|</span></li> 
                <li><a href="#" class='font-rosario font-bold '>Servicios</a><span class='span'>|</span></li> 
                <li><a href="#" class='mr-[1rem] font-rosario font-bold'>Testimonio</a><span class='span'>|</span></li> 
                <li><a href="#" class='font-rosario font-bold'>Contáctanos</a></li>
                <li><a href="#" class='font-rosario font-bold'>Reserva</a></li>
            </ul>
            <div class="social-icons">
              <div class=''>
                <a href=""  target="_blank">
                  <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_facebook-menu.svg"
                  alt="facebook"> -->
                  F
                </a>
                <a href="" target="_blank">
                  <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_instagram_menu.svg"
                  alt="instagram" target="_blank"> -->
                  I
              </a>
              </div>
            </div>
      </div>
      <div class='buttons'>
          <button class="menu-button open-menu">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button_menu.svg" alt="Menú"> -->
                    =
          </button>
          <button class="menu-button close-menu" style="display: none;" >
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button_menu_close.svg" alt="Menú"> -->
            X
          </button> 
      </div>
    </div>

  </nav>
  </div>
  
  <div id="slide-menu" class="slide-menu ">
    <ul class='mt-[3rem] mb-[2rem] font-custom text-[16px]'>
        <li><a href="#" >¿Por qué Klaritty?</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Testimonio</a></li>
        <li><a href="#">Contáctanos</a></li>
    </ul>
    <div class="social">
      <div class="social-item">
          <a  href="mailto:" target="_blank" class="icon-text">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_email.svg" alt="whatsapp">
              <p class='text-[16px] font-custom'>Consthera</p>
          </a>
      </div>
       <div class="social-item">
        <div class="icon-text flex flex-row items-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_whatsapp.svg" alt="WhatsApp">
        <div class="flex flex-col">
            <a href="#" target="_blank" class="text-[16px] text-white no-underline font-custom">NUMERO</a>
        </div>
    </div>
</div>
        <div class="social-item">
        <a href="#"target="_blank" class="icon-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_instagram.svg" alt="instagram">
                <p class='text-[18px] font-custom'>@Consthera</p>
            </a>
        </div>
        <div class="social-item">
        <a href="#" target="_blank" class="icon-text">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_facebook.svg" alt="instagram">
                <p class='text-[18px] font-custom'>@Consthera</p>
            </a>
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
  const gradientColor = 'linear-gradient(to bottom, #808080, transparent)';
  const solidColor = '#808080';

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
