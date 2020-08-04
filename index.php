<?php

get_header();

$the_posts = [];

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$the_posts[] = [
			'title' => get_the_title(),
			'url'   => get_the_permalink(),
		];
	}
}

$view_engine->render(
	'@archive',
	[
		'title' => 'Posts',
		'posts' => $the_posts,
	]
);

get_footer();
