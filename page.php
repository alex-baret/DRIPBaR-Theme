<?php get_header(); ?>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>

<div class="generic-page">
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