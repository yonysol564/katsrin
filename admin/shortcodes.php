<?php
// shortcode
function submenu_shortcode($atts) {

	$atts = shortcode_atts( array(
        'id' => ''
    ), $atts );

    set_query_var('atts' , $atts);

    ob_start();
    	get_template_part('inc/shortcode','submenu');
    return ob_get_clean();
}
add_shortcode( 'submenu', 'submenu_shortcode' );
