<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unstrapped
 */

get_header();
?>

    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of featured blog post goes here</h1>
          <p class="lead my-3">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
      </div>
    </div>

    <main role="main" class="container">
        <div class="row">            
            <div class="col-md-8 blog-main">

              <!-- blog posts -->
              <?php
              if ( have_posts() ) :

                  while ( have_posts() ) :
                    the_post();
                  ?>

                  <div class="blog-post">
                    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <p class="blog-post-meta"><?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?></p>

                    <?php
                      the_content();
                    ?>
                    
                  </div><!-- /.blog-post -->                  

                <?php
                endwhile; // end the loop.
              endif;
              ?>

              <nav class="blog-pagination">
                  <a class="btn btn-outline-primary" href="#">Older</a>
                  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
              </nav>

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

    </main><!-- /.page container -->

    <?php
    get_footer();
