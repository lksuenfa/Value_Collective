
<?php
// function to create post types
add_action('init', 'post_types');

function post_types()
{

    // project
    register_post_type('project', array(
        'supports' => array('title', 'editor',  'excerpt', 'thumbnail',),
        'rewrite' => array('slug => projects'),
        'taxonomies' => array('category', 'post_tag'),
        'show_in_rest' => true,
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Projects',
            'all_items' => 'All projects',
            'edit_item' => 'Edit projects',
            'not_found' => 'No projects found',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-art',
    ));

    // team turned to residents
    register_post_type('residents', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug => residents'),
        'taxonomies' => array('category'),
        'show_in_rest' => true,
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Residents',
            'all_items' => 'All residents',
            'edit_item' => 'Edit residents',
            'not_found' => 'No residentsfound',
            'singular_name' => 'Resident'
        ),
        'menu_icon' => 'dashicons-groups',
    ));

    // events
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug => events'),
        'show_in_rest' => true,
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Events',
            'all_items' => 'All events',
            'edit_item' => 'Edit Event',
            'not_found' => 'No Event found',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar',
    ));

    // protocols turned to document
    register_post_type('document', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug => documents'),
        'show_in_rest' => true,
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Documents',
            'all_items' => 'All documents',
            'edit_item' => 'Edit document',
            'not_found' => 'No document found',
            'singular_name' => 'Document'
        ),
        'menu_icon' => 'dashicons-media-document',
    ));


    register_post_type('timeline', array(
        'supports' => array('title', 'editor', 'thumbnail',  'page-attributes', 'excerpt'),
        'rewrite' => array('slug => timeline'),
        'show_in_rest' => true,
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Timeline',
            'all_items' => 'All timeline',
            'edit_item' => 'Edit timeline',
            'not_found' => 'No timeline found',
            'singular_name' => 'Timeline'
        ),
        'menu_icon' => 'dashicons-excerpt-view',
    ));
}
