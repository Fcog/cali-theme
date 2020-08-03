<?php

get_header();

the_post();

echo $handlebars->render(
	'templates/single',
	[
		'title'        => get_the_title(),
		'post_content' => get_the_content(),
	]
);

get_footer();
