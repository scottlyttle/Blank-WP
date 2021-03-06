<?php
function yabtfw_scripts() {
	// Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yabtfw_scripts' );