<?php 
	// echo 'plz';
	if(has_post_thumbnail()){ ?>
	<div class="page-thum">
		
		<a href="<?php echo the_post_thumbnail_url(); ?>" data-rel="lightbox">
	<?php
		echo the_post_thumbnail( 'full');
		echo '</a></div>';
	} else{
		echo '';
	}
?>

<!-- TEST -->
