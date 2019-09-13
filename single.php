<?php
/**
 * Single post template.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unstrapped
 */

get_header();
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php bloginfo('home'); ?>">Unstrapped</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <!-- main menu -->
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Categories</a>
          <a class="p-2 text-muted" href="#">Links</a>
          <a class="p-2 text-muted" href="#">Posts</a>
          <a class="p-2 text-muted" href="#">Pages</a>
          <a class="p-2 text-muted" href="#">About</a>
          <a class="p-2 text-muted" href="#">Links</a>
          <a class="p-2 text-muted" href="#">Posts</a>
          <a class="p-2 text-muted" href="#">Pages</a>
          <a class="p-2 text-muted" href="#">About</a>
        </nav>
      </div>

    </div>

    <main role="main" class="container">
        <div class="row">
            
            <div class="col-md-8 blog-main">
          
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Our Blog Feed
                </h3>

                <!-- blog posts -->
                <?php
                if ( have_posts() ) :

                  /* Start the Loop */
                  while ( have_posts() ) :
                      the_post();
                  ?>

                    <div class="blog-post">
                      <h2 class="blog-post-title"><?php the_title(); ?></h2>
                      <p class="blog-post-meta">January 1, 2019 by <?php the_author_posts_link(); ?></p>

                      <?php
                        the_content();
                      ?>
                      
                    </div><!-- /.blog-post -->                  

                  <?
                  endwhile; // End the loop.
                
                endif;
                ?>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                    <li><a href="#">September 2019</a></li>
                    <li><a href="#">August 2019</a></li>
                    <li><a href="#">July 2019</a></li>
                    <li><a href="#">June 2019</a></li>
                    <li><a href="#">May 2019</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    <?php
    get_footer();
