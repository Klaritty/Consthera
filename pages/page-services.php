<?php
/*
Template Name: Services
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/FormStyles.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>
<body>
<?php include 'header-custom.php'; ?>
<main id="home">
<!-- Hero -->
<?php include 'hero-services.php'; ?>
<!-- servicios -->
<?php include 'body-services.php'; ?>
<!--Reservatiom-->
<?php include 'reservation.php'?>
<!--contacto-->
<?php include 'contacto.php'?>
<!--Footer-->
<?php include 'footer.php'?>
<?php wp_footer(); ?>
<!--button to up -->
<?php include 'scroll-to-up.php'?>

</body>
</html>






