<?php
/**
 * Shop categories template part
 *
 * Template part used on the shop page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables

?>

<!-- Calligraphy -->
<section class="container calligraphy description">

  <?php // Variables
        $calligraphy_description = get_field('calligraphy_description');
  ?>

    <div class="row row--full-width description">
      <div class="col-10 col-centered">
        <?php echo $calligraphy_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center description">
      <div class="square"></div>
    </div>
</section>

<?php if(have_rows('calligraphy_products')) : ?>
  <section class="container calligraphy-products">
    <div class="row">
      <div class="col-10 col-centered">
        <div class="sm-block-grid-1 block-grid-2">
          <?php while(have_rows('calligraphy_products')) : the_row();
            // Variables
            $calligraphy_image = get_sub_field('calligraphy_image');
            $calligraphy_title = get_sub_field('calligraphy_title');
          ?>
            <div class="col calligraphy-product" style="background:url() center center/cover no-repeat">
              <img src="<?php echo $calligraphy_image['url']; ?>" title="<?php echo $calligraphy_image['title']; ?>">
              <h3 class="text-center blog-archive__category">
                <?php echo $calligraphy_title; ?>
              </h3>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- End Calligraphy -->

<!-- Signs -->
<section class="container sing description">
  <?php // Variables
        $sign_description = get_field('sign_description');
  ?>

    <div class="row row--full-width description">
      <div class="col-10 col-centered">
        <?php echo $sign_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center description">
      <div class="square"></div>
    </div>
</section>

<?php if(have_rows('calligraphy_products')) : ?>
  <section class="container sign-products">
    <div class="row">
      <div class="col-10 col-centered">
        <div class="sm-block-grid-1 block-grid-2">
          <?php while(have_rows('calligraphy_products')) : the_row();
            // Variables
            $calligraphy_image = get_sub_field('calligraphy_image');
            $calligraphy_title = get_sub_field('calligraphy_title');
          ?>
            <div class="col calligraphy-product" style="background:url() center center/cover no-repeat">
              <img src="<?php echo $calligraphy_image['url']; ?>" title="<?php echo $calligraphy_image['title']; ?>">
              <h3 class="text-center blog-archive__category">
                <?php echo $calligraphy_title; ?>
              </h3>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- End Signs -->

<!-- Photography -->
  <?php // Variables
        $photography_description = get_field('photography_description');
  ?>

    <div class="row row--full-width description">
      <div class="col-10 col-centered">
        <?php echo $photography_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center">
      <div class="square"></div>
    </div>
  <!-- End Photography -->

</section>
