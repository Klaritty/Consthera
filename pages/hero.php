<?php
?>
<section id="inicio-desktop" class="bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_hero_back_desk.jpg');">
    <div class='pb-[6rem] pt-[6rem] container mx-auto'>
        <img class='w-[10rem] h-[10rem] mb-[3rem] mx-auto' alt='consthera' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_star.svg" />
        <h1 class='text-center pb-[2rem] font-belleza text-[40px] mp:text-[60px] mx-auto w-[90%] mp:w-[70%] text-white'>Encuentra la sanación integral, el bienestar y la paz interior en Consthera.</h1>
        <div class="w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
        <div class='flex justify-center items-center'>
            <p class='text-center mx-auto font-rosario text-[23px] w-[80%] mp:w-[60%] text-white'>Bienvenido a un espacio de tranquilidad y crecimiento, donde te ayudamos a sanar, comprenderte y sentirte en armonía contigo mismo.
            </p>
        </div>
        <div class="buttons-services mt-[3rem]">
            <a href="https://wa.me/528141485521" class='font-rosario bg-[#BD9062] no-underline py-2 px-5 rounded-full text-white text-[14px]'>RESERVA UNA SESIÓN</a>
        </div>
    </div>
</section>

<section id="inicio-mobile" class="bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_hero_back_mob.jpg');">
    <div class='pb-[6rem] pt-[6rem] container mx-auto'>
        <img class='w-[10rem] h-[10rem] mb-[3rem] mx-auto' alt='consthera' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_star.svg"/>
        <h1 class='text-center pb-[2rem] font-belleza text-[40px] mp:text-[60px] mx-auto w-[90%] mp:w-[70%] text-white'>Encuentra la sanación integral, el bienestar y la paz interior en Consthera.</h1>
        <div class="w-[10%] mx-auto border-[#BD9062] border-t-2 mb-[2rem]"></div>
        <div class='flex justify-center items-center'>
            <p class='text-center mx-auto font-rosario text-[23px] w-[80%] mp:w-[60%] text-white'>Bienvenido a un espacio de tranquilidad y crecimiento, donde te ayudamos a sanar, comprenderte y sentirte en armonía contigo mismo.
            </p>
        </div>
        <div class="buttons-services mt-[3rem]">
            <a href="https://wa.me/528141485521" class='font-rosario bg-[#BD9062] no-underline py-2 px-5 rounded-full text-white text-[14px]'>RESERVA UNA SESIÓN</a>
        </div>
    </div>
</section>

<script>
    function toggleSections() {
        const desktopSection = document.getElementById('inicio-desktop');
        const mobileSection = document.getElementById('inicio-mobile');

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
