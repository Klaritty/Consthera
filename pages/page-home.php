<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/tailwind_output.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/formStyles.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/Consthera/node_modules/swiper/swiper-bundle.min.css">
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
<?php wp_footer(); ?>


<button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">

<svg
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    fill-rule="evenodd"
    clip-rule="evenodd"
    d="M11.293 4.707a1 1 0 011.414 0l7 7a1 1 0 01-1.414 1.414L12 7.414 4.707 14.707a1 1 0 01-1.414-1.414l7-7z"
    fill="#1d4bdd"
  />
</svg>

</button>


<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
    document.getElementById("scrollToTopBtn").style.opacity = "1"; 
  } else {
    document.getElementById("scrollToTopBtn").style.opacity = "0"; 
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}

    </script>
</body>
</html>






