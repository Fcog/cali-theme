<?php

include_once 'theme-setup.php';

add_action(
	'init',
	function() {
		register_nav_menus(
			[
				'primary' => 'Main Menu',
			]
		);
	}
);
