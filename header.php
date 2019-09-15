<?php
/**
 * The template for displaying the header
 *
 * @package unstrapped
 *
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="htmlcenter.com">
    <title><?php wp_title(); ?></title>

    <link rel="icon" href="">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"> 
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>   
    
    <div class="container">      
      
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 text-center"></div>
          <!-- site name, centered, middle component -->
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
          </div>
          <!-- examples of sign up and login buttons -->
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary blog-header-btn" href="#">Sign up</a> 
            <a class="btn btn-sm btn-outline-secondary blog-header-btn" href="#">Login</a>
          </div>
        </div>
      </header>

      <!-- navigation menu -->
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-center">
          <a class="p-2 text-muted" href="#">Pages</a>
          <a class="p-2 text-muted" href="#">Posts</a>
          <a class="p-2 text-muted" href="#">Marketplace</a>
          <a class="p-2 text-muted" href="#">About</a>
        </nav>
      </div>

    </div> <!-- /.header container -->

