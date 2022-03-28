<?php 

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function jquery() 
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'jquery');

function loadJS ()
{
    wp_register_script('customJs', get_template_directory_uri() . '/js/scripts.js', '', 1, true );
    wp_enqueue_script('customJs');
}
add_action('wp_enqueue_scripts', 'loadJS');

// ---------------Navigation Menu

add_theme_support('menus');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
    );

    
    