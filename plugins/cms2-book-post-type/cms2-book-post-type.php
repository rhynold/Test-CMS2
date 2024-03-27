<?php
/*
* Plugin Name: CMS2 Book Post Type
*/

add_action( 'init', 'wpdocs_register_announcement_cpt' );

function wpdocs_register_announcement_cpt() {

$labels = array(

    'name'                     => __( 'Announcements', 'TEXTDOMAINHERE' ),
    'singular_name'            => __( 'Announcement', 'TEXTDOMAINHERE' ),
    'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
    'add_new_item'             => __( 'Add New Announcement', 'TEXTDOMAINHERE' ),
    'edit_item'                => __( 'Edit Announcement', 'TEXTDOMAINHERE' ),
    'new_item'                 => __( 'New Announcement', 'TEXTDOMAINHERE' ),
    'view_item'                => __( 'View Announcement', 'TEXTDOMAINHERE' ),
    'view_items'               => __( 'View Announcements', 'TEXTDOMAINHERE' ),
    'search_items'             => __( 'Search Announcements', 'TEXTDOMAINHERE' ),
    'not_found'                => __( 'No Announcements found.', 'TEXTDOMAINHERE' ),
    'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'TEXTDOMAINHERE' ),
    'parent_item_colon'        => __( 'Parent Announcements:', 'TEXTDOMAINHERE' ),
    'all_items'                => __( 'All Announcements', 'TEXTDOMAINHERE' ),
    'archives'                 => __( 'Announcement Archives', 'TEXTDOMAINHERE' ),
    'attributes'               => __( 'Announcement Attributes', 'TEXTDOMAINHERE' ),
    'insert_into_item'         => __( 'Insert into Announcement', 'TEXTDOMAINHERE' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'TEXTDOMAINHERE' ),
    'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
    'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
    'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
    'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
    'menu_name'                => __( 'Announcements', 'TEXTDOMAINHERE' ),
    'filter_items_list'        => __( 'Filter Announcement list', 'TEXTDOMAINHERE' ),
    'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
    'items_list_navigation'    => __( 'Announcements list navigation', 'TEXTDOMAINHERE' ),
    'items_list'               => __( 'Announcements list', 'TEXTDOMAINHERE' ),
    'item_published'           => __( 'Announcement published.', 'TEXTDOMAINHERE' ),
    'item_published_privately' => __( 'Announcement published privately.', 'TEXTDOMAINHERE' ),
    'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'TEXTDOMAINHERE' ),
    'item_scheduled'           => __( 'Announcement scheduled.', 'TEXTDOMAINHERE' ),
    'item_updated'             => __( 'Announcement updated.', 'TEXTDOMAINHERE' ),
    'item_link'                => __( 'Announcement Link', 'TEXTDOMAINHERE' ),
    'item_link_description'    => __( 'A link to an announcement.', 'TEXTDOMAINHERE' ),

);

$args = array(

    'labels'                => $labels,
    'description'           => __( 'organize and manage company announcements', 'TEXTDOMAINHERE' ),
    'public'                => false,
    'hierarchical'          => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_admin_bar'     => false,
    'show_in_rest'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-megaphone',
    'capability_type'       => 'post',
    'capabilities'          => array(),
    'supports'              => array( 'title', 'editor', 'revisions' ),
    'taxonomies'            => array(),
    'has_archive'           => false,
    'rewrite'               => array( 'slug' => 'cpar_announcement' ),
    'query_var'             => true,
    'can_export'            => true,
    'delete_with_user'      => false,
    'template'              => array(),
    'template_lock'         => false,

);

register_post_type( 'wpdocs_register_announcement_cpt', $args );

}