<?php
/**
 * Charger les styles du theme parent
 */
function ttoc_enqueue_style() {
    wp_enqueue_style( 'parent-style',
    get_template_directory_uri() . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'ttoc_enqueue_style' );