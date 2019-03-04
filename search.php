<?php get_header("secondary"); ?>

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

           <?php if ( have_posts() ) : ?>

				<h1 class="">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'sparrow' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

           <?php get_sidebar(); ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

<?php get_footer(); ?>

