<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body id="wpbody" <?php body_class(); ?>>

<?php

global $view_engine;

$current_post = $wp_query->get_queried_object();

if ( has_nav_menu( 'primary' ) ) {
	$menu_locations = get_nav_menu_locations();

	$menu_items = wp_get_nav_menu_items( $menu_locations['primary'] );
} else {
	$menu_items = get_pages();
}

$menu_items = array_map(
	function ( $menu_item ) use ( $current_post ) {
		return [
			'title'  => $menu_item->post_title,
			'url'    => get_permalink( $menu_item->ID ),
			'active' => $menu_item->ID === $current_post->ID,
		];
	},
	$menu_items
);

$view_engine->render(
	'@header',
	[
		'title'      => get_bloginfo( 'name' ),
		'url'        => home_url(),
		'menu_items' => $menu_items,
	]
);
