<?php

function manage_columns( $columns ) {

	unset( $columns[ 'comments' ] );
	unset( $columns[ 'tags' ] );
	unset( $columns[ 'categories' ] );

	return $columns;

}

function column_init() {

	add_filter( 'manage_posts_columns' , 'manage_columns' );

}

add_action( 'admin_init' , 'column_init' );


function init() {

	add_theme_support( 'post-formats', [
		'image',
		'video'
	]);

}

add_action( 'admin_init', 'init' );

function manage_menu() {

	remove_menu_page( 'edit-comments.php' );
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );

	remove_meta_box( 'tagsdiv-post_tag', 'post', 'normal' );
	remove_meta_box( 'categorydiv', 'post', 'normal' );

}

add_action( 'admin_menu', 'manage_menu' );

if( function_exists( 'acf_add_options_page' ) ) {

	$args = [
		'page_title' => 'Other'
	];

	acf_add_options_page( $args );

}

function list_pages() {

	$args = [
		'exclude' => [ 5 ]
	];


	return get_pages( $args );
}

function load_assets() {
	
	wp_enqueue_style( 'main', get_stylesheet_uri() );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'http://code.jquery.com/jquery-1.11.3.min.js', [], false, true );
	wp_enqueue_script( 'core', get_stylesheet_directory_uri() . '/js/core.js', [ 'jquery' ], false, true );

}

add_action( 'wp_enqueue_scripts', 'load_assets' );

function add_support() {

	add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'add_support' );

function register_menus() {

	$menus = [
		'header' => 'Top',
		'footer' => 'Bottom'
	];

	register_nav_menus( $menus );

}

add_action( 'after_setup_theme', 'register_menus' );

?>