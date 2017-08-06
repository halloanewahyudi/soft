<?php
if (function_exists('register_sidebar'))
{
  

    //================================
    // sidebar
    //===============================

    register_sidebar(array(
        'name' => __('sidebar ', 'soft'),
        'description' => __('Description for sidebar widget-area...', 'soft'),
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    //================================
  // HOME
  //===============================
if (function_exists('register_sidebar')){
  register_sidebar(array(
      'name' => __('home opening', 'soft'),
      'description' => __('Description for home opening widget-area...', 'soft'),
      'id' => 'home-opening',
      'before_widget' => '<div id="%1$s" class="home-opening"><div class="container">',
      'after_widget' => '</div></div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
  ));
    // home atas
    register_sidebar(array(
        'name' => __('home atas', 'soft'),
        'description' => __('Description for home 1 widget-area...', 'soft'),
        'id' => 'home-atas',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // home tengah 1
    register_sidebar(array(
        'name' => __('home tengah 1', 'soft'),
        'description' => __('Description for Home tengah 1 widget-area...', 'soft'),
        'id' => 'home-tengah-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // home tengah 2
    register_sidebar(array(
        'name' => __('home tengah 2', 'soft'),
        'description' => __('Description for Home tengah 3 widget-area...', 'soft'),
        'id' => 'home-tengah-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // home tengah 3
    register_sidebar(array(
        'name' => __('home tengah 3', 'soft'),
        'description' => __('Description for Home tengah 3 widget-area...', 'soft'),
        'id' => 'home-tengah-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // home bawah
    register_sidebar(array(
        'name' => __('home bawah ', 'soft'),
        'description' => __('Description for Home bawah widget-area...', 'soft'),
        'id' => 'home-bawah',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

    //================================
    // Footer
    //===============================
    // footer 1
    register_sidebar(array(
        'name' => __('footer 1 ', 'soft'),
        'description' => __('Description for footer 1 widget-area...', 'soft'),
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // footer 2
    register_sidebar(array(
        'name' => __('footer 2 ', 'soft'),
        'description' => __('Description for footer 2 widget-area...', 'soft'),
        'id' => 'footer-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // footer 1
    register_sidebar(array(
        'name' => __('footer 3 ', 'soft'),
        'description' => __('Description for footer 3 widget-area...', 'soft'),
        'id' => 'footer-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}


add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
 ?>
