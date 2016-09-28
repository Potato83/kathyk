<?php
/**
 * kathyk functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kathyk
 */

if ( ! function_exists( 'kathyk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kathyk_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Barry Livingston Music, use a find and replace
	 * to change 'barry_livingstone_music' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kathyk', get_template_directory() . '/languages' );
	
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'kathyk' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kathyk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'kathyk_setup' );

// function wpb_list_child_pages() { 

// global $post;

// $parent = $post->post_parent;  
// $get_grandparent = get_post($parent);
// $grandparent = $get_grandparent->post_parent;

// if ( is_page() && $post->post_parent && $grandparent)

// 	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' ) . 'the if aka this page has a a parent and a grandparent' ;
// elseif( is_page() && $post->post_parent )
// 	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' ) . 'the else if aka this page has a parent' ;

// else
// 	$childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' .  $post->ID . '&echo=0' ) . 'the else aka this page has no parent';

// if ( $childpages ) {

// 	$string = '<div class="sub-cats"><ul>' . $childpages . '</ul></div>';
// }

// echo $string;

// }

// add_shortcode('wpb_childpages', 'wpb_list_child_pages');

//Featured Images for Blog

function get_images_by_cat($id){
    $limit = 1000;

    $the_query = new WP_Query("posts_per_page={$limit}&cat={$id}");
    $arr = array();
    while ( $the_query->have_posts() ) { 
        $the_query->the_post();

        $title = get_the_title();
        $image_src = get_field('banner_image');
        $image_link = get_field('banner_link');

        $arr[] = array(
            "title" => $title,
            "link" => $image_link,
            "image" => $image_src,
        );
    }

    wp_reset_query();

    return $arr;    
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kathyk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kathyk' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kathyk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'kathyk_widgets_init' );







