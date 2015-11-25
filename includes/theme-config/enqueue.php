<?php
if ( !function_exists('eemjii_enqueue')):
    function eeimjii_enqueue () {
        // Theme config
        wp_enqueue_style( 'eemjii-theme-config', get_stylesheet_uri() );

        // Theme styles
        wp_enqueue_style( 'eemjii-theme-styles', get_stylesheet_directory_uri() . '/css/app.min.css' );


        // Zurb Foundation config
        wp_register_script('foundation.config', get_stylesheet_directory_uri() .
    '/js/src/foundation/foundation.config.js');
        wp_enqueue_script('foundation.config');


    }

    add_action('wp_enqueue_scripts', 'eemjii_enqueue');
endif;