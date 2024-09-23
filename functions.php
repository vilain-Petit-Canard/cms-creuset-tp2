<?php
/**
 * Charger les styles du theme parent
 */
// function ttoc_enqueue_style() {
//     wp_enqueue_style( 'parent-style',
//     get_template_directory_uri() . '/style.css' );
//     }
//     add_action( 'wp_enqueue_scripts', 'ttoc_enqueue_style' );

    function ttoc_enqueue_style() {

        wp_enqueue_style( 'ttoc-parent-style', get_stylesheet_uri(), array( 'twenty-twenty-one-style' ) );
    
    }
    add_action( 'wp_enqueue_scripts', 'ttoc_enqueue_style');

/**
 * suppression de l'editeur gutenberg
 */
function ttoc_supprime_editeur_page() {
    remove_post_type_support( 'page', 'editor' );
    }
    add_action( 'init', 'ttoc_supprime_editeur_page', 15 );