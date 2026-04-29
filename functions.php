<?php

function aba_load_assets() {
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'aba_load_assets');

function aba_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Hlavní navigace',
    ));
}
add_action('after_setup_theme', 'aba_setup_theme');

function aba_main_query_changes($query) {
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_search()) {
        $query->set('post_type', array('post', 'page'));
    }

    if ($query->is_category()) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'aba_main_query_changes');

