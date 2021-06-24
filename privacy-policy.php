<?php /* Template Name: Privacy Policy */ ?>
<?php get_header(); ?>

<div class="privacy-policy-slider">
  <?php echo do_shortcode('[rev_slider alias="privacy-policy"]'); ?>
</div>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>

<div class="privacy-policy-page">
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