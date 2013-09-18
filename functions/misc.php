<?php
// Register editor stylesheet
function register_editor_stylesheet() {
    add_editor_style( 'css/editor-style.css' );
}
add_action( 'init', 'register_editor_stylesheet' );

// WordPress Change Login page logo link
function change_login_page_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'change_login_page_url' );