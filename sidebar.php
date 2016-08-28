<div class="right col-md-3">
	<!--  
	<h4 class="min_title">Categories</h4>
	<ul>
		<li><a href="#">Lux Vacuos</a></li>
		<li><a href="#">Voxel</a></li>
		<li><a href="#">Infinity</a></li>
	</ul>
	-->
	<h4 class="min_title">Archives</h4>
	<ol class="list-unstyled">
	<?php wp_get_archives('type=monthly'); ?>
	</ol>
	<!-- 
	<h4 class="min_title">About</h4>
	<p><?php the_author_meta( 'description' ); ?> </p>
	 -->
	<h4 class="min_title">Follow US</h4>
	<a id="youtube" href="<?php echo get_option('youtube'); ?>"> <img
		class="follicon"
		src="<?php bloginfo('template_directory');?>/data/images/yt-icon.png">
	</a> <a id="twitter" href="<?php echo get_option('twitter'); ?>"> <img
		class="follicon"
		src="<?php bloginfo('template_directory');?>/data/images/tw-icon.png">
	</a>

</div>