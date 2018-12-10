<?php

/* ------------------------------------------
  LOAD SCRIPTS AND STYLES
------------------------------------------- */

function gulps_scripts() {
  
  wp_enqueue_style( 'gulps-style', get_stylesheet_directory_uri() . '/style.min.css' );

  wp_enqueue_script( 'gulps-custom', get_template_directory_uri() . '/js/custom.min.js', array(), null, true );

	wp_enqueue_script( 'gulps-skip-link-focus-fix', get_template_directory_uri() . '/js/vendors.min.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
  }
  
}

add_action( 'wp_enqueue_scripts', 'gulps_scripts' );