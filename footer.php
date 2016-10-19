<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kathyk
 */

?>

	</div><!-- #main-content -->
</div><!-- .main-container -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/build.min.js"></script>
<script type="text/javascript">

var jimmy = '<?php global $post; 
    $parents = get_post_ancestors( $post->ID );
    $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
    $parent = get_post( $id );
    $class = $parent->post_name;
    echo $class;

		?>';

$('#menu-primary li').each(function(){
	
	var jonny = $(this).find('a').text().toLowerCase();

		console.log('jimmy: ' + jimmy + ' ' + 'jonny: ' + jonny);
		if(jimmy.substring(0, 3) == jonny.substring(0, 3)){
			console.log('yessss');
			$(this).addClass('grandpa');
		}
});

</script>

</body>
</html>

</body>
</html>
