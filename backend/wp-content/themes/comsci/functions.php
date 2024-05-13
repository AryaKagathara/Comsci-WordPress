<?php

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'        => 'Theme General Settings',
        'menu_title'        => 'Theme Settings',
        'menu_slug'            => 'theme-general-settings',
        'capability'        => 'edit_posts',
        'redirect'            => false,
        'show_in_graphql'    => true,
    ));
}

add_theme_support('menus');
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);


add_theme_support('post-thumbnails');



/* =====-----===== create service custom post type =====-----===== */
function w3n_custom_post_services()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name'               => _x('Services', 'post type general name'),
        'singular_name'      => _x('service', 'post type singular name'),
        'add_new'            => _x('Add New', 'service'),
        'add_new_item'       => __('Add New service'),
        'edit_item'          => __('Edit service'),
        'new_item'           => __('New service'),
        'all_items'          => __('All Services'),
        'view_item'          => __('View service'),
        'search_items'       => __('Search Services'),
        'not_found'          => __('No Services found'),
        'not_found_in_trash' => __('No Services found in the Trash'),
        'menu_name'          => 'Services'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Services and Service specific data',
        'public'        => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'supports' => $supports,
        'has_archive'   => true,
        'show_in_graphql'       => true,
        'graphql_single_name'   => 'Service',
        'graphql_plural_name'   => 'Services',
        'taxonomies'    => array('post_tag'), // Add this line for tags support
    );
    register_post_type('service', $args);
}
add_action('init', 'w3n_custom_post_services');
/* =====-----===== create service custom post type =====-----===== */



function register_my_menu()
{
    register_nav_menu('primary', __('Primary'));
    register_nav_menu('footer-menu-1', __('FooterMenuLeft'));
    register_nav_menu('footer-menu-2', __('FooterMenuRight'));
}
add_action('init', 'register_my_menu');



/* =====-----===== create project custom post type =====-----===== */
function w3n_custom_post_project()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name'               => _x('Projects', 'post type general name'),
        'singular_name'      => _x('Project', 'post type singular name'),
        'add_new'            => _x('Add New', 'Project'),
        'add_new_item'       => __('Add New Project'),
        'edit_item'          => __('Edit Project'),
        'new_item'           => __('New Project'),
        'all_items'          => __('All Projects'),
        'view_item'          => __('View Project'),
        'search_items'       => __('Search Projects'),
        'not_found'          => __('No Projects found'),
        'not_found_in_trash' => __('No Projects found in the Trash'),
        'menu_name'          => 'Projects'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Projects and Project specific data',
        'public'        => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => $supports,
        'has_archive'   => true,
        'show_in_graphql'       => true,
        'graphql_single_name'   => 'Project',
        'graphql_plural_name'   => 'Projects',
        // 'taxonomies'    => array('post_tag'), // Add this line for tags support
    );
    register_post_type('project', $args);
}
add_action('init', 'w3n_custom_post_project');
/* =====-----===== create project custom post type =====-----===== */




















/* =====-----===== create team member custom post type =====-----===== */
function w3n_custom_post_members()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name'               => _x('Team Members', 'post type general name'),
        'singular_name'      => _x('member', 'post type singular name'),
        'add_new'            => _x('Add New', 'Team Member'),
        'add_new_item'       => __('Add New Team Member'),
        'edit_item'          => __('Edit Team Member'),
        'new_item'           => __('New Team Member'),
        'all_items'          => __('All Team Members'),
        'view_item'          => __('View Team Member'),
        'search_items'       => __('Search Team Members'),
        'not_found'          => __('No Team Members found'),
        'not_found_in_trash' => __('No Team Members found in the Trash'),
        'menu_name'          => 'Team Members'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Team Members and Team Member specific data',
        'public'        => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'supports' => $supports,
        'has_archive'   => true,
        'show_in_graphql'       => true,
        'graphql_single_name'   => 'TeamMember',
        'graphql_plural_name'   => 'TeamMembers',
        'taxonomies'    => array('post_tag'), // Add this line for tags support
    );
    register_post_type('team-members', $args);
}
add_action('init', 'w3n_custom_post_members');
/* =====-----===== create team member custom post type =====-----===== */








/* =====-----===== create team member custom post type =====-----===== */
function w3n_custom_post_industries()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name'               => _x('Industries', 'post type general name'),
        'singular_name'      => _x('Industrie', 'post type singular name'),
        'add_new'            => _x('Add New', 'Industrie'),
        'add_new_item'       => __('Add New Industrie'),
        'edit_item'          => __('Edit Industrie'),
        'new_item'           => __('New Industrie'),
        'all_items'          => __('All Industries'),
        'view_item'          => __('View Industrie'),
        'search_items'       => __('Search Industries'),
        'not_found'          => __('No Industries found'),
        'not_found_in_trash' => __('No Industries found in the Trash'),
        'menu_name'          => 'Industries'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Industries and Industrie specific data',
        'public'        => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'supports' => $supports,
        'has_archive'   => true,
        'show_in_graphql'       => true,
        'graphql_single_name'   => 'Industrie',
        'graphql_plural_name'   => 'Industries',
        'taxonomies'    => array('post_tag'), // Add this line for tags support
    );
    register_post_type('industries', $args);
}
add_action('init', 'w3n_custom_post_industries');
/* =====-----===== create team member custom post type =====-----===== */