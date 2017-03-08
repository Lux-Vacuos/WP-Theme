<div class="post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
	</p>
	<?php
	if (has_post_thumbnail ()) {
		the_post_thumbnail( 'jumbo_thumbnail', array('class' => 'img-responsive'));
	}
	?>

	<?php the_content(); ?>
</div>