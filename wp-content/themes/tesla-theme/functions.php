<?php
function coderslab_enqueue_style() {
	wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        ['jquery'],
        null,
        true);

	wp_enqueue_style(
	'global',
	get_stylesheet_directory_uri()
			    .	'/css/style.css',
	false);
}

add_action(
	'wp_enqueue_scripts',
	'coderslab_enqueue_style');

add_theme_support('post-thumbnails');
