<?php

/**
 * ACF Local JSON
 */
add_filter('acf/settings/save_json', function ( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/admin/acf-json';
    return $path;   
});

/**
 * ACF Local JSON - Load Point
 */
add_filter('acf/settings/load_json', function ( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/admin/acf-json';
    return $paths;
});
