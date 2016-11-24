
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<div class="fl  w-100-ns tl mb4 pr3 center">
	<!-- <h2 class="pv2">Learn About Your Sign</h2> -->
	<div class="fl w-100-ns tc">
		<?php
		// The Query
		$args = array(
      'post_type' => 'post',
      'category' => 'signs',
      'post_count' => '12'
    );

$the_query = new WP_Query($args);
		
		// The Loop
		if ( $the_query->have_posts() ) {
		  while ( $the_query->have_posts() ) {
		    $the_query->the_post();
		       get_template_part('templates/content', 'signs', get_post_type() != 'post' ? 		get_post_type() : get_post_format());
		    }
		  } else {
		  // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>	
</div>

