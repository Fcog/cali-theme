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

echo $handlebars->render(
	'templates/archive',
	[
		'title' => get_bloginfo( 'name' ),
		'posts' => $the_posts,
	]
);

get_footer();
