<?php
/*
Template Name: Default 
 */
get_header(); ?>
<?php //wpb_list_child_pages(); ?>
<div class="padder"></div>
<div class="padder"></div>


<!-- <h1>this is the default template aka page.php</h1> -->
<?php
$args = array( 
        'child_of' => $post->ID, 
        'parent' => $post->ID,
        'hierarchical' => 0,

);
$mypages = get_pages( $args );

echo '<ul class="middle-cat">';
foreach( $mypages as $post )
{
echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title( $post->ID ).'</a></li>';

}

?>
</ul>


<aside class="sneaky-aside">
&nbsp;

</aside>
<div class="sub-container">
<?php wp_reset_postdata(); ?>
<?php get_template_part('content', 'images'); ?>

<div class="padder"></div>
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>

<?php get_footer(); ?>