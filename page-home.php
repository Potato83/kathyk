<?php
/*
Template Name: Home Page 
 */
get_header(); ?>

<section class="homepage">
	<div class="padder"></div>
	<aside>
	&nbsp;
	</aside>
	<div class="sub-container-home">
	
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
	</div>
</section>



<?php get_footer(); ?>