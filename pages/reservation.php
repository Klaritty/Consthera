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
                                <?php
                                    // Obtener productos de WooCommerce
                                    $products = get_woocommerce_products();
                                    foreach ($products as $product_id => $product_data) {
                                        $product_name = $product_data['name'];
                                        echo '<option value="' . esc_attr($product_name) . '">' . esc_html($product_name) . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] mb-[3rem] reserva-img" id="image-container">
                    <div class='mt-[2rem] md:mt-0 flex items-center justify-center'>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/circle_frame.svg"
                            alt="reserva" class='object-cover w-[65%] md:w-[24%] absolute ' />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home_reserva_img_desk.jpg"
                            alt="reserva" class='w-[60%] h-auto rounded-full relative ' />
                    </div>
                </div>
                <?php foreach ($products as $product_id => $product_data) : ?>
                <div class="md:w-1/2 min-h-screen pb-[3rem]" id="calendar-container-<?php echo esc_attr($product_id); ?>"
                    style="display: none;">
                   
                    
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget"
                        data-url="<?php echo esc_url('https://calendly.com/lucas1995giorgi/' . sanitize_title($product_data['name']) . '?hide_event_type_details=1&hide_gdpr_banner=1&background_color=0a2a45&text_color=ffffff&primary_color=bd9062'); ?>"
                        style="min-width:320px;height:600px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async>
                    </script>
                    <!-- Calendly inline widget end -->
                      <!-- Información del producto seleccionado y botón para finalizar compra -->
                    <div class="flex justify-between items-center p-4 bg-gray-200 rounded">
                        <div>
                            <h3 class="font-bold text-lg"><?php echo esc_html($product_data['name']); ?></h3>
                            <p class="text-sm text-gray-600">Precio: <?php echo wc_price($product_data['price']); ?></p>
                        </div>
                        <button class="bg-[#BD9062] hover:bg-[#A77F4B] text-white font-bold py-2 px-4 rounded"
                            onclick="redirectToCheckout(<?php echo $product_id; ?>)">
                            Proceder al Pago
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<script>
document.getElementById('session-select').addEventListener('change', function() {
    var selectedValue = this.value;
    var imageContainer = document.querySelector('.reserva-img');
    var products = <?php echo json_encode($products); ?>;
    
    // Hide all calendar containers and show the image container by default
    imageContainer.style.display = 'block';
    for (var productId in products) {
        if (Object.prototype.hasOwnProperty.call(products, productId)) {
            var calendarContainer = document.getElementById('calendar-container-' + productId);
            calendarContainer.style.display = 'none';
        }
    }
    
    // Show the relevant calendar container based on the selected option
    for (var productId in products) {
        if (Object.prototype.hasOwnProperty.call(products, productId)) {
            if (selectedValue === products[productId]['name']) {
                var calendarContainer = document.getElementById('calendar-container-' + productId);
                calendarContainer.style.display = 'block';
                imageContainer.style.display = 'none';
                break;
            }
        }
    }
});

// Función para redirigir a la página de finalizar compra con el producto seleccionado
function redirectToCheckout(productId) {
    var product = '<?php echo json_encode($products); ?>';
    var productData = JSON.parse(product)[productId];
    var productName = productData.name;
    
    // Redireccionar a la página de finalizar compra de WooCommerce con el producto seleccionado
    window.location.href = '<?php echo wc_get_checkout_url(); ?>?add-to-cart=' + productId;
}
</script>
