<?php

function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function soft_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

add_action('init', 'soft_pagination'); // Add our soft Pagination
// Custom Excerpts
function length_20($length) { // Create 20 Word Callback for Index page Excerpts, call using soft_excerpt('length_20');
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using soft_excerpt('length_40');
function length_40($length) {
    return 40;
}

// Create the Custom Excerpts callback
function soft_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function soft_view_article($more) {
    global $post;
    return '... <a class="more" href="' . get_permalink($post->ID) . '">' . __('More', 'soft') . '</a>';
}

//add_filter('excerpt_more', 'soft_view_article'); // Add 'View Article' button instead of [...] for Excerpts

add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)

remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
// Remove Admin bar
function remove_admin_bar() {
    return false;
}

add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
// Remove 'text/css' from our enqueued stylesheet
function soft_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

add_filter('style_loader_tag', 'soft_style_remove'); // Remove 'text/css' from enqueued stylesheet
// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
?>
