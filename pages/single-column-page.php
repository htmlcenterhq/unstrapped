<?php
/**
 * Single column page template.
 * Template Name: Single Column Page
 * Learn more: https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package unstrapped
 */

get_header();
?>

    <main role="main" class="container">
        <div class="row">            
            <div class="col-md-8 blog-main">
          
                <!-- single column page -->
                <?php
                if ( have_posts() ) :

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

                  <?php
                  endwhile; // end the loop.
                endif;
                ?>

            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    <?php
    get_footer();
