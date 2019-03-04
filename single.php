<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sparrow
 */

get_header();
?>

 <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

			
			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>


            <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title(); ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time("Y m, d"); ?></time>
                     /
                     <span class="categories">
                     	<?php the_tags("", " / "); ?>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail(); ?>
               </div>

               <div class="post-content">

                  <p class="lead">
                  	<?php the_content(); ?>
                  </p>

               </div>

            </article> <!-- post end -->

        <?php endwhile; ?>
		<?php endif; ?>

         </div>

         <div id="secondary" class="four columns end">

            <?php get_sidebar(); ?>

         </div> <!-- Comments End -->

      </div>

   </div> <!-- Content End-->

<?php
get_footer();
