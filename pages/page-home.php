<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-36VC4346Y2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-36VC4346Y2');
    </script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/formStyles.css">
    <link rel="stylesheet"
        href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <?php include 'header-custom.php'; ?>
    <main id="home">
        <!--Hero-->
        <?php include 'hero.php'; ?>
        <!--Services-->
        <?php include 'services.php'; ?>
        <!--About-->
        <?php include 'about.php'; ?>
        <!--Testimonios-->
        <?php include 'testimonials.php'?>
        <!--Reservatiom-->
        <?php include 'reservation.php'?>
        <!--contacto-->
        <?php include 'contacto.php'?>
        <!--Footer-->
        <?php include 'footer.php'?>
        <!--button to up -->
        <?php include 'scroll-to-up.php'?>
        <?php wp_footer(); ?>



</body>

</html>