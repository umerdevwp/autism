<?php
/* Custom Post Type Media */
//////////////////////////////
// Register Custom Post Type "Media"
if (!function_exists('custom_post_type')) {

    // Register Custom Post Type
    function custom_post_type()
    {

        $labels = array(
            'name' => _x('Media', 'Post Type General Name', 'autism'),
            'singular_name' => _x('Media', 'Post Type Singular Name', 'autism'),
            'menu_name' => __('Media', 'autism'),
            'name_admin_bar' => __('Media', 'autism'),
            'archives' => __('Media Archives', 'autism'),
            'attributes' => __('Media Attributes', 'autism'),
            'parent_item_colon' => __('Parent Media:', 'autism'),
            'all_items' => __('All Media', 'autism'),
            'add_new_item' => __('Add New Media', 'autism'),
            'add_new' => __('Add New', 'autism'),
            'new_item' => __('New Media', 'autism'),
            'edit_item' => __('Edit Media', 'autism'),
            'update_item' => __('Update Media', 'autism'),
            'view_item' => __('View Media', 'autism'),
            'view_items' => __('View Media', 'autism'),
            'search_items' => __('Search Media', 'autism'),
            'not_found' => __('Not found', 'autism'),
            'not_found_in_trash' => __('Not found in Trash', 'autism'),
            'featured_image' => __('Featured Image', 'autism'),
            'set_featured_image' => __('Set featured image', 'autism'),
            'remove_featured_image' => __('Remove featured image', 'autism'),
            'use_featured_image' => __('Use as featured image', 'autism'),
            'insert_into_item' => __('Insert into product', 'autism'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'autism'),
            'items_list' => __('Products list', 'autism'),
            'items_list_navigation' => __('Media list navigation', 'autism'),
            'filter_items_list' => __('Filter products list', 'autism'),
        );
        $args = array(
            'label' => __('Media', 'autism'),
            'description' => __('Autism Media list.', 'autism'),
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
        register_post_type('media', $args);
    }

    add_action('init', 'custom_post_type', 0);
}
?>