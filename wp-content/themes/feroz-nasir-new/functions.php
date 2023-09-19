<?php

function university_files()
{
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('university_files', get_stylesheet_directory_uri() . '/js/script.js', array('jquery') , '1.0.0' ,  false); 
  wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'university_files');
?>