<?php
/* WIDGETS */
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sid-title">',
        'after_title'   => '</h2><!-- /.sid-title --><div class="sid-box">',
    ));
}
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 180, 180 );
register_nav_menu('menu-topo','Menu Topo');
?>