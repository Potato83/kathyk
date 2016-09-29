<?php get_header(); ?>
<div class="padder"></div>
<div class="padder"></div>
<aside class"sneaky-aside" id="sneaky-aside">
&nbsp;
</aside>

<div class="sub-container-home">
	<!-- <h1>single.php</h1> -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php echo get_the_date(); ?>
<div class="padder"></div>
	<?php 
	if(has_post_thumbnail()){ ?>
	<div class="thum">
		<a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="lightbox">
	<?php
		echo the_post_thumbnail( array(300, 300));
		echo '</a></div>';
	} else{
		echo '';
	}


	 ?>

 	<?php the_content(); ?>
 	
	
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>