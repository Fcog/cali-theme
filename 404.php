<?php

get_header();

$view_engine->render(
	'@404',
	[
		'title' => 'Page not found.',
	]
);

get_footer();
