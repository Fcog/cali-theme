<?php

get_header();

the_post();

$view_engine->render(
	'@single',
	[
		'title'        => get_the_title(),
		'post_content' => get_the_content(),
	]
);

get_footer();
