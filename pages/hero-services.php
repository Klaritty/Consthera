<?php
?>
<section id="services-desktop" class="hidden bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_hero_back_desk.jpg');">
    <div class='pb-[6rem] pt-[9.6rem] container mx-auto'>
        <h1 class='text-center pb-[2rem] font-belleza text-[40px] md:text-[60px] text-white'>Nuestros Servicios</h1>
        <div class="w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
        <div class='pb-[4rem] flex justify-center items-center'>
            <h2 class='text-center mx-auto font-rosario text-[23px] w-[70%] text-white'>¡Reserva una sesión hoy mismo, estés donde estés! Ya sea en línea o de manera presencial en Monterrey, estamos aquí para ofrecerte apoyo en tu viaje hacia la sanación y el equilibrio con nuestras terapias exclusivas.
            </h2>
        </div>
    </div>
</section>

<section id="services-mobile" class="hidden bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_hero_back_mob.jpg');">
    <div class='pb-[6rem] pt-[3rem] container mx-auto'>
        <h1 class='text-center pb-[2rem] font-belleza text-[40px] md:text-[60px] text-white'>Nuestros Servicios</h1>
        <div class="w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
        <div class='pb-[4rem] flex justify-center items-center'>
            <h2 class='text-center mx-auto font-rosario text-[23px] w-[70%] text-white'>¡Reserva una sesión hoy mismo, estés donde estés! Ya sea en línea o de manera presencial en Monterrey, estamos aquí para ofrecerte apoyo en tu viaje hacia la sanación y el equilibrio con nuestras terapias exclusivas.
            </h2>
        </div>
    </div>
</section>

<script>
    function toggleSections() {
        const desktopSection = document.getElementById('services-desktop');
        const mobileSection = document.getElementById('services-mobile');

        if (window.innerWidth >= 768) {
            desktopSection.style.display = 'block';
            mobileSection.style.display = 'none';
        } else {
            desktopSection.style.display = 'none';
            mobileSection.style.display = 'block';
        }
    }

    // Initial check
    toggleSections();

    // Listen for window resize
    window.addEventListener('resize', toggleSections);
</script>
