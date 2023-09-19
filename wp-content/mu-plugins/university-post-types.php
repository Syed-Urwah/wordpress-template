<?php
function university_post_types(){


//1. register taxonomy for custom post tags
register_taxonomy( 
  'custom-tag', //taxonomy 
  'class', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));



//Campus Post type
register_post_type('class', array(
  'capability_type' => 'class',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'class-9'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Class 9',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));

//2. register taxonomy for custom post tags
register_taxonomy( 
  'custom-x', //taxonomy 
  'class-x', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));



//Campus Post type
register_post_type('class-x', array(
  'capability_type' => 'class-x',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'class-x'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Class X',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));

//3.
register_taxonomy( 
  'custom-xi', //taxonomy 
  'class-xi', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));



//Campus Post type
register_post_type('class-xi', array(
  'capability_type' => 'class-xi',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'class-xi'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Class XI',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));


//4.
register_taxonomy( 
  'custom-xii', //taxonomy 
  'class-xii', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));



//Campus Post type
register_post_type('class-xii', array(
  'capability_type' => 'class-xii',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'class-xii'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Class XII',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));

//5.
register_taxonomy( 
  'custom-b', //taxonomy 
  'adc1', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));


register_post_type('adc1', array(
  'capability_type' => 'adc1',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'adc1'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'ADC I',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));

//6.
register_taxonomy( 
  'custom-bcom', //taxonomy 
  'adc2', //post-type
  array( 
      'hierarchical'  => true, 
      'label'         => __( 'Custom Tags','taxonomy general name'), 
      'singular_name' => __( 'Tag', 'taxonomy general name' ), 
      'rewrite'       => true, 
      'query_var'     => true 
  ));


register_post_type('adc2', array(
  'capability_type' => 'acd2',
  'map_meta_cap' => true,
  'supports' => array('title', 'editor', 'excerpt'),
  'rewrite' => array('slug' => 'adc2'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'ADC II',
    'edit_item' => 'Edit Books',
    'add_new_item' => 'Add New Book',
    'all_items' => 'All Books',
    'tags_item' => 'Tags Book'
  ),
  'menu_icon' => 'dashicons-book'
));

  //Event Post type
// register_post_type('event', array(
//   'supports' => array('title', 'editor', 'excerpt'),
//   'rewrite' => array('slug' => 'events'),
//   'has_archive' => true,
//   'public' => true,
//   'labels' => array(
//     'name' => 'Events',
//     'edit_item' => 'Edit Event',
//     'add_new_item' => 'Add New Event',
//     'all_items' => 'All Events'
//   ),
//   'menu_icon' => 'dashicons-calendar'
// ));

//   //Program post type
//   register_post_type('program', array(
//     'supports' => array('title', 'editor'),
//     //slug only used when it has archive.
//     'rewirte' => array('slug' => 'programs'),
//     'has_archive' => true,
//     'public' => true,
//     'labels' => array(
//       'name' => 'Programs',
//       'edit_item' => 'Edit Program',
//       'add_new_item' => 'Add New Program',
//       'all_items' => 'All Programs'
//     ),
// //     'menu_icon' => 'dashicons-awards'
//   ));

  //Professor post type
  // register_post_type('professor', array(
  //   'supports' => array('title', 'editor', 'thumbnail'),
  //   'public' => true,
  //   'labels' => array(
  //     'name' => 'professors',
  //     'edit_item' => 'Edit professor',
  //     'add_new_item' => 'Add New professor',
  //     'all_items' => 'All professors'
  //   ),
  //   'menu_icon' => 'dashicons-welcome-learn-more'
  // ));
}

add_action('init', 'university_post_types');
 ?>
