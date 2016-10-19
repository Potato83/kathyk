<?php
/*
Template Name: Home Page 
 */
get_header(); ?>

<section class="homepage">
<div class="padder"></div>
	<aside class="sneaky-aside">
	&nbsp;
	</aside>
	<div class="sub-container-home">
	<?php get_template_part('content', 'home'); ?>
	<?php //wp_reset_postdata(); ?>
	<?php //get_template_part('content', 'images'); ?>
	<div class="center">
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
	</div>
	</div>
</section>



<?php get_footer(); ?>