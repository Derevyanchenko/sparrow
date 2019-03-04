<?php  

/*

Template Name: About

*/

?>


<?php get_header("secondary"); ?>

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>

               <h1><?php echo the_field("about_title"); ?></h1>

               <p class="lead">
                  <?php echo the_field("about_text"); ?>
               </p>

               <div class="row">

                  <div id="team-wrapper" class="bgrid-halves cf">


                     <?php $team = get_field("team"); ?>

                      <?php foreach( $team as $t ): ?>
                        
                       <div class="column member">

                        <img src="<?php echo $t['team__img']; ?>" alt=""/>

                        <div class"member-name">
                           <h5><?php echo $t['team__name']; ?></h5>
                           <span><?php echo $t['team__position']; ?></span>
                        </div>

                        <p>
                           <?php echo $t['team__info']; ?>
                        </p>

                        <<!-- ul class="member-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
 -->
                     </div>

                  <?php endforeach; ?>  



                  </div> <!-- Team wrapper End -->

               </div> <!-- row End -->

            </section> <!-- section end -->

         </div> <!-- primary end -->

         <div id="secondary" class="four columns end">

           <?php get_sidebar(); ?>

         </div> <!-- secondary End-->

      </div> <!-- page-content End-->

   </div> <!-- Content End-->

  <?php get_footer(); ?>