<?php
/*
Template Name: Middle Children 
 */
get_header(); ?>
<div class="padder"></div>

<!-- <h1>Middle Children</h1> -->


<?php

    $parent = $post->post_parent;
    $siblings =  get_pages('child_of='.$parent);

    if( count($children) != 0) {
       $args = array(
         'depth' => 1,
         'title_li' => '',
         'child_of' => $post->ID,
         'orderby' => 'menu_order',
         'order'   => 'ASC'
       );

    } elseif($parent != 0) {
        $args = array(
             'depth' => 1,
             'title_li' => '',
             'child_of' => $parent,
             'orderby' => 'menu_order'
           );
    }

    if(count($siblings) > 1 && !is_null($args))   
    {?>
    <div class="widget subpages">
         <ul class="middle-cat">
         <?php wp_list_pages($args);  ?>
         </ul>
     </div>
    <?php } else{ ?>
    <div class="padder"></div>	
    <?php } ?>
<!-- <h3>Grand Children</h3> -->
<button type="button" class="pull-left btn btn-default visible-xs" id="sidebar-toggle" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
  <i class="fa fa-navicon"></i>
</button>
<aside class="sidebar-offcanvas">


<?php wp_reset_postdata(); ?>
<?php
$args = array( 
        'child_of' => $post->ID, 
        'parent' => $post->ID,
        'depth' => 1,
        'sort_column' => 'menu_order',
        // 'order'   => 'DESC'
);
$mypages = get_pages( $args );

echo '<ul class="bottom-cat">';

if(count($mypages) == 0){
    $javafix = true;
}
foreach( $mypages as $post )
{

echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title( $post->ID ).'</a></li>';

}
?>
</ul>
</aside>

<div class="sub-container"> 
<?php wp_reset_postdata(); ?>    
<?php get_template_part('content', 'images'); ?>
<?php while ( have_posts() ) : the_post(); ?>
                    
    <?php the_content(); ?>
    
<?php endwhile; ?>
</div>

<?php get_footer(); ?>
<script>
    var javafix = "<?php echo $javafix; ?>";
    if(javafix){
        console.log('no side menu');
        $('aside').addClass("sneaky-aside");
        $('.sub-container').addClass("sub-shift");
        $('#sidebar-toggle').addClass('no-show');
    }else{
       console.log('side menu = true'); 
       $('#sidebar-toggle').removeClass('no-show');
    }
</script>