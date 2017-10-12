<?php
function custom_title(){
	$name = get_bloginfo ('name');
	$description = get_bloginfo ('description');
	$page_title = wp_title('|', true, 'right');
	$title = $page_title . $name . ' ~ ' . $description;
	return $title;
}


function excerpt($content, $length = 180) {
	$content = wp_strip_all_tags($content);
	$content = substr($content, 0, $length);
	echo $content;
}


add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu top of the page'
	]);
}
?>
