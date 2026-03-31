<?php
function myportfolio_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myportfolio_scripts');
function myportfolio_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}
add_action('after_setup_theme', 'myportfolio_setup');


function myportfolio_projects() {
 register_post_type('projects',
array(
'labels' => array(
'name' => __('Projects'),
'singular_name' => __('Project')
),
 'public' => true,
'has_archive' => true,
 'supports' => array('title','editor','thumbnail','excerpt')
)
);
}
add_action('init', 'myportfolio_projects');