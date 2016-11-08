<?php
/**
 * amosra-triangle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package amosra-triangle
 */

if ( ! function_exists( 'amosra_triangle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amosra_triangle_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on amosra-triangle, use a find and replace
	 * to change 'amosra-triangle' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'amosra-triangle', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'amosra-triangle' ),
        'secondary' => esc_html__( 'Secondary', 'amosra-triangle' ),
        'social' => esc_html__( 'Social', 'amosra-triangle' )
	) );
    // custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
    function clean_custom_menus() {
        $menu_name = 'social'; // specify custom menu slug
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $_FILES= get_template_directory_uri();

            $menu_list = '<div class="class="menu-secondary-menu-container""> ' ."\n";
            $menu_list .= "\t\t\t\t". '<ul class="menu">' ."\n";
            foreach ((array) $menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                $menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">
                    <img src="'.$_FILES.'/images/'.$title.'-icon.png" alt="'. $title .'" width="35" height="35" >
                </a></li>' ."\n";
            }
            $menu_list .= "\t\t\t\t". '</ul>' ."\n";
            $menu_list .= "\t\t\t". '</div>' ."\n";
        } else {
            // $menu_list = '<!-- no list defined -->';
        }
        echo $menu_list;
    }

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'amosra_triangle_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'amosra_triangle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amosra_triangle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amosra_triangle_content_width', 640 );
}
add_action( 'after_setup_theme', 'amosra_triangle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amosra_triangle_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amosra-triangle' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amosra-triangle' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amosra_triangle_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amosra_triangle_scripts() {
	wp_enqueue_style( 'amosra-triangle-style', get_stylesheet_uri() );

    // Add Google Fonts: Roboto Slab
    wp_enqueue_style('amosra-triangle-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400');

    wp_enqueue_script( 'amosra-triangle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'amosra-triangle-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amosra_triangle_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
