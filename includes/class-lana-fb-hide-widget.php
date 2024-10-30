<?php

/**
 * Class Lana_Fb_Hide_Widget
 */
class Lana_Fb_Hide_Widget extends WP_Widget{

	/**
	 * Lana Facebook Hide Widget
	 * constructor
	 */
	public function __construct() {

		$widget_title       = __( 'Lana - Facebook Hide', 'lana-facebook-share' );
		$widget_description = __( 'Hide Facebook share button.', 'lana-facebook-share' );
		$widget_options     = array( 'description' => $widget_description );

		parent::__construct( 'lana_fb_hide', $widget_title, $widget_options );
	}

	/**
	 * Output Widget HTML
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		echo lana_fb_hide_shortcode();
	}
} 