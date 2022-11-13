<?php

function scripts()
{

    wp_register_style('style', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all'); 
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app'); 

}
add_action('wp_enqueue_scripts','scripts'); 



require_once(get_template_directory() . '/functions/custom-post-types.php');

/* Theme settings */
add_image_size('related_post', 500, 400, true);
add_image_size('post_listing', 730, 540, true);
add_theme_support('post-thumbnails');
/* END */