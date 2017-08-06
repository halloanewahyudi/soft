<?php
if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 960, '', true); // Large Thumbnail
    add_image_size('medium', 600, '', true); // Medium Thumbnail
    add_image_size('small', 300, '', true); // Small Thumbnail
    add_image_size('custom-size', 1280, 768, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
   add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	//'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));

    add_theme_support( 'custom-logo', array(
		'flex-width' => true,
	) );

    // Add Support for Custom Header - Uncomment below if you're going to use
    add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('soft', get_template_directory() . '/languages');
}
 ?>
