<?php
?>
<div class='bg-cover bg-no-repeat bg-center pt-[3rem]'
    style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_back_desk.jpg');">
    <div class='container mx-auto'>
        <h1 class='text-[#EBDBCE] font-semibold font-belleza text-[30px] md:text-[60px] text-center mb-[1.5rem]'>RESERVA
            UNA SESIÓN</h1>
        <img class='w-[10rem] h-auto mx-auto pt-[1rem]' alt='pleca'
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consthera_pleca.svg" />
        <div class="mx-auto">
            <div class="flex flex-col md:flex-row justify-center items-center md:py-0 lg:py-0">
                <div class="w-full md:w-1/2">
                    <div class="p-[3rem] text-center md:text-left">
                        <h2 class="text-[#EBDBCE] font-belleza text-[28px] md:text-[35px] font-semibold mb-[1.5rem]">
                            ¡Reserva ahora una de nuestras 9 sesiones de Terapia estés donde estés!</h2>
                        <p class="text-[#EBDBCE] font-belleza text-[12px] lg:text-[20px] mb-[1.5rem]">
                            Aparta tu lugar para una experiencia transformadora, ya sea que busques una Terapia
                            online o física en Monterrey.</p>
                        <div class="relative inline-block">
                            <select id="session-select"
                                class="font-rosario bg-[#BD9062] py-2 pl-[1.75rem] pr-[1.75rem] no-underline rounded-[10px] text-white text-[14px]">
                                <option value="" selected disabled>SELECCIONE UNA SESIÓN</option>
                                <option value="individual">Constelación familiar individual</option>
                                <option value="pareja">Constelación familiar en pareja</option>
                                <option value="guias">Sanación con guías</option>
                                <option value="akashica">Sanación Akáshica</option>
                                <option value="maestros">Sanación con maestros</option>
                                <option value="fallecidos">Sanación de fallecidos y contacto con ellos</option>
                                <option value="casa_negocio">Limpieza energética de casa o negocio</option>
                                <option value="autos">Limpieza energética de autos / transportes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] mb-[3rem] reserva-img hidden" id="image-container">
                    <div class='mt-[2rem] md:mt-0 flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="reserva" class='object-cover w-[65%] md:w-[24%] absolute ' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_img_desk.jpg"
                            alt="reserva" class='w-[60%] h-auto rounded-full relative ' />
                    </div>
                </div>
                <div style="width:170%;height:70%;overflow:scroll" id="my-cal-inline"></div>
            </div>
        </div>
    </div>
</div>

<!-- Cal inline embed code begins -->
<script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init",  {origin:"https://cal.com"});

  Cal("inline", {
	elementOrSelector:"#my-cal-inline",
	calLink: "lucasmartin-giorgi-fhhz5v/15min",
	layout: "month_view"
  });

  Cal("ui", {"styles":{"branding":{"brandColor":"#000000"}},"hideEventTypeDetails":false,"layout":"month_view"});
</script>
<!-- Cal inline embed code ends -->

