<?php
/**
 * The template for displaying the header
 *
 * @package unstrapped
 * 
 */
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Unstrapped - open source theme framework</title>

    <!-- main css -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"> 
    <?php wp_head(); ?>
  </head>