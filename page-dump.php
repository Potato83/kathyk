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
         <?php //wp_list_pages($args);  ?>hallo
         </ul>
     </div>
    <?php } ?>




    *********

    <?php
    if(is_page( 'Workshops' )){
        $url = esc_url( get_permalink( get_page_by_title( 'Home' ) ) );
        wp_redirect( 'https://unsplash.com/collections/1949/clean-backgrounds'  );
        exit;
    }  else{
        echo 'no';
    }
    ?>