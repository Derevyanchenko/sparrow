<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparrow
 */

?>

<article class="post">

   <div class="entry-header cf">

      <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

      <p class="post-meta">

         <time class="date" datetime="2014-01-14T11:24"><?php the_time("Y m, d"); ?></time>
         /
         <span class="categories">
        	<?php the_tags("", ' / '); ?>
         </span>

      </p>

   </div>

   <div class="post-thumb">
      <a href="<?php the_permalink(); ?>" title="">
      	<?php the_post_thumbnail(); ?>
      </a>
   </div>

   <div class="post-content">

      <p>
      	<?php the_excerpt(); ?>
      </p>

   </div>

</article> <!-- post end -->
