<?php

/*
Plugin Name: Daisy Member Tool Content
Plugin URI: http://www.daisy.org/
Description: Used by millions to make WP better.
Author: Bradford Knowton
Version: 1.16
Author URI: http://bradknowlton.com/
License: GPLv2 or later

*/

class WPMemberToolPlugin {

	/*--------------------------------------------*
	 * Constants
	 *--------------------------------------------*/
	const name = 'WP Member Tool Plugin';
	const slug = 'wp_member_tool_plugin';

	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_wp_member_tool_plugin' ) );
	}

	/**
	 * Runs when the plugin is initialized
	 */
	function init_wp_member_tool_plugin() {
		// Load JavaScript and stylesheets
		$this->register_scripts_and_styles();


		if ( is_admin() ) {
			//this will run when in the WordPress admin
		} else {
			//this will run when on the frontend
		}

		$labels = array(
			'name' => _x( 'Member Tools', 'member_tool' ),
			'singular_name' => _x( 'Member Tool', 'member_tool' ),
			'add_new' => _x( 'Add New', 'member_tool' ),
			'add_new_item' => _x( 'Add New Member Tool', 'member_tool' ),
			'edit_item' => _x( 'Edit Member Tool', 'member_tool' ),
			'new_item' => _x( 'New Member Tool', 'member_tool' ),
			'view_item' => _x( 'View Member Tool', 'member_tool' ),
			'search_items' => _x( 'Search Member Tools', 'member_tool' ),
			'not_found' => _x( 'No Member Tool found', 'member_tool' ),
			'not_found_in_trash' => _x( 'No Member Tool found in Trash', 'member_tool' ),
			'parent_item_colon' => _x( 'Parent Member Tool:', 'member_tool' ),
			'menu_name' => _x( 'Tools & Services', 'member_tool' ),
		);
		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title', 'author', 'revisions' ), // 'editor',  'custom-fields',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-hammer'
		);
		register_post_type( 'member_tool', $args );

		$labels = array(
			'name' => _x( 'Tool Categories', 'tool_categories' ),
			'singular_name' => _x( 'Tool Category', 'tool_categories' ),
			'search_items' => _x( 'Search Tool Categories', 'tool_categories' ),
			'popular_items' => _x( 'Popular Tool Categories', 'tool_categories' ),
			'all_items' => _x( 'All Tool Categories', 'tool_categories' ),
			'parent_item' => _x( 'Parent Tool Category', 'tool_categories' ),
			'parent_item_colon' => _x( 'Parent Tool Category:', 'tool_categories' ),
			'edit_item' => _x( 'Edit Tool Category', 'tool_categories' ),
			'update_item' => _x( 'Update Tool Category', 'tool_categories' ),
			'add_new_item' => _x( 'Add New Tool Category', 'tool_categories' ),
			'new_item_name' => _x( 'New Tool Category', 'tool_categories' ),
			'separate_items_with_commas' => _x( 'Separate tool categories with commas', 'tool_categories' ),
			'add_or_remove_items' => _x( 'Add or remove Tool Categories', 'tool_categories' ),
			'choose_from_most_used' => _x( 'Choose from most used Tool Categories', 'tool_categories' ),
			'menu_name' => _x( 'Tool Categories', 'tool_categories' ),
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true,
			'show_admin_column' => false,
			'hierarchical' => false,
			'rewrite' => true,
			'query_var' => true
		);
		register_taxonomy( 'tool_categories', array('member_tool'), $args );

	}


	/**
	 * Registers and enqueues stylesheets for the administration panel and the
	 * public facing site.
	 */
	private function register_scripts_and_styles() {
		if ( is_admin() ) {

		} else {

		} // end if/else
	} // end register_scripts_and_styles

} // end class

new WPMemberToolPlugin();