
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<h2>Today's Horoscope</h2>
<div class="fl  w-100-ns tl mb4">
<!-- <h2>Your daily...</h2> -->
<?php

$args = array(
  'post_type' => 'post', 
  'showposts' => '1',
  'paged' => $paged,
  'category_name' => 'daily'
);

// The Query
$the_query = new WP_Query($args);



// The Loop
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
       get_template_part('templates/content', 'daily', get_post_type() != 'post' ? get_post_type() : get_post_format());
    }
  } else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>

</div>

<div class="fl  w-100-ns tl mb4 pr3">
	<h2 class="pv2">Compatibility: Get Along With Anyone</h2>
	<div class="fl w-100-ns tl">
		<?php
		// The Query
		$the_query = new WP_Query('category_name=compatibility' );
		
		// The Loop
		if ( $the_query->have_posts() ) {
		  while ( $the_query->have_posts() ) {
		    $the_query->the_post();
		       get_template_part('templates/content', 'compatibility', get_post_type() != 'post' ? 		get_post_type() : get_post_format());
		    }
		  } else {
		  // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div>	
</div>

<div class="fl  w-50-ns tl mb4 pr3">
<h2>Weekly Horoscope</h2>
<?php
// The Query
$the_query = new WP_Query('category_name=weekly&post_count=1' );

// The Loop
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
       get_template_part('templates/content', 'weekly', get_post_type() != 'post' ? get_post_type() : get_post_format());
    }
  } else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>

<div class="fl  w-50-ns tl mb4 pr3">
<h2>Monthly Horoscope</h2>
<?php
// The Query
$the_query = new WP_Query('category_name=monthly' );

// The Loop
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
       get_template_part('templates/content', 'weekly', get_post_type() != 'post' ? get_post_type() : get_post_format());
    }
  } else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>




<?php the_posts_navigation(); ?>
