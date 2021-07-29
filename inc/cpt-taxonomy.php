<?php

//CUSTOM POST TYPES
function nf_register_custom_post_types() {
    
    // Register Concerts
    $labels = array(
        'name'                  => _x( 'Concerts', 'post type general name' ),
        'singular_name'         => _x( 'Concert', 'post type singular name'),
        'menu_name'             => _x( 'Concerts', 'admin menu' ),
        'name_admin_bar'        => _x( 'Concert', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'concert' ),
        'add_new_item'          => __( 'Add New Concert' ),
        'new_item'              => __( 'New Concert' ),
        'edit_item'             => __( 'Edit Concert' ),
        'view_item'             => __( 'View Concerts' ),
        'all_items'             => __( 'All Concerts' ),
        'search_items'          => __( 'Search Concerts' ),
        'parent_item_colon'     => __( 'Parent Concerts:' ),
        'not_found'             => __( 'No concerts found.' ),
        'not_found_in_trash'    => __( 'No concerts found in Trash.' ),
        'archives'              => __( 'Concert Archives'),
        'insert_into_item'      => __( 'Insert into concerts'),
        'uploaded_to_this_item' => __( 'Uploaded to this concerts'),
        'filter_item_list'      => __( 'Filter concerts list'),
        'items_list_navigation' => __( 'Concert list navigation'),
        'items_list'            => __( 'Concert list'),
        'featured_image'        => __( 'Concert featured image'),
        'set_featured_image'    => __( 'Set concert featured image'),
        'remove_featured_image' => __( 'Remove concert featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'concerts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-tickets-alt',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'nf-concert', $args );

    // Register Testimonial
    $labels = array(
        'name'                  => _x( 'Testimonial', 'post type general name' ),
        'singular_name'         => _x( 'Testimonial', 'post type singular name'),
        'menu_name'             => _x( 'Testimonial', 'admin menu' ),
        'name_admin_bar'        => _x( 'Testimonial', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'testimonial' ),
        'add_new_item'          => __( 'Add New Testimonial' ),
        'new_item'              => __( 'New Testimonial' ),
        'edit_item'             => __( 'Edit Testimonial' ),
        'view_item'             => __( 'View Testimonial' ),
        'all_items'             => __( 'All Testimonials' ),
        'search_items'          => __( 'Search Testimonial' ),
        'parent_item_colon'     => __( 'Parent Testimonial:' ),
        'not_found'             => __( 'No testimonial found.' ),
        'not_found_in_trash'    => __( 'No testimonial found in Trash.' ),
        'archives'              => __( 'Testimonial Archives'),
        'insert_into_item'      => __( 'Insert into testimonial'),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial'),
        'filter_item_list'      => __( 'Filter testimonial list'),
        'items_list_navigation' => __( 'Testimonial list navigation'),
        'items_list'            => __( 'Testimonial list'),
        'featured_image'        => __( 'Testimonial featured image'),
        'set_featured_image'    => __( 'Set testimonial featured image'),
        'remove_featured_image' => __( 'Remove testimonial featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-status',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'nf-testimonial', $args );


    // Register Foote Notes
    $labels = array(
        'name'                  => _x( 'Foote Notes', 'post type general name' ),
        'singular_name'         => _x( 'Foote Note', 'post type singular name'),
        'menu_name'             => _x( 'Foote Notes', 'admin menu' ),
        'name_admin_bar'        => _x( 'Foote Note', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'foote notes' ),
        'add_new_item'          => __( 'Add New Foote Note' ),
        'new_item'              => __( 'New Foote Note' ),
        'edit_item'             => __( 'Edit Foote Note' ),
        'view_item'             => __( 'View Foote Note' ),
        'all_items'             => __( 'All Foote Notes' ),
        'search_items'          => __( 'Search Foote Notes' ),
        'parent_item_colon'     => __( 'Parent Foote Note:' ),
        'not_found'             => __( 'No foote note found.' ),
        'not_found_in_trash'    => __( 'No foote note found in Trash.' ),
        'archives'              => __( 'Foote Note Archives'),
        'insert_into_item'      => __( 'Insert into foote notes'),
        'uploaded_to_this_item' => __( 'Uploaded to this foote note'),
        'filter_item_list'      => __( 'Filter foote notes list'),
        'items_list_navigation' => __( 'Foote Notes list navigation'),
        'items_list'            => __( 'Foote Notes list'),
        'featured_image'        => __( 'Foote Note featured image'),
        'set_featured_image'    => __( 'Set foote note featured image'),
        'remove_featured_image' => __( 'Remove foote note featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'foote-notes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-chat',
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'nf-foote-note', $args );

    // Register Hero Slider
    $labels = array(
        'name'                  => _x( 'Hero Slider', 'post type general name' ),
        'singular_name'         => _x( 'Slide', 'post type singular name'),
        'menu_name'             => _x( 'Hero Slider', 'admin menu' ),
        'name_admin_bar'        => _x( 'Slide', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'slide' ),
        'add_new_item'          => __( 'Add New slide' ),
        'new_item'              => __( 'New slide' ),
        'edit_item'             => __( 'Edit Slide' ),
        'view_item'             => __( 'View Slide' ),
        'all_items'             => __( 'All Slides' ),
        'search_items'          => __( 'Search Slides' ),
        'parent_item_colon'     => __( 'Parent Slides:' ),
        'not_found'             => __( 'No slide found.' ),
        'not_found_in_trash'    => __( 'No slide found in Trash.' ),
        'archives'              => __( 'Hero Slider Archive'),
        'insert_into_item'      => __( 'Insert into Hero Slider'),
        'uploaded_to_this_item' => __( 'Uploaded to this Hero Slider'),
        'filter_item_list'      => __( 'Filter Hero Slider list'),
        'items_list_navigation' => __( 'Hero Slider list navigation'),
        'items_list'            => __( 'Hero Slider list'),
        'featured_image'        => __( 'Slide featured image'),
        'set_featured_image'    => __( 'Set slide featured image'),
        'remove_featured_image' => __( 'Remove slide featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hero-slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'nf-hero-slider', $args );


    // Register Youtube Videos
    $labels = array(
        'name'                  => _x( 'Youtube Video', 'post type general name' ),
        'singular_name'         => _x( 'Youtube Video', 'post type singular name'),
        'menu_name'             => _x( 'Youtube Videos', 'admin menu' ),
        'name_admin_bar'        => _x( 'Youtube Video', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Youtube Video' ),
        'add_new_item'          => __( 'Add New Youtube Video' ),
        'new_item'              => __( 'New Youtube Video' ),
        'edit_item'             => __( 'Edit Youtube Video' ),
        'view_item'             => __( 'View Youtube Video' ),
        'all_items'             => __( 'All Youtube Videos' ),
        'search_items'          => __( 'Search Youtube Videos' ),
        'parent_item_colon'     => __( 'Parent Youtube Videos:' ),
        'not_found'             => __( 'No youtube video found.' ),
        'not_found_in_trash'    => __( 'No youtube video found in Trash.' ),
        'archives'              => __( 'Youtube Video Archive'),
        'insert_into_item'      => __( 'Insert into Youtube Video'),
        'uploaded_to_this_item' => __( 'Uploaded to this Youtube Video'),
        'filter_item_list'      => __( 'Filter Youtube Video list'),
        'items_list_navigation' => __( 'Youtube Video list navigation'),
        'items_list'            => __( 'Youtube Video list'),
        'featured_image'        => __( 'Youtube Video featured image'),
        'set_featured_image'    => __( 'Set Youtube Video featured image'),
        'remove_featured_image' => __( 'Remove Youtube Video featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'youtube-video' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title'),
    );

    register_post_type( 'nf-youtube-video', $args );


    // Register Bio
    $labels = array(
        'name'                  => _x( 'Bio', 'post type general name' ),
        'singular_name'         => _x( 'Bio', 'post type singular name'),
        'menu_name'             => _x( 'Bio', 'admin menu' ),
        'name_admin_bar'        => _x( 'Bio', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Bio' ),
        'add_new_item'          => __( 'Add New Bio' ),
        'new_item'              => __( 'New Bio' ),
        'edit_item'             => __( 'Edit Bio' ),
        'view_item'             => __( 'View Bio' ),
        'all_items'             => __( 'All Bios' ),
        'search_items'          => __( 'Search Bios' ),
        'parent_item_colon'     => __( 'Parent Bio:' ),
        'not_found'             => __( 'No bio found.' ),
        'not_found_in_trash'    => __( 'No bio found in Trash.' ),
        'archives'              => __( 'Bio Archive'),
        'insert_into_item'      => __( 'Insert into Bio'),
        'uploaded_to_this_item' => __( 'Uploaded to this Bio'),
        'filter_item_list'      => __( 'Filter Bio list'),
        'items_list_navigation' => __( 'Bio list navigation'),
        'items_list'            => __( 'Bio list'),
        'featured_image'        => __( 'Bio featured image'),
        'set_featured_image'    => __( 'Set Bio featured image'),
        'remove_featured_image' => __( 'Remove Bio featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'bio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array( 'title'),
    );

    register_post_type( 'nf-bio', $args );

    // Register Spotify Embed
    $labels = array(
        'name'                  => _x( 'Music Player', 'post type general name' ),
        'singular_name'         => _x( 'Music Player', 'post type singular name'),
        'menu_name'             => _x( 'Music Player', 'admin menu' ),
        'name_admin_bar'        => _x( 'Music Player', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Music Player' ),
        'add_new_item'          => __( 'Add New Music Player' ),
        'new_item'              => __( 'New Music Player' ),
        'edit_item'             => __( 'Edit Music Player' ),
        'view_item'             => __( 'View Music Player' ),
        'all_items'             => __( 'All Music Players' ),
        'search_items'          => __( 'Search Music Players' ),
        'parent_item_colon'     => __( 'Parent Music Player:' ),
        'not_found'             => __( 'No music player found.' ),
        'not_found_in_trash'    => __( 'No music player found in Trash.' ),
        'archives'              => __( 'Music Player Archive'),
        'insert_into_item'      => __( 'Insert into Music Player'),
        'uploaded_to_this_item' => __( 'Uploaded to this Music Player'),
        'filter_item_list'      => __( 'Filter Music Player list'),
        'items_list_navigation' => __( 'Music Player list navigation'),
        'items_list'            => __( 'Music Player list'),
        'featured_image'        => __( 'Music Player featured image'),
        'set_featured_image'    => __( 'Set Music Player featured image'),
        'remove_featured_image' => __( 'Remove Music Player featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'music-player' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-audio',
        'supports'           => array( 'title'),
    );

    register_post_type( 'nf-music-player', $args );

}
add_action( 'init', 'nf_register_custom_post_types' );



//CUSTOM TAXONOMIES
function nf_register_taxonomies() {

    // Add Service Taxonomy
    $labels = array(
        'name'              => _x( 'Foote Note Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Foote Note Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Foote Note Categories' ),
        'all_items'         => __( 'All Foote Notes Categories' ),
        'parent_item'       => __( 'Parent Foote Note Category' ),
        'parent_item_colon' => __( 'Parent Foote Note Category:' ),
        'edit_item'         => __( 'Edit Foote Note Category' ),
        'view_item'         => __( 'View Foote Notes Category' ),
        'update_item'       => __( 'Update Foote Note Category' ),
        'add_new_item'      => __( 'Add New Foote Note Category' ),
        'new_item_name'     => __( 'New Foote Note Category Name' ),
        'menu_name'         => __( 'Foote Note Category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'foote-notes-categories' ),
    );
    register_taxonomy( 'nf-foote-note-category', array( 'nf-foote-note' ), $args );

    // Add Testimonial Taxonomy
    $labels = array(
        'name'              => _x( 'Testimonial Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Testimonial Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Testimonial Categories' ),
        'all_items'         => __( 'All Testimonial Category' ),
        'parent_item'       => __( 'Parent Testimonial Category' ),
        'parent_item_colon' => __( 'Parent Testimonial Category:' ),
        'edit_item'         => __( 'Edit Testimonial Category' ),
        'view_item'         => __( 'View Testimonial Category' ),
        'update_item'       => __( 'Update Testimonial Category' ),
        'add_new_item'      => __( 'Add New Testimonial Category' ),
        'new_item_name'     => __( 'New Testimonial Category Name' ),
        'menu_name'         => __( 'Testimonial Category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'testimonial-categories' ),
    );
    register_taxonomy( 'nf-testimonial-category', array( 'nf-testimonial' ), $args );
}
add_action( 'init', 'nf_register_taxonomies');

//Flushing permalinks in case of new theme...
function nf_rewrite_flush() {
    nf_register_custom_post_types();
    nf_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'nf_rewrite_flush' );