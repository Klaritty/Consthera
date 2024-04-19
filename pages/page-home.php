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
    <?php wp_head(); ?>
</head>
<body>
<?php include 'header-custom.php'; ?>
<main id="home">
<!--Hero-->
<?php include 'hero.php'; ?>
<!--Services-->
<?php include 'services.php'; ?>

home
<?php wp_footer(); ?>
</body>
</html>






