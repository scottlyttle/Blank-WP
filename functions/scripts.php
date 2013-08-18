<?php
// Load other custom scripts
function blankwp_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'));
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blankwp_scripts' );