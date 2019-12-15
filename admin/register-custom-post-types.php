<?php

// Register Model Custom Post Type
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Models', 'Post Type General Name', 'sage' ),
        'singular_name'         => _x( 'Model', 'Post Type Singular Name', 'sage' ),
        'menu_name'             => __( 'Models', 'sage' ),
        'name_admin_bar'        => __( 'Model', 'sage' ),
        'archives'              => __( 'Item Archives', 'sage' ),
        'attributes'            => __( 'Item Attributes', 'sage' ),
        'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
        'all_items'             => __( 'All Items', 'sage' ),
        'add_new_item'          => __( 'Add New Item', 'sage' ),
        'add_new'               => __( 'Add New', 'sage' ),
        'new_item'              => __( 'New Item', 'sage' ),
        'edit_item'             => __( 'Edit Item', 'sage' ),
        'update_item'           => __( 'Update Item', 'sage' ),
        'view_item'             => __( 'View Item', 'sage' ),
        'view_items'            => __( 'View Items', 'sage' ),
        'search_items'          => __( 'Search Item', 'sage' ),
        'not_found'             => __( 'Not found', 'sage' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
        'featured_image'        => __( 'Featured Image', 'sage' ),
        'set_featured_image'    => __( 'Set featured image', 'sage' ),
        'remove_featured_image' => __( 'Remove featured image', 'sage' ),
        'use_featured_image'    => __( 'Use as featured image', 'sage' ),
        'insert_into_item'      => __( 'Insert into item', 'sage' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
        'items_list'            => __( 'Items list', 'sage' ),
        'items_list_navigation' => __( 'Items list navigation', 'sage' ),
        'filter_items_list'     => __( 'Filter items list', 'sage' ),
    );
    $args = array(
        'label'                 => __( 'Model', 'sage' ),
        'description'           => __( 'Model Description', 'sage' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'show_in_graphql' => true,
       'graphql_single_name' => 'model',
       'graphql_plural_name' => 'models'
    );
    register_post_type( 'model', $args );
}, 0 );

// Register Video Custom Post Type
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Videos', 'Post Type General Name', 'sage' ),
        'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'sage' ),
        'menu_name'             => __( 'Videos', 'sage' ),
        'name_admin_bar'        => __( 'Video', 'sage' ),
        'archives'              => __( 'Item Archives', 'sage' ),
        'attributes'            => __( 'Item Attributes', 'sage' ),
        'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
        'all_items'             => __( 'All Items', 'sage' ),
        'add_new_item'          => __( 'Add New Item', 'sage' ),
        'add_new'               => __( 'Add New', 'sage' ),
        'new_item'              => __( 'New Item', 'sage' ),
        'edit_item'             => __( 'Edit Item', 'sage' ),
        'update_item'           => __( 'Update Item', 'sage' ),
        'view_item'             => __( 'View Item', 'sage' ),
        'view_items'            => __( 'View Items', 'sage' ),
        'search_items'          => __( 'Search Item', 'sage' ),
        'not_found'             => __( 'Not found', 'sage' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
        'featured_image'        => __( 'Featured Image', 'sage' ),
        'set_featured_image'    => __( 'Set featured image', 'sage' ),
        'remove_featured_image' => __( 'Remove featured image', 'sage' ),
        'use_featured_image'    => __( 'Use as featured image', 'sage' ),
        'insert_into_item'      => __( 'Insert into item', 'sage' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
        'items_list'            => __( 'Items list', 'sage' ),
        'items_list_navigation' => __( 'Items list navigation', 'sage' ),
        'filter_items_list'     => __( 'Filter items list', 'sage' ),
    );
    $args = array(
        'label'                 => __( 'Video', 'sage' ),
        'description'           => __( 'Video Description', 'sage' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-video',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'video', $args );
}, 0 );


// Register Issue Custom Post Type
add_action( 'init', function () {
    $labels = array(
        'name'                  => _x( 'Issues', 'Post Type General Name', 'sage' ),
        'singular_name'         => _x( 'Issue', 'Post Type Singular Name', 'sage' ),
        'menu_name'             => __( 'Issues', 'sage' ),
        'name_admin_bar'        => __( 'Issue', 'sage' ),
        'archives'              => __( 'Item Archives', 'sage' ),
        'attributes'            => __( 'Item Attributes', 'sage' ),
        'parent_item_colon'     => __( 'Parent Item:', 'sage' ),
        'all_items'             => __( 'All Items', 'sage' ),
        'add_new_item'          => __( 'Add New Item', 'sage' ),
        'add_new'               => __( 'Add New', 'sage' ),
        'new_item'              => __( 'New Item', 'sage' ),
        'edit_item'             => __( 'Edit Item', 'sage' ),
        'update_item'           => __( 'Update Item', 'sage' ),
        'view_item'             => __( 'View Item', 'sage' ),
        'view_items'            => __( 'View Items', 'sage' ),
        'search_items'          => __( 'Search Item', 'sage' ),
        'not_found'             => __( 'Not found', 'sage' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
        'featured_image'        => __( 'Featured Image', 'sage' ),
        'set_featured_image'    => __( 'Set featured image', 'sage' ),
        'remove_featured_image' => __( 'Remove featured image', 'sage' ),
        'use_featured_image'    => __( 'Use as featured image', 'sage' ),
        'insert_into_item'      => __( 'Insert into item', 'sage' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'sage' ),
        'items_list'            => __( 'Items list', 'sage' ),
        'items_list_navigation' => __( 'Items list navigation', 'sage' ),
        'filter_items_list'     => __( 'Filter items list', 'sage' ),
    );
    $args = array(
        'label'                 => __( 'Issue', 'sage' ),
        'description'           => __( 'Issue Description', 'sage' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'show_in_graphql' => true,
        'graphql_single_name' => 'issue',
        'graphql_plural_name' => 'issues'
    );
    register_post_type( 'issue', $args );
}, 0 );

