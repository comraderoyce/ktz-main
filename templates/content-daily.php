
	<article <?php post_class(); ?>>
	  <header>
	    <h2 class=" f3 pv2 mb0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <!-- <a href="<?php comments_link(); ?>" class="f4 mb2">
	    	<?php comments_number( 'No comments', '1 comment', '% comments' ); ?>
	   	</a> -->
	  </header>
	  <div class="f3">
	    <?php the_content(); ?>
	  </div>
	</article>

