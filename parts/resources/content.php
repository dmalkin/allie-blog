<?php
/**
 * Resources Content template part
 *
 * Template part used on Resources page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="container about-content">
   <div class="row">
     <div class="col-10 col-centered">
       <?php the_content(); ?>
     </div>
   </div>
  </section>
<?php endwhile; endif; ?>
