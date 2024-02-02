<?php

// Register Custom Post Type "Resources"
if (!function_exists('Resources_custom_post_type')) {

    // Register Custom Post Type
    function Resources_custom_post_type()
    {

        $labels = array(
            'name' => _x('Resources', 'Post Type General Name', 'autism'),
            'singular_name' => _x('Review', 'Post Type Singular Name', 'autism'),
            'menu_name' => __('Resources', 'autism'),
            'name_admin_bar' => __('Resources', 'autism'),
            'archives' => __('Resources Archives', 'autism'),
            'attributes' => __('Resources Attributes', 'autism'),
            'parent_item_colon' => __('Parent Review:', 'autism'),
            'all_items' => __('All Resources', 'autism'),
            'add_new_item' => __('Add New Review', 'autism'),
            'add_new' => __('Add New', 'autism'),
            'new_item' => __('New Review', 'autism'),
            'edit_item' => __('Edit Review', 'autism'),
            'update_item' => __('Update Review', 'autism'),
            'view_item' => __('View Review', 'autism'),
            'view_items' => __('View Resources', 'autism'),
            'search_items' => __('Search Review', 'autism'),
            'not_found' => __('Not found', 'autism'),
            'not_found_in_trash' => __('Not found in Trash', 'autism'),
            'featured_image' => __('Featured Image', 'autism'),
            'set_featured_image' => __('Set featured image', 'autism'),
            'remove_featured_image' => __('Remove featured image', 'autism'),
            'use_featured_image' => __('Use as featured image', 'autism'),
            'insert_into_item' => __('Insert into eview', 'autism'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'autism'),
            'items_list' => __('Resources list', 'autism'),
            'items_list_navigation' => __('Resources list navigation', 'autism'),
            'filter_items_list' => __('Filter Resources list', 'autism'),
        );
        $args = array(
            'label' => __('Resources', 'autism'),
            'description' => __('Four Season Home Products Resources list.', 'autism'),
            'labels' => $labels,
            'supports' => array('title', 'revisions'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-excerpt-view',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('resource', $args);
    }

    add_action('init', 'Resources_custom_post_type', 0);
}



?>