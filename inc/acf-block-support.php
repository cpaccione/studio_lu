<?php

/*
@package StudioLu
	=====================
	ACF BLOCK SUPPORT
	=====================
*/


function register_acf_block_types() {

    // Home Hero
    acf_register_block_type(array(
        'name'              => 'home_hero',
        'title'             =>  __('Home Hero'),
        'description'       =>  __('The block displays a home hero with text and a background image.'),
        'render_template'   =>  'template-parts/blocks/home_hero/home_hero.php',
        'enqueue_assets'    => function() {

            wp_enqueue_style( 'home_hero', get_template_directory_uri() . '/template-parts/blocks/home_hero/home_hero.css', array(), '1.0.0', 'all' );

        },
        'category'          =>  __('layout'),
        'mode'              => 'edit',
        'post_types'        => array('page'),
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-gallery',
            ),
        'keywords'          => array( 'home hero' ),
    ));

    // Home About
    acf_register_block_type(array(
        'name'              => 'home_about',
        'title'             =>  __('Home About'),
        'description'       =>  __('About page with profiles.'),
        'render_template'   =>  'template-parts/blocks/home_about/home_about.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'home_about', get_template_directory_uri() . '/template-parts/blocks/home_about/home_about.css', array(), '1.0.0', 'all' );

        },
        'category'          =>  __('layout'),
        'mode'              => 'edit',
        'post_types'        => array('page'),
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#45545C',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'format-gallery',
            ),
        'keywords'          => array( 'home about' ),
    ));

}