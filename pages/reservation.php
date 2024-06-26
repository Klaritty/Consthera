<?php
?>
<div class='bg-cover bg-no-repeat bg-center pt-[3rem]'
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_back_desk.jpg');">
    <div class='container mx-auto'>
        <h1 class='text-[#EBDBCE] font-semibold font-belleza text-[30px] md:text-[60px] text-center mb-[1.5rem]'>RESERVA
            UNA SESIÓN</h1>
        <img class='w-[10rem] h-auto mx-auto pt-[1rem]' alt='pleca'
            src=" <?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
        <div class=" mx-auto ">
            <div class="flex flex-col md:flex-row justify-center items-center  md:py-0 lg:py-0">
                <div class="w-full md:w-1/2">
                    <div class="p-[3rem] text-center md:text-left">
                        <h2 class="text-[#EBDBCE] font-belleza text-[28px] md:text-[35px] font-semibold mb-[1.5rem]">
                            ¡Reserva ahora una de nuestras 9 sesiones de Terapia estés donde estés!</h2>
                        <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[1.5rem]">
                            Aparta tu lugar para una experiencia transformadora, ya sea que busques una Terapia
                            online o física en Monterrey.</p>
                        <div class="dropdown inline-block relative">
                            <button
                                class=" flex items-center font-rosario bg-[#BD9062] py-2 pl-[1.75rem] pr-[1.75rem] no-underline rounded-[10px] text-white text-[14px] dropdown-toggle">
                                <span class="mr-2">SELECCIONE UNA SESIÓN</span>
                                <span class='ml-[8rem] mr-[1.75rem] rotate-180'>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.293 4.707a1 1 0 011.414 0l7 7a1 1 0 01-1.414 1.414L12 7.414 4.707 14.707a1 1 0 01-1.414-1.414l7-7z"
                                            fill="#fff" />
                                    </svg>
                                </span>
                            </button>

                            <ul class="dropdown-menu absolute hidden text-[#EBDBCE]">
                                <li class=""><a
                                        class="rounded-t bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Constelación familiar individual</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Constelación familiar en pareja</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Sanación con guías</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Sanación Akáshica</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Sanación con maestros</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Sanación de fallecidos y contacto con ellos</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Limpieza energética de casa o negocio</a></li>
                                <li class=""><a
                                        class="bg-gray-200 hover:bg-[#BD9062] hover:text-white py-2 px-4 block  no-underline text-[14px]"
                                        href="#">Limpieza energética de autos / transportes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] mb-[3rem]" id="image-container">
                    <div class='mt-[2rem] md:mt-0 flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="reserva" class='object-cover  w-[65%] md:w-[24%] absolute ' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_img_desk.jpg"
                            alt="reserva" class='w-[60%] h-auto rounded-full relative ' />
                    </div>
                </div>
                <div class="md:w-1/2" id="calendar-container" style="display: none;">
                    <?php echo do_shortcode('[custom_calendar]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

