<?php 



add_action('init', 'register_car_post_type');
function register_car_post_type()
{
  register_post_type(
    'the-cars',
    array(
      'labels' => array(
        'name' => 'Cars',
        'menu_name' => 'Cars',
        'singular_name' => 'Product',
        'all_items' => 'All Cars'
      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'post-formats', 'revisions'),
      'hierarchical' => false,
      'has_archive' => false,
      'rewrite' => array('slug' => 'cars',  'with_front' => true),
      'menu_position' => 23
    )
  );
}