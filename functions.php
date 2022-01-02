<?php 
function FU_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri());

	/*wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array());*/

}
add_action( 'wp_enqueue_scripts', 'FU_scripts' );
 ?>