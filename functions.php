<?php
// Set paths
define('DS', DIRECTORY_SEPARATOR);
define('THEME_PATH', get_template_directory() . DS);
define('THEME_URI', get_template_directory_uri() . '/');
define('THEME_IMG', THEME_URI . 'images' . DS);
define('THEME_CSS', THEME_URI . 'css/');
define('THEME_JS', THEME_URI . 'js/');

require('wp_bootstrap_navwalker.php');

add_action('widgets_init', function () {
    if (!function_exists('register_sidebars')) {
        return;
    }
    register_sidebar(array('name' => 'Sidebar 1', 'id' => 'sidebar-1', 'before_widget' => '<div id="%1$s" class="block widget %2$s sidebar_block">', 'after_widget' => '</div>', 'before_title' => '<h2 class="sidebar_title">', 'after_title' => '</h2>'));

});

//Load scripts and styles to front end
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('jquery');
    wp_enqueue_style('jscrollpane-css', THEME_CSS . 'jquery.jscrollpane.css');
    wp_enqueue_style('bootstrap-css', THEME_CSS . 'bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme-css', THEME_CSS . 'bootstrap-theme.min.css');
    wp_enqueue_style('font-awesome', THEME_CSS . 'font-awesome.min.css');
    wp_enqueue_style('responsive', THEME_CSS . 'responsive-style.css');
    // wp_enqueue_script('jscrollpane-js', THEME_JS . 'jquery.jscrollpane.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', THEME_JS . 'bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('my-scripts', THEME_JS . 'scripts.js', array(), '1.0.0', true);
    wp_enqueue_script('parallax', THEME_JS . 'parallax.min.js');
});

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');
add_image_size( 'icons', 60, 60 );
add_image_size( 'banners', 1140, 400, array( 'center', 'center' ) );

//Load scripts and styles to admin
add_action('admin_enqueue_scripts', function () {
    if (defined('IS_DEV') && IS_DEV) {
        wp_enqueue_script('debug-js', THEME_JS . 'debug_bar.js', array(), '1.0.0', true);
        wp_enqueue_style('debug_bar', THEME_CSS . 'debug_bar.css');
    }
});

/* Register WP Menus */
register_nav_menus( array(
    'primary' => __( 'Main Menu', 'getsmart' )
) );

/* Custom excerpt length */
function my_ultimate_excerpt($limit, $post)
{
    if ($post->post_excerpt == '') {
        $stripped_content = strip_tags($post->post_content);
    } else {
        $stripped_content = strip_tags($post->post_excerpt);
    }
    $excerpt = explode(' ', $stripped_content, $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt).'...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

/* Admin functions */

function jajdeszep($array, $echo = true)
{
    $out = '<pre>';
    $out .= print_r($array, true);
    $out .= '</pre>';

    if ($echo) {
        echo $out;
    } else {
        return $out;
    }
}

/* Enable PHP in text widget */
add_filter('widget_text', function ($text) {
    if (strpos($text, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $text);
        $text = ob_get_contents();
        ob_end_clean();
    }
    return $text;
}, 99);

// // Register meta box
// function register_banner_meta_box(){
//     add_meta_box( 'banner_image', 'Banner Image', 'uploadBanner', 'post', 'advanced' );
// }
//
// add_action( 'add_meta_boxes', 'register_banner_meta_box' );
//
// // Meta box display callback
// function uploadBanner($post){
//     return '<h2>Valamivalamivalami</h2>';
// }
//
// // Save meta box
// function save_banner_meta_box( $post_id ) {
//     // Save logic goes here. Don't forget to include nonce checks!
// }
// add_action( 'save_post', 'save_banner_meta_box' );
