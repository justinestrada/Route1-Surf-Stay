<?php
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/**
 * Admin - Notices
 */
require_once( get_template_directory() . '/admin/notices.php' );

/**
 * Admin - Register Custom Post Types
 */
// require_once( get_template_directory() . '/admin/register-custom-post-types.php' );

/**
 * API - Extend WP REST API
 */
// require_once( get_template_directory() . '/admin/api.php' );

/**
 * API - Extend WP REST API
 */
// require_once( get_template_directory() . '/admin/acf.php' );
