<?php
function coderslab_enqueue_style() {
	wp_enqueue_style(
	'global',
	get_stylesheet_directory_uri()
			    .	'/css/style.css',
	false);
}
add_action(
	'wp_enqueue_scripts',
	'coderslab_enqueue_style');

	function	coderslab_enqueue_script()	{
					wp_enqueue_script(
					'main',
					get_stylesheet_directory_uri()
																	.	'/app.js',
					'1.0.0',
					true	);
	}
	add_action(
					'wp_enqueue_scripts',
					'coderslab_enqueue_script'	);
