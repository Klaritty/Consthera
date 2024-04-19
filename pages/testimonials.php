<section id="testimonio" class='bg-[#e8eaee]'>
    <div class='px-5 py-[3rem] container mx-auto'>
        <h1 class='mb-[3rem] text-black font-bold text-[2rem] font-custom text-center'>Testimonios</h1>
<!--        ControlsDesktop-->
        <div class="controls-container-swiper w-full flex justify-between hidden md:flex">
            <div class="select-prev swiper-button-prev"></div>
            <div class="select-next swiper-button-next"></div>
        </div>
<!--        -->
        <div class='swiper-container md:flex overflow-hidden justify-center md:mx-[200px] text-center'>
            <div class="swiper-wrapper">
                <?php
                $slides = array(
                    array(
                        'id' => 1,
                        'testimony' => 'Hemos tenido la oportunidad de coincidir en distintos proyectos con Maruchan y en todos ellos hemos quedado muy satisfechos con los resultados, no solo por su nivel de trabajo y profesionalismo, si no por el extra que cada integrante del equipo le pone e imprime en cada etapa del proyecto, siempre buscando el cómo sí. Hemos recorrido eventos, campañas y el reciente refresh de nuestro sitio oficial en México, en cada proyecto se puede ver la huella Klaritty con entusiasmo y un excelente liderazgo.
                        ',
                        'imagen' => 'https://klaritty.com/wp-content/themes/Klaritty/assets/images-g/quotes_img-01.png',

                        'name' => 'Michelle Ruiz, ',
                        'position' => 'Directora de Marketing',
                    ),
                );

                $pleca = 'https://klaritty.com/wp-content/themes/Klaritty/assets/images/quote_pleca.png';
                $plecaCierre = 'https://klaritty.com/wp-content/themes/Klaritty/assets/images/quote_pleca_cierre.png';

                foreach ($slides as $slide) {
                    echo '<div class="swiper-slide">';
                    echo '<div class="slide-content">';
                    echo '<img class="" src="' . $pleca . '" alt="'  . '" >';
                    echo '<p class=" flex justify-center items-center md:h-[200px]">' . $slide['testimony'] . '<p>';
                    echo '<img class="" src="' . $plecaCierre . '" alt="'  . '" >';
                    echo '<div  class="mt-[3rem]">';
                    echo '<img class="w-[20%] mx-auto mb-[2rem] md:w-[10%] image-perfil" src="' . $slide['imagen'] . '" alt="'  . '" >';
                    echo '<p>' . $slide['name'] . '<span class="font-bold">' . $slide['position'] . '</span>' . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
<!--        ControlsMobile-->
        <div class='flex justify-center mt-[3rem] gap-3 md:hidden'>
            <div class="select-prev swiper-button-prev-edit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="select-next swiper-button-next-edit"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Klaritty/node_modules/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.select-next',
            prevEl: '.select-prev',
        },
        spaceBetween: 0,
        loop: true,
        slidesPerView: 1,
    });
</script>
