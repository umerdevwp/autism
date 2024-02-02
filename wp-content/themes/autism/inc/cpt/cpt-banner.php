<?php
/* Custom Post Type Banner */
//////////////////////////////
// Register Custom Post Type "Banner"
if (!function_exists('banner_custom_post_type')) {

    // Register Custom Post Type
    function banner_custom_post_type()
    {

        $labels = array(
            'name' => _x('Banner', 'Post Type General Name', 'autism'),
            'singular_name' => _x('Banner', 'Post Type Singular Name', 'autism'),
            'menu_name' => __('Banner', 'autism'),
            'name_admin_bar' => __('Banner', 'autism'),
            'archives' => __('Banner Archives', 'autism'),
            'attributes' => __('Banner Attributes', 'autism'),
            'parent_item_colon' => __('Parent Banner:', 'autism'),
            'all_items' => __('All Banner', 'autism'),
            'add_new_item' => __('Add New Banner', 'autism'),
            'add_new' => __('Add New', 'autism'),
            'new_item' => __('New Banner', 'autism'),
            'edit_item' => __('Edit Banner', 'autism'),
            'update_item' => __('Update Banner', 'autism'),
            'view_item' => __('View Banner', 'autism'),
            'view_items' => __('View Banner', 'autism'),
            'search_items' => __('Search Banner', 'autism'),
            'not_found' => __('Not found', 'autism'),
            'not_found_in_trash' => __('Not found in Trash', 'autism'),
            'featured_image' => __('Featured Image', 'autism'),
            'set_featured_image' => __('Set featured image', 'autism'),
            'remove_featured_image' => __('Remove featured image', 'autism'),
            'use_featured_image' => __('Use as featured image', 'autism'),
            'insert_into_item' => __('Insert into product', 'autism'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'autism'),
            'items_list' => __('Products list', 'autism'),
            'items_list_navigation' => __('Banner list navigation', 'autism'),
            'filter_items_list' => __('Filter products list', 'autism'),
        );
        $args = array(
            'label' => __('Banner', 'autism'),
            'description' => __('Autism Banner list.', 'autism'),
            'labels' => $labels,
            'supports' => array('title', 'revisions'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-tickets-alt',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('banner', $args);
    }

    add_action('init', 'banner_custom_post_type', 0);
}
?>