<?php


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

//  function set_excerpt_length(){
//      return 25;
//  }
//  add_filter('excerpt_length','set_excerpt_length'); 
 