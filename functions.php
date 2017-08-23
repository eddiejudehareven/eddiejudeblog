<?php
//theme set up
function addAssets() { // resources: any css or js files // 
	
	wp_enqueue_style('style', get_stylesheet_uri());
	// adding various functionality to your theme all go in this function 
}


// add_action allows us to fire certain functions on events we specify
// in this case, we fire our custom function addAssets on the wp_enqueue_scripts hook (which fires when user loads page)
add_action('wp_enqueue_scripts', 'addAssets');

