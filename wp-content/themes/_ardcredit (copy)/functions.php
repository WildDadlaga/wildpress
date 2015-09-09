<?php
/**
 * _ARDcredit functions and definitions
 *
 * @package _ARDcredit
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( '_ardcredit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _ardcredit_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _ARDcredit, use a find and replace
	 * to change '_ardcredit' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_ardcredit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary  Menu', '_ardcredit' ),
		'aboutus' => __( 'About Us Menu', '_ardcredit' ),
		'product' => __( 'Produsts Menu', '_ardcredit' ),
		'social'  => __( 'Social   Menu', '_ardcredit' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_ardcredit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'post-thumbnails' );
}
endif; // _ardcredit_setup
add_action( 'after_setup_theme', '_ardcredit_setup' );


add_action( 'init', 'create_slide' );
	function create_slide() {
  		$labels = array(
        		'name' 			=> __( 'Slides' ),
        		'singular_name' => __( 'Slide' )
      	);
    	$args = array(
    			'labels'		=> $labels,
	      		'public' 		=> true,
	      		'has_archive' 	=> true,
	      		'menu_icon' 	=> 'dashicons-format-gallery',
	      		'menu_position' => 2,
	      		'supports'	=> array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
			'hierarchical'  => true,
    	);
  register_post_type( 'slide', $args);
}

add_action( 'init', 'create_colleague' );
	function create_colleague() {
    $args = array(
      		'labels' 		=> array(
        	'name' 			=> __( 'Colleagues' ),
        	'singular_name' => __( 'Colleague' )
      	),
      		'public' => true,
      		'has_archive' => true,
      		'menu_icon' => 'dashicons-groups',
      		'menu_position' => 4,
      		'supports'		=> array( 'excerpt','title', 'editor', 'thumbnail','link'),
      		'taxonomies' => array('category'),
    	);
  register_post_type( 'colleague', $args);
}

// register_taxonomy( 'taxomone', 'product', $args );

add_action( 'init', 'create_product' );
	function create_product() {
  		$labels = array(
        		'name' 			=> __( 'Products' ),
        		'singular_name' => __( 'Product' )
      	);
    	$args = array(
    			'labels'		=> $labels,
	      		'public' 		=> true,
	      		'has_archive' 	=> true,
	      		'menu_icon' 	=> 'dashicons-carrot',
	      		'menu_position' => 4,
	      		'supports'		=> array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'page-attributes', ),
	      		'taxonomies' => array('category'),
	      		'hierarchical'       => true,
    	);
  register_post_type( 'product', $args);
}

add_action( 'init', 'create_faq' );
	function create_faq() {
  		$labels = array(
        		'name' 			=> __( 'FAQs' ),
        		'singular_name' => __( 'FAQ' )
      	);
    	$args = array(
    			'labels'		=> $labels,
	      		'public' 		=> true,
	      		'has_archive' 	=> true,
	      		'menu_icon' 	=> 'dashicons-editor-help',
	      		'menu_position' => 4,
	      		'supports'		=> array('title', 'editor', ),
			'taxonomies' => array('category'),
    	);
  register_post_type( 'faq', $args);
}

add_action( 'init', 'create_partner' );
	function create_partner() {
  		$labels = array(
        		'name' 			=> __( 'Partners' ),
        		'singular_name' => __( 'Partner' )
      	);
    	$args = array(
    			'labels'		=> $labels,
	      		'public' 		=> true,
	      		'has_archive' 	=> true,
	      		'menu_icon' 	=> 'dashicons-businessman',
	      		'menu_position' => 4,
	      		'supports'		=> array('title', 'thumbnail', 'custom-fields', 'page-attributes', ),
    	);
  register_post_type( 'partner', $args);
}

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function _ardcredit_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_ardcredit' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Contact', '_tenger' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<div class="col-md-4 col-sm-12">',
		'after_widget'  => '</div>',

		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', '_ardcredit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _ardcredit_scripts() {
	wp_enqueue_style( '_ardcredit-style', get_stylesheet_uri() );

	wp_enqueue_script( '_ardcredit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( '_ardcredit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_ardcredit_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function _ardcredit_theme_customizer( $wp_customize ) {
    // Fun code will go here

$wp_customize->add_section( '_ardcredit_logo_section' , array(
    'title'       => __( 'Logo for mongolian', '_ardcredit' ),
    'priority'    => 30,
    'description' => 'Upload a mongolian logo for defualt',
) );
$wp_customize->add_setting( '_ardcredit_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_ardcredit_logo', array(
    'label'    => __( 'Монгол лого', '_ardcredit' ),
    'section'  => '_ardcredit_logo_section',
    'settings' => '_ardcredit_logo',
) ) );

$wp_customize->add_section( '_ardcredit_ENlogo_section' , array(
    'title'       => __( 'Logo for ENG', '_ardcredit' ),
    'priority'    => 30,
    'description' => 'Upload a logo for english translation',
) );
$wp_customize->add_setting( '_ardcredit_ENlogo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_ardcredit_ENlogo', array(
    'label'    => __( 'Logo for ENG', '_ardcredit' ),
    'section'  => '_ardcredit_ENlogo_section',
    'settings' => '_ardcredit_ENlogo',
) ) );
}
add_action('customize_register', '_ardcredit_theme_customizer');

?>
<?php

// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );

// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;
    
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }
    
    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          } 
        }
      }
    }

    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }
    
    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}

add_filter( 'wpcf7_form_class_attr', 'custom_form_class' );

function custom_form_class( $class ) {
	$class .= ' form';
	return $class;
}


// function example_insert_category() {
// 	wp_insert_term(
// 		'Example Category',
// 		'category',
// 		array(
// 		  'description'	=> 'This is an example category created with wp_insert_term.',
// 		  'slug' 		=> 'example-category'
// 		)
// 	);
// }
// add_action( 'after_switch_theme', 'example_insert_category' );
