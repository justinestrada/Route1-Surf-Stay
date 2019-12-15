<?php

add_action('admin_notices', function () {
    $plugin_messages = array();
    $required_plugins = array();

    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    $required_plugins = array(
        array(
            'name'=>'Advanced Custom Fields PRO',
            'download' => 'https://www.advancedcustomfields.com/pro/',
            'path'=>'advanced-custom-fields-pro/acf.php'
        ),
        // array(
        //     'name'=>'WooCommerce',
        //     'download' => 'https://wordpress.org/plugins/woocommerce/',
        //     'path'=>'woocommerce/woocommerce.php'
        // ),
        array(
            'name'=>'WP REST API Menus',
            'download' => 'https://wordpress.org/plugins/wp-api-menus/',
            'path'=>'wp-api-menus/wp-api-menus.php'
        ),
    );
    
    foreach ($required_plugins as $this_plugin) {
        // Check if plugin exists
        if ( ! is_plugin_active( $this_plugin['path'] )) {
            $plugin_messages[] = 'This theme requires you to install & activate: <a href="' . $this_plugin['download'] . '" title="" >' . $this_plugin['name'] . '</a>!';
        }
    }

    if(count($plugin_messages) > 0) {
        foreach($plugin_messages as $message) {
            echo '<div class="notice notice-error is-dismissible"><p>' . $message . '</p></div>';
        }
    }

});

