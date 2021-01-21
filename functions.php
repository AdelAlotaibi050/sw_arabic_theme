<?php

function theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','theme_support');
function load_css() 
{
    $version = wp_get_theme();
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',array(),'4.5.2','all');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',array(),'5.15.2','all');
    wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/style.css',array(),$version->Version,'all');
}
add_action('wp_enqueue_scripts','load_css');

function load_js() 
{
    
    wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js','3.5.1',array(),true);
    wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',array(),'4.5.2',true);
    wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js',array(),'2.6.0',true);
    wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js','1.0.0',array(),true);

}

function setup_menu() {
    $locations = array(
        'primary' => 'Top'
    );
    register_nav_menus($locations);
}
add_action('init','setup_menu');
add_action('wp_enqueue_scripts','load_js');
?>