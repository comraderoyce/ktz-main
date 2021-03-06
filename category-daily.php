<h1>Daily Horoscopes</h1>
<div class="w-100 pl0 pr5 fl">
	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>
	
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content-daily', get_post_type() != 'post' ? get_post_type() : 	get_post_format()); ?>
	<?php endwhile; ?>
	
	<?php the_posts_navigation(); ?>
</div>	
