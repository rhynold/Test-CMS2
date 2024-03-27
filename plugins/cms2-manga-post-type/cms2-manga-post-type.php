<?php
/*
* Plugin Name: CMS2 Manga Post Type
*/

function cms2_register_post_type() {
$labels = array(
    'name'                     => __( 'Mangas', 'cms2' ),
    'singular_name'            => __( 'Manga', 'cms2' ),
    'add_new'                  => __( 'Add New', 'cms2' ),
    'add_new_item'             => __( 'Add New Manga', 'cms2' ),
    'edit_item'                => __( 'Edit Manga', 'cms2' ),
    'new_item'                 => __( 'New Manga', 'cms2' ),
    'view_item'                => __( 'View Manga', 'cms2' ),
    'view_items'               => __( 'View Mangas', 'cms2' ),
    'search_items'             => __( 'Search Mangas', 'cms2' ),
    'not_found'                => __( 'No Mangas found.', 'cms2' ),
    'not_found_in_trash'       => __( 'No Mangas found in Trash.', 'cms2' ),
    'parent_item_colon'        => __( 'Parent Mangas:', 'cms2' ),
    'all_items'                => __( 'All Mangas', 'cms2' ),
    'archives'                 => __( 'Manga Archives', 'cms2' ),
    'attributes'               => __( 'Manga Attributes', 'cms2' ),
    'insert_into_item'         => __( 'Insert into Manga', 'cms2' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this Manga', 'cms2' ),
    'featured_image'           => __( 'Featured Image', 'cms2' ),
    'set_featured_image'       => __( 'Set featured image', 'cms2' ),
    'remove_featured_image'    => __( 'Remove featured image', 'cms2' ),
    'use_featured_image'       => __( 'Use as featured image', 'cms2' ),
    'menu_name'                => __( 'Mangas', 'cms2' ),
    'filter_items_list'        => __( 'Filter Manga list', 'cms2' ),
    'filter_by_date'           => __( 'Filter by date', 'cms2' ),
    'items_list_navigation'    => __( 'Mangas list navigation', 'cms2' ),
    'items_list'               => __( 'Mangas list', 'cms2' ),
    'item_published'           => __( 'Manga published.', 'cms2' ),
    'item_published_privately' => __( 'Manga published privately.', 'cms2' ),
    'item_reverted_to_draft'   => __( 'Manga reverted to draft.', 'cms2' ),
    'item_scheduled'           => __( 'Manga scheduled.', 'cms2' ),
    'item_updated'             => __( 'Manga updated.', 'cms2' ),
    'item_link'                => __( 'Manga Link', 'cms2' ),
    'item_link_description'    => __( 'A link to an manga.', 'cms2' ),
);

$args = array(
    'labels'                => $labels,
    'description'           => __( 'organize and manage company mangas', 'cms2' ),
    'public'                => true,
    'hierarchical'          => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_admin_bar'     => false,
    'show_in_rest'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-book',
    'capability_type'       => 'post',
    'capabilities'          => array(),
    'supports'              => array( 'excerpt', 'thumbnail', 'title', 'editor' ),
    'taxonomies'            => array(),
    'has_archive'           => false,
    'rewrite'               => array( 'slug' => 'mangas' ),
    'query_var'             => true,
    'can_export'            => true,
    'delete_with_user'      => false,
    'template'              => array(),
    'template_lock'         => false,
);

register_post_type( 'cms2_manga', $args );

}
add_action( 'init', 'cms2_register_post_type' );
