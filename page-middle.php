<?php
/*
Template Name: Middle Children 
 */
get_header(); ?>
<div class="padder"></div>
<h1>this is the middle children template aka page-bottom.php</h1>
<!-- <h1>Middle Children</h1> -->
<?php

    $parent = $post->post_parent;
    $siblings =  get_pages('child_of='.$parent);

    if( count($children) != 0) {
       $args = array(
         'depth' => 1,
         'title_li' => '',
         'child_of' => $post->ID
       );

    } elseif($parent != 0) {
        $args = array(
             'depth' => 1,
             'title_li' => '',
             'child_of' => $parent
           );
    }

    if(count($siblings) > 1 && !is_null($args))   
    {?>
    <div class="widget subpages">
         <ul class="middle-cat">
         <?php wp_list_pages($args);  ?>
         </ul>
     </div>
    <?php } ?>
<!-- <h3>Grand Children</h3> -->
<aside>
&nbsp;	
<?php
$args = array( 
        'child_of' => $post->ID, 
        'parent' => $post->ID,
        'depth' => 1
);
$mypages = get_pages( $args );
//echo '<h1><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></h1>';

echo '<ul class="bottom-cat">';
foreach( $mypages as $post )
{

echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title( $post->ID ).'</a></li>';

}
?>
</ul>
</aside>
<div class="sub-container">
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>





<?php get_footer(); ?>