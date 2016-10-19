<?php
/*
Template Name: Grand Children 
 */
get_header(); ?>
<div class="padder"></div>


<?php wp_reset_postdata(); ?>

<!-- <h1>this is the grand children template aka page-bottom.php</h1> -->
<?php
        
    $parent = $post->post_parent;

    $get_grandparent = get_post($parent);
    $grandparent = $get_grandparent->post_parent;

    $siblings =  get_pages('child_of='.$parent);

        $args = array(
             'depth' => 1,
             'title_li' => '',
             //'exclude' => $post->ID,
             'child_of' => $grandparent
           );
    
    //Show pages if this page has more than one sibling 
    // and if it has children 
    if(count($siblings) > 1 && !is_null($args))   
    {?>
    <div class="widget subpages">
    
         <ul class="middle-cat">
         <?php wp_list_pages($args);  ?>
         </ul>
     </div>
    <?php } ?>

<!-- <h3>Grand Children</h3> -->
<button type="button" class="pull-left btn btn-default visible-xs" id="sidebar-toggle" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
  <i class="fa fa-navicon"></i>
</button>
<aside class="sidebar-offcanvas">
<?php
        
    $parent = $post->post_parent;

    $siblings =  get_pages('child_of='.$parent);

        $args = array(
             'depth' => 1,
             'title_li' => '',
             //'exclude' => $post->ID,
             'child_of' => $parent
           );
    
    //Show pages if this page has more than one sibling 
    // and if it has children 
    if(count($siblings) > 1 && !is_null($args))   
    {?>
    <div class="widget subpages">
    
         <ul class="bottom-cat">
         <?php wp_list_pages($args);  ?>         
         </ul>
     </div>
    <?php } ?>
</aside>
<div class="sub-container">
<?php wp_reset_postdata(); ?>
<?php get_template_part('content', 'images'); ?>
<?php while ( have_posts() ) : the_post(); ?>
					
	<?php the_content(); ?>
	
<?php endwhile; ?>
</div>





<?php get_footer(); ?>