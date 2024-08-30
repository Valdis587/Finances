<?php
/**
 * Finances functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Finances
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finances_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар новости', 'finances' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'finances' ),
			'before_widget' => '<section id="%1$s" class="widget sidebar__widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sidebar__title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'finances_widgets_init' );

function finances_widgets_init_cat() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар каталога', 'finances' ),
			'id'            => 'sidebar-catalog',
			'description'   => esc_html__( 'Add widgets here.', 'finances' ),
			'before_widget' => '<section id="%1$s" class="widget sidebar__widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sidebar__title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'finances_widgets_init_cat' );