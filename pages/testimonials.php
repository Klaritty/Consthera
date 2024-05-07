<section id="testimonios" class='bg-[#E8E0DC]'>
    <div class='px-5 py-[3rem] container mx-auto'>
        <h1 class='mb-[1rem] text-[#0A2A45] font-bold font-belleza  text-[30px] md:text-[60px] text-center'>Testimonios</h1>
        <img class='w-[10rem] h-auto mx-auto ' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg"/>
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
                        'testimony' => 'Me encanta tener terapia con la terapeuta Alma.',
                        'name' => 'Alfonso.',
                       
                    ),
                    array(
                        'id' => 2,
                        'testimony' => 'Siempre agradecida con las terapias de la Psicóloga Alma.
                        ',
                        'name' => 'Laura.',
                        
                    ),
                    array(
                        'id' => 3,
                        'testimony' => 'Me encantó la sesión.
                        ',
                        'name' => 'Esteban.',
                       
                    ),
                    array(
                        'id' => 4,
                        'testimony' => 'Trabajar en mis creencias está muy cañón, invertir en cambiar creencias es lo mejor, gracias por estar acompañándome en este camino.
                        ',
                        'name' => 'Patricia.',
                        
                    ),
                    array(
                        'id' => 4,
                        'testimony' => 'Conecto mucho con Alma y me siento muy inspirada, agradezco su labor .
                        ',
                        'name' => 'Melanie.',
                        
                    ),
                );

                $pleca = 'http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png';
                $plecaCierre = 'http://159.223.204.188/wp-content/uploads/2024/05/quote_pleca.png';

                foreach ($slides as $slide) {
                    echo '<div class="swiper-slide">';
                    echo '<div class="slide-content">';
                    echo '<img class="" src="' . $pleca . '" alt="'  . '" >';
                    echo '<p class=" flex justify-center font-rosario italic font items-center md:h-[200px]">' . $slide['testimony'] . '<p>';
                    echo '<img class="transform rotate-180" src="' . $plecaCierre . '" alt="'  . '" >';
                    echo '<div  class="mt-[3rem]">';
                    // echo '<img class="w-[20%] mx-auto mb-[2rem] md:w-[10%] image-perfil" src="' . $slide['imagen'] . '" alt="'  . '" >';
                    echo '<p>' . $slide['name'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            
        </div>
        <img class='w-[10rem] h-auto mx-auto  md:mt-[3rem]' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg"/>
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
