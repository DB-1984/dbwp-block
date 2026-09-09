<?php
// Styles & Scripts

function dbwp_enqueue_styles() {
    wp_enqueue_style(
        'dbwp-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'dbwp-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'dbwp-style',
        get_stylesheet_uri(),
        [ 'dbwp-fonts' ],
        wp_get_theme()->get( 'Version' )
    );

}

add_action( 'wp_enqueue_scripts', 'dbwp_enqueue_styles' );

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

require_once get_theme_file_path( 'assets/includes/contact_form.php' );