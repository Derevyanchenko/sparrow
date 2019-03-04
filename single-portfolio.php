<?php  

/*

Template Name: Страница с работой портфолио
Template Post Type: Portfolio

*/

?>

<?php get_header("secondary"); ?>

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">


         <?php if( have_posts() ) : while( have_posts() ): the_post(); ?>

            <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h1><?php the_title(); ?></h1>

                  <div class="entry-description">

                     <p><?php the_content(); ?></p>

                  </div>

                  <ul class="portfolio-meta-list">
						   <li><span>Date: </span><?php the_time("F Y"); ?></li>
						   <li><span>Client </span><?php echo the_field("portfolio_client"); ?></li>
						   <li>
            <span>Skills: </span><?php the_terms(get_the_ID(), "skills", "", " / ", "") ?>            
                     </li>
				      </ul>

                 <!--  <a class="button" href="http://behance.net">View project</a> -->

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

               <div class="entry-media">

                  <?php $portfolio_images = get_field("portfolio_images"); ?>

                  <?php foreach( $portfolio_images as $portfolio_image ): ?>
                    
                        <img src="<?php echo $portfolio_image["portfolio_image"]; ?>  " alt="">     

                  <?php endforeach; ?>  

               </div>

               <div class="entry-excerpt">

				      <p>
                     <?php echo the_field("portfolio_desc");?>        
                  </p>

					</div>

            </div> <!-- primary end-->

            </section> <!-- end section -->

         <?php endwhile; ?>
      <?php endif; ?>

        <!--  <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
			</ul>
 -->
      </div>

   </div> <!-- content End-->


<?php get_footer(); ?>