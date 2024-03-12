<?php 
#get css files
function load_scripts() {
    wp_enqueue_style('bootstrap-min',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fancybox.css',get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('main',get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('responsive',get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('animate',get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('w3css','https://www.w3schools.com/w3css/4/w3.css');
    wp_enqueue_script('jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true);wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), 'null', true);wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), 'null', true);wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina.min.js', array(), 'null', true);
    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/modernizr.js', array(), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), 'null', true);
    wp_enqueue_script('fade', get_template_directory_uri() . '/js/fade.js', array(), 'null', true);

}
add_action('wp_enqueue_scripts', 'load_scripts');

//Sidebars - Widgets
add_action('widgets_init', 'fortunato_sidebars');

function fortunato_sidebars() {
    register_sidebar(
        array(
            'name' => 'Banner',
            'id' => 'banner',
            'description' => 'type text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        )
    );

    register_sidebar(
        array(
            'name' => 'About Me',
            'id' => 'about-me',
            'description' => 'About me text',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        )
    );
    register_sidebar(
        array(
            'name' => 'About Me - Second Area',
            'id' => 'about-me2',
            'description' => 'about me paragraph area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<p class="widget-title">',
            'after_title' => '</p>' 
        )
    );
    register_sidebar(
        array(
            'name' => 'Hire Us',
            'id' => 'hire-us',
            'description' => 'Hire us text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        )
    );
    register_sidebar(
        array(
            'name' => 'Contact',
            'id' => 'contact',
            'description' => 'type contact info text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        )
    );
}

register_nav_menus(
    array(
        'primary' => 'The Main Menu',
        'social' => 'The Social Icons Menu'
    )
);

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

?>