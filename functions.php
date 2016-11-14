<?php

function cleansensor_script_enqueue() {

	wp_enqueue_style('materialize-css', get_template_directory_uri() . '/css/materialize.min.css', array(), '1.0', 'all');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script('materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array(jquery), '1.0', true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array(jquery), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'cleansensor_script_enqueue');




/*    Run shortcodes in textarea fields     
function my_acf_format_value( $value, $post_id, $field ) {
  
  // run do_shortcode on all textarea values
  $value = do_shortcode($value);
  
  
  // return
  return $value;
}

add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 116);
*/



/*    Allow Advanced Custom Fields text areas to be smaller in editor   */ 
add_filter('admin_head','textarea_temp_fix');
function textarea_temp_fix() {
  echo '<style type="text/css">.acf_postbox .field textarea {min-height:0 !important;}</style>';
}

?>