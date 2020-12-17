<?php

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');//fonction du chargement du logo
add_theme_support('title-tag');

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

function add_custom_class_on_li($classes, $item, $args) {
    if($args->theme_location == 'main'){
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_custom_class_on_li', 1, 3);

add_filter( 'nav_menu_link_attributes', 'menu_add_class', 10, 3 );

function menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}