<?php /* Template Name: Locations */ ?>
<?php get_header(); ?>

<div class="locations-slider">
  <?php echo do_shortcode('[rev_slider alias="locations_slider"]'); ?>
</div>

<?php echo do_shortcode('[custom-mapping map_id="352" width="100%" height="600"]'); ?>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>

<div class="locations-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php //the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; 
else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
                
<?php get_footer(); ?>