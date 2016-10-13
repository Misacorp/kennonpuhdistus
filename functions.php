<?php

function cleansensor_script_enqueue() {

	wp_enqueue_style('materialize-css', get_template_directory_uri() . '/css/materialize.min.css', array(), '1.0', 'all');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script('materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array(jquery), '1.0', true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array(jquery), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'cleansensor_script_enqueue');

?>