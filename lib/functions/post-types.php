<?php

/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Rotator post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function be_register_rotator_post_type() {

    $labels = array(
        'name' => _x( 'Chapter Pages', 'chapter_page' ),
        'singular_name' => _x( 'Chapter Page', 'chapter_page' ),
        'add_new' => _x( 'Add New', 'chapter_page' ),
        'add_new_item' => _x( 'Add New Chapter Page', 'chapter_page' ),
        'edit_item' => _x( 'Edit Chapter Page', 'chapter_page' ),
        'new_item' => _x( 'New Chapter Page', 'chapter_page' ),
        'view_item' => _x( 'View Chapter Page', 'chapter_page' ),
        'search_items' => _x( 'Search Chapter Pages', 'chapter_page' ),
        'not_found' => _x( 'No chapter pages found', 'chapter_page' ),
        'not_found_in_trash' => _x( 'No chapter pages found in Trash', 'chapter_page' ),
        'parent_item_colon' => _x( 'Parent Chapter Page:', 'chapter_page' ),
        'menu_name' => _x( 'Chapter Pages', 'chapter_page' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 100,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array(
            'slug' => 'chapter',
            'with_front' => true,
            'feeds' => false,
            'pages' => false
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'chapter_page', $args );

}
add_action( 'init', 'be_register_rotator_post_type' );