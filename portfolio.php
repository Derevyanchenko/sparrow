<?php  

/*

Template name: Portfolio

*/


?>

<?php get_header("secondary"); ?>


   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

               <h1><?php echo the_field("portfolio_title"); ?></h1>

               <p>
                 <?php echo the_field("portfolio_text"); ?>
               </p>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">

               <div id="portfolio-wrapper" class="bgrid-halves cf">

          		   <?php

                  $args = array(
                    "numberposts" => 6,
                    "post_type" => "portfolio",
                    "suppress_filters" => true,
                  );

                  $posts = get_posts($args);

                 ?>


                 <?php foreach($posts as $post) { setup_postdata($post); ?>

                    <div class="columns portfolio-item">
                       <div class="item-wrap">
                       <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail(); ?>
                             <div class="overlay"></div>
                             <div class="link-icon"><i class="fa fa-link"></i></div>
                          </a>
                      <div class="portfolio-item-meta">
                         <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                             <p>Web Design</p>
                      </div>
                       </div>
                    </div>

                <?php } wp_reset_postdata(); ?>

               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->

<?php get_footer(); ?>