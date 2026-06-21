<?php
/**
 * Singathiwe Media theme setup.
 *
 * @package Singathiwe_Media
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function singathiwe_media_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 100, 'width' => 380, 'flex-height' => true, 'flex-width' => true ) );
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'singathiwe-media' ),
			'footer'  => __( 'Footer Menu', 'singathiwe-media' ),
		)
	);
}
add_action( 'after_setup_theme', 'singathiwe_media_setup' );

function singathiwe_media_assets() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'singathiwe-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Geist:wght@300;400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'singathiwe-theme', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'singathiwe-pages', get_theme_file_uri( '/site-pages.css' ), array( 'singathiwe-theme' ), $version );
	wp_enqueue_script( 'tailwind-browser', 'https://cdn.tailwindcss.com', array(), null, false );
	wp_enqueue_script( 'iconify', 'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js', array(), '1.0.7', true );
}
add_action( 'wp_enqueue_scripts', 'singathiwe_media_assets' );

function singathiwe_media_nav_links() {
	return array(
		'about'           => __( 'About Us', 'singathiwe-media' ),
		'activations'     => __( 'Activations', 'singathiwe-media' ),
		'marketing'       => __( 'Marketing', 'singathiwe-media' ),
		'creatives'       => __( 'Creatives', 'singathiwe-media' ),
		'digital-systems' => __( 'Digital Systems', 'singathiwe-media' ),
	);
}

function singathiwe_media_fallback_menu() {
	echo '<ul class="primary-menu flex items-center gap-2">';
	foreach ( singathiwe_media_nav_links() as $slug => $label ) {
		$current = is_page( $slug ) ? ' aria-current="page"' : '';
		printf(
			'<li><a class="page-link" href="%1$s"%2$s>%3$s</a></li>',
			esc_url( home_url( '/' . $slug . '/' ) ),
			$current,
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function singathiwe_media_activate_theme() {
	$page_ids = array();

	foreach ( singathiwe_media_nav_links() as $slug => $label ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			$page_id = wp_insert_post(
				array(
					'post_title'  => $label,
					'post_name'   => $slug,
					'post_status' => 'publish',
					'post_type'   => 'page',
				)
			);
		} else {
			$page_id = $page->ID;
		}

		if ( ! is_wp_error( $page_id ) ) {
			$page_ids[ $slug ] = (int) $page_id;
		}
	}

	$menu_name = 'Singathiwe Primary';
	$menu      = wp_get_nav_menu_object( $menu_name );
	$menu_id   = $menu ? $menu->term_id : wp_create_nav_menu( $menu_name );

	if ( ! is_wp_error( $menu_id ) ) {
		$existing_items = wp_get_nav_menu_items( $menu_id );
		$existing_ids   = $existing_items ? wp_list_pluck( $existing_items, 'object_id' ) : array();

		foreach ( $page_ids as $page_id ) {
			if ( ! in_array( (string) $page_id, array_map( 'strval', $existing_ids ), true ) ) {
				wp_update_nav_menu_item(
					$menu_id,
					0,
					array(
						'menu-item-object-id' => $page_id,
						'menu-item-object'    => 'page',
						'menu-item-type'      => 'post_type',
						'menu-item-status'    => 'publish',
					)
				);
			}
		}

		$locations            = get_theme_mod( 'nav_menu_locations', array() );
		$locations['primary'] = (int) $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}

	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'singathiwe_media_activate_theme' );
