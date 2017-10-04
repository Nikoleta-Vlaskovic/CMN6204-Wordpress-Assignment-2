<?php
function custom_title(){
	$name = get_bloginfo ('name');
	$description = get_bloginfo ('description');
	$page_title = wp_title();
	$title = $page_title . ' | ' . $name . ' ~ ' . $description;
	return $title;
}
add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu top of the page'
	]);
}
?>
