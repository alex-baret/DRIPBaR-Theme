<?php
get_header();
?>

<style>


</style>

<div class="locations-slider">
  <?php echo do_shortcode('[rev_slider alias="search-results"]'); ?>
</div>

<h3 class="title_search">You searched for: <span class="span_query"><?php echo get_search_query(); ?></span> </h3>

<div class="container cont_results_page">
	<div class="row">




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="col-md-12 title_parragraph">
	
<h3 class="title_cards"><?php the_title(); ?></h3>
	
<div class="content_serach_new">
<p class="p_search">
	
	<?php the_excerpt(); ?>
	
</p>
</div>

<a class="btn btn-two btn_read_more_search" role="button" href="<?php the_permalink(); ?>">Read more ></a>

</div>



<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</div>
</div>
<?php 
get_footer();
?>

<scripts>



</scripts>