<?php
// Shortcode Demo with Nested Capability
function soft_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}
add_shortcode('soft_shortcode_demo', 'soft_shortcode_demo'); // You can place [soft_shortcode_demo] in Pages, Posts now.

// Shortcode Demo with simple <h2> tag
function soft_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
add_shortcode('soft_shortcode_demo_2', 'soft_shortcode_demo_2'); // Place [soft_shortcode_demo_2] in Pages, Posts now.

// GRID BOOTSTRAP===========
function row($atts, $content = null)
{  return '<div class="row">' . do_shortcode($content) . '</row>'; }
add_shortcode('row', 'row');

function style($atts, $content = null)
{  return '<div class="row">' . do_shortcode($content) . '</row>'; }
add_shortcode('row', 'row');

function div($atts, $content = null){
  $atts = shortcode_atts(
		array(
			'class' => '',
		),
		$atts,
		'style'
	);

    return '<div class="'.$atts['class'].'">' .  do_shortcode($content) . '</div>';
}
add_shortcode('style', 'div');

function fa($atts, $content = null){
  $atts = shortcode_atts(
		array(
			'fa' => '',
		),
		$atts,
		'icon'
	);

    return '<i class="fa '.$atts['fa'].'"></i>';
}
add_shortcode('icon', 'fa');

function btn($atts, $content = null){
  $atts = shortcode_atts(
		array(
			'link' => '',
      'style' => '',
      'text' => '',
		),
		$atts,
		'fa'
	);

    return '<a href="'.$atts['link'].'" class="btn '.$atts['style'].'">'.$atts['text'].'</a>';
}
add_shortcode('button', 'btn');


function info($atts, $content = null){
	$atts = shortcode_atts(
		array(
	  'category' => '',
	  'limit'=>'',
      'class' => '',
		),
		$atts,
		'post'
	);
	
	$args=array(
	'category_name'=>$atts['category'],
	'posts_per_page'=>$atts['limit'],
	);
	$query= new WP_Query($args);
	$content='<div class="sc-post">';
	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
			$content.='<div class="sc-post-item '.$atts['class'].'">';
		/*	if(has_post_thumbnail()){
				$content.='<img src="'.get_the_post_thumbnail_url().'" class="img-responsive">';
			}
			*/
			$content.='<h3 class="judul"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
			$content.=get_the_excerpt();
			$content.='</div>';//end sc-post-item--
		}
	}
	$content.='</div>';//end sc-post--
	
	return $content;
}

add_shortcode('post','info');

 ?>
