
<?php
function bootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );

    wp_register_style('custom-style',get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.3.7');
    wp_enqueue_style('custom-style');
}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts_with_jquery' );
?>
<?php
add_action( 'after_setup_theme', 'twentyten_setup' );
if (!function_exists( 'twentyten_setup')):
function twentyten_setup() {
add_editor_style();
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
require_once( $locale_file );
register_nav_menus( array(
'primary' => __( 'Primary Navigation', 'twentyten' ),
) );
add_custom_background();
if ( ! defined( 'HEADER_TEXTCOLOR' ) )
define( 'HEADER_TEXTCOLOR', '' );
if ( ! defined( 'HEADER_IMAGE' ) )
define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 940 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 198 ) );
set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
if ( ! defined( 'NO_HEADER_TEXT' ) )
define( 'NO_HEADER_TEXT', true );
}
endif;
if(function_exists('register_sidebar')){
register_sidebar(array(
'name'=>'上部边栏',
'id' => 'sidebar-widget-area-primary',
'description' => '',
'before_widget' => '<div>',
    'after_widget' => '</div>',
'before_title' => '<h3><span>',
'after_title' => '</span></h3>',
));
register_sidebar(array(
'name'=>'下部边栏',
'id' => 'sidebar-widget-area-secondary',
'description' => '',
'before_widget' => '<div>',
    'after_widget' => '</div>',
'before_title' => '<h3><span>',
'after_title' => '</span></h3>',
));
register_sidebar(array(
'name'=>'边栏右边',
'id' => 'sidebar-widget-area-right',
'description' => '一般放分类列表',
'before_widget' => '<div>',
    'after_widget' => '</div>',
'before_title' => '<h3><span>',
'after_title' => '</span></h3>',
));
}
?>