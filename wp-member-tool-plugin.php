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
			'menu_name' => _x( 'Members', 'member_tool' ),
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