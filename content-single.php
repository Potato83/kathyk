<?php 
the_post();
$title = get_the_title();
$baselink = get_permalink();
$category = get_field('category_blog'); 

if( !empty($category) ){
    $post_per_page = get_option('posts_per_page'); 
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;

    $categoryID = get_category_id($category);

    $total = get_post_count(array($categoryID));

    $the_query = new WP_Query("posts_per_page={$post_per_page}&cat=    {$categoryID}&paged={$paged}");
?>

<div id="wrapper">
<div id="content">
    <h1>hello this is content-single.php</h1>
    <h1 class="title"><?php echo $title; ?></h1>
    <div class="content-middle">
        <div class="node">              
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="content">
                <?php echo content(150); ?>
            </div>
            <div class="read-more"><a href="<?php echo get_permalink(); ?>">Read more</a></div>                     
            <?php endwhile; ?>
            <br/><br/>
            <div class="wp-paginate">
            <?php 
                wp_reset_query();

                echo paginate_links( array(
                    'base' => $baselink.'%_%',
                    'total' => ceil($total/$post_per_page),
                    'current' => $paged,
                ));

                ?>
            </div>
        </div>
    </div>

</div> <!-- end content -->

<div style="clear:both"></div>
</div>

<?php
}
?>