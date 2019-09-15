<?php
/**
 * Single post template.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unstrapped
 */

get_header();
?>

    <main role="main" class="container top-margin">
        <div class="row">            
            <div class="col-md-8 blog-main">

                <!-- single blog post -->
                <?php
                if ( have_posts() ) :

                  while ( have_posts() ) :
                      the_post();
                  ?>

                    <div class="blog-post">
                      <h2 class="blog-post-title"><?php the_title(); ?></h2>
                      <p class="blog-post-meta"><?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?></p>

                      <?php
                        the_content();
                      ?>
                      
                    </div><!-- /.blog-post -->                  

                  <?php
                  endwhile; // end the loop.
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
