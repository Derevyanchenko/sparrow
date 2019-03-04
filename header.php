<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparrow
 */

?>
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

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

         <?php if( is_front_page() ): ?>
          
            <?php $header_slider = get_field("home_header"); ?>

            <?php foreach( $header_slider as $slide ): ?>

             
               <li>
                  <div class="row">
                     <div class="twelve columns">
                        <div class="slider-text">
                           <h1>
                              <?php echo $slide["header__title"]; ?>
                              <span>.</span></h1>
                           <p>
                              <?php echo $slide["header__text"]; ?>
                           </p>
                        </div>
                        <div class="slider-image">
                           <img src="<?php echo $slide["header__image"]; ?>" alt="">
                        </div>
                     </div>
                  </div>
               </li>

            <?php endforeach; ?>

         <?php endif; ?>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->



