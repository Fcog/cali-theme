<?php

get_header();

echo $handlebars->render(
	'templates/404',
	[
		'title' => 'Page not found.',
	]
);

get_footer();
