<?php
/**
 * Klalit includes
**/

/*****************
1. SCRIPTS
*****************/

function klalit_scripts() {
	echo '<link rel="stylesheet" href="'.get_bloginfo('stylesheet_directory').'/style.css" />';
}

add_action('wp_head', 'klalit_scripts', 110);


/*****************
2. REGISTRATIONS
*****************/
//Menu locations
register_nav_menus(
	array(
		'top_navigation' => 'Top Menu',
	)
);
?>