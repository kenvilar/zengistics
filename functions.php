<?php

if ( ! function_exists( 'zengistics_child_theme_enqueue_styles' ) ) {
	function zengistics_child_theme_enqueue_styles() {
		$theme_dir     = get_stylesheet_directory();
		$ver_style_css = file_exists( $theme_dir . '/style.css' ) ? filemtime( $theme_dir . '/style.css' ) : null;

		/*wp_enqueue_style(
			'zengistics-childstyle',
			get_stylesheet_uri(),
			[],
			$ver_style_css
		);*/
	}

	add_action( 'wp_enqueue_scripts', 'zengistics_child_theme_enqueue_styles' );
}