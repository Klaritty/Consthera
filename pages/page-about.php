<?php
/*
Template Name: About
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Meta Description -->
<meta name="description" content="Descripción breve y atractiva de tu sitio web que describa de qué trata tu página principal.">

<!-- Meta Keywords -->
<meta name="keywords" content="palabras, clave, relacionadas, con, tu, contenido, separadas, por, comas">

<!-- Author -->
<meta name="author" content="Tu Nombre o Nombre de tu Empresa">

<!-- Open Graph Meta Tags para Redes Sociales -->
<meta property="og:title" content="Cosnthera">
<meta property="og:description" content="Descripción breve de tu página para redes sociales">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo get_permalink(); ?>">
<meta property="og:image" content="URL_de_la_imagen_destacada">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cosnthera">
<meta name="twitter:description" content="Descripción breve de tu página para Twitter">
<meta name="twitter:image" content="URL_de_la_imagen_destacada">

<!-- Google Verification -->
<meta name="google-site-verification" content="tu_codigo_de_verificacion_de_google">

<!-- Enlaces Canonical -->
<link rel="canonical" href="<?php echo get_permalink(); ?>">

<!-- Google Analytics -->
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
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">

<!-- Title -->
<title>Consthera</title>

<?php wp_head(); ?>
</head>
<body>
<?php include 'header-custom.php'; ?>
<main id="home">
<!-- Hero-->
<?php include 'hero-about.php'; ?>
<!--History-->
<?php include 'history-about.php'; ?>
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






