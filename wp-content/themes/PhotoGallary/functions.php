<?php
require_once('widgets/class-wp-widget-categories.php');

//Theme Support

function theme_setup(){
    //Feature Image Support 

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 150, 150 );
    add_theme_support('post-formats',array('gallery'));
}
add_action('after_setup_theme','theme_setup');

function excerpt_length(){
    return 10;

}
add_filter('excerpt_length','excerpt_length');

// Widget Locations 
function init_widget($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar'
    ));
}
add_action('widgets_init','init_widget');

//Register Widget
function custom_register_widgets(){
    register_widget('WP_Widget_Categoires_Custom');
}
add_action('widgets_init','custom_register_widgets');