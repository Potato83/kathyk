<?php get_header(); ?>
<div class="padder"></div>
<aside>
&nbsp;
</aside>
<div class="sub-container-home">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php echo get_the_date(); ?>
<div class="padder"></div>
	<?php 
	if(has_post_thumbnail()){ ?>
	<div class="thum">
	<?php
		echo the_post_thumbnail( array(300, 300));
		echo '</div><div class="with-thum">';
	} else{
		echo '<div class="no-thum">';
	}


	 ?>

 	<?php the_content(); ?>
 	
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>