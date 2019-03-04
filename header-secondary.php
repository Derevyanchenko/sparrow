<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">     
                  <?php the_custom_logo(); ?>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>


               	<?php
      					wp_nav_menu( array(
                        "theme_location" => "menu-1",
                        "menu_class"    => "nav",
                        "menu_id"    => "nav",
                  ) );
      				?> 

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->

<!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?php echo the_field("secondary_header_title"); ?><span>.</span></h1>

            <p>
            	<?php echo the_field("secondary_header_text"); ?>
            </p>
         </div>

      </div>

   </div> <!-- Page Title End-->