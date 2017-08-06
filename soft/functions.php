<?php
/*
 *  Author: Wahyudi| @ane_wahyudi
 *  URL: anewahyudi.com | @ane_wahyudi
 *  Custom functions, support, custom post types and more.
 */

 $lib_includes = [
   'lib/comment.php',   
   'lib/general.php',   
   'lib/images.php',    
   'lib/menus.php',   
   'lib/scripts.php',  
   'lib/shortcode.php', 
   'lib/widgets.php', 
   'lib/wp_bootstrap_navwalker.php', 

 ];

 foreach ($lib_includes as $file) {
   if (!$filepath = locate_template($file)) {
     trigger_error(sprintf(__('Error locating %s for inclusion', 'soft'), $file), E_USER_ERROR);
   }
   require_once $filepath;
 }
 unset($file, $filepath);


 // Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

 ?>
