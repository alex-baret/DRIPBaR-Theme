<?php /* Template Name: Application */ ?>
<?php get_header(); ?>

<div class="application-slider">
  <?php echo do_shortcode('[rev_slider alias="application"]'); ?>
</div>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>

<div class="about-page">
  <div class="container w_1450">
    <div class="row gutter-row">
      <div class="col-sm-12">
      <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; 
else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
                
<?php get_footer(); ?>