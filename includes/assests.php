<?php

function blog_assets(){
    wp_enqueue_style('fashion-style', get_template_directory_uri() . "./css/style.css", microtime());
    wp_enqueue_style('fashion-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
}

add_action('wp_enqueue_scripts', 'blog_assets');