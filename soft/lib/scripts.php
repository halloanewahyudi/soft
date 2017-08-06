<?php

function soft_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), ''); // Modernizr
        wp_enqueue_script('jquery'); // Enqueue it!

        wp_register_script('conditionizr', get_template_directory_uri() . '/js/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '');
        wp_enqueue_script('bootstrap'); // Enqueue it!

        wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), ''); // Custom scripts
        wp_enqueue_script('wow'); // Enqueue it!

        wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '');
        wp_enqueue_script('masonry'); // Enqueue it!

        wp_register_script('simple_lightbox', get_template_directory_uri() . '/js/simple-lightbox.min.js', array(), '');
        wp_enqueue_script('simple_lightbox'); // Enqueue it!

        wp_register_script('parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '');
        wp_enqueue_script('parallax'); // Enqueue it!

        wp_register_script('softscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '');
        wp_enqueue_script('softscripts'); // Enqueue it!
    }
}

add_action('init', 'soft_header_scripts'); // Add Custom Scripts to wp_head
// Load soft  conditional scripts
function soft_conditional_scripts() {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

add_action('wp_print_scripts', 'soft_conditional_scripts'); // Add Conditional Page Scripts
// Load soft  styles
function soft_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font_awesome'); // Enqueue it!

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('animate'); // Enqueue it!

    wp_register_style('simplelightbox', get_template_directory_uri() . '/css/simplelightbox.min.css', array(), '1.0', 'all');
    wp_enqueue_style('simplelightbox'); // Enqueue it!

    wp_register_style('soft', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('soft'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'soft_styles'); // Add Theme Stylesheet
?>
