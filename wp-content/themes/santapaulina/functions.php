<?php 

function enqueue() {
    wp_enqueue_style('theme-css', get_template_directory_uri().'/assets/style/index.css', '', false);
    wp_enqueue_style('font-awesome-css', get_template_directory_uri().'/node_modules/font-awesome/css/font-awesome.css', '', false);
    
    wp_enqueue_script('jquery-js', get_template_directory_uri().'/node_modules/jquery/dist/jquery.js', '', '', true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.js', '', '', true );
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '', true );
    wp_enqueue_script('js-counter-up-js', get_template_directory_uri().'/node_modules/js-circle-progress/dist/circle-progress.js', '', '', true );
    wp_enqueue_script('counter-up-js', get_template_directory_uri().'/assets/js/counter-up.js', '', '', true );
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', '', '', true );
}
add_action('wp_enqueue_scripts', 'enqueue');
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array( 'post', 'depoimentos') );
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}
