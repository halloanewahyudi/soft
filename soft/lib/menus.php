<?php
// soft  navigation
function soft_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav navbar-right',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		//'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 2,
		'walker'          => new wp_bootstrap_navwalker()
		)
	);
}

// Register soft  Navigation
function register_soft_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'soft'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'soft'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'soft') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}
add_action('init', 'register_soft_menu'); // Add soft  Menu

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute

 ?>
