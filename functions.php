<?php
//functions page
function my_excerpt_length() {
    return 36;
}

add_filter('excerpt_length', 'my_excerpt_length');
set_post_thumbnail(200, 200);
add_theme_support('post-thumbnail');