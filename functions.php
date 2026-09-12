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

    wp_enqueue_style(
        'aos',
        get_theme_file_uri( '/assets/vendor/css/aos.css' ),
        [],
        '2.3.4'
    );

    wp_enqueue_script(
        'aos',
        get_theme_file_uri( '/assets/vendor/js/aos.js' ),
        [],
        '2.3.4',
        true
    );

    wp_enqueue_script(
        'main',
        get_theme_file_uri( '/assets/js/main.js' ),
        [ 'aos' ],
        wp_get_theme()->get( 'Version' ),
        true
    );

}

add_action( 'wp_enqueue_scripts', 'dbwp_enqueue_styles' );

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

require_once get_theme_file_path( 'assets/includes/contact_form.php' );