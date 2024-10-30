=== Lana Facebook Share ===
Contributors: lanacodes
Tags: facebook, facebook like, facebook share, facebook button
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Facebook like and share button with speed optimization

== Description ==

Facebook like and share button.

Minimal settings page (button settings, post and page type settings) and iframe based button, due to speed optimization.

= Video =

[youtube https://www.youtube.com/watch?v=EA9su47_iQw]

= Position settings with add_filter: =

`<?php
/** content before default: false */
add_filter( 'lana_fb_share_content_before', '__return_false' );

/** content after default: true */
add_filter( 'lana_fb_share_content_after', '__return_true' );`

= Post type settings with filter: =

`/** content before in post default: false */
add_filter( 'lana_fb_share_content_before_in_post', '__return_false' );

/** content after in post default: true */
add_filter( 'lana_fb_share_content_after_in_post', '__return_true' );

/** hide in post default: false */
add_filter( 'lana_fb_share_hide_in_post', '__return_false' );
?>`

= Page type settings with filter: =

`<?php
/** content before in page default: false */
add_filter( 'lana_fb_share_content_before_in_page', '__return_false' );

/** content after in page default: true */
add_filter( 'lana_fb_share_content_after_in_page', '__return_true' );

/** hide in page default: false */
add_filter( 'lana_fb_share_hide_in_page', '__return_false' );
?>`

= Page type and custom page template settings with filter: =

get_page_template_slug(), example: page-contact.php

`<?php
/** content before in page template default: none */
add_filter( 'lana_fb_share_content_before_in_{template_slug}', '__return_false' );
// or
add_filter( 'lana_fb_share_content_before_in_{template_slug}', '__return_true' );

/** content after in page template default: none */
add_filter( 'lana_fb_share_content_after_in_{template_slug}', '__return_false' );
// or
add_filter( 'lana_fb_share_content_after_in_{template_slug}', '__return_true' );

/** hide in page template default: false */
add_filter( 'lana_fb_share_hide_in_{template_slug}', '__return_false' );
?>`

= Add show faces to shortcode: =

`<?php
/**
 * Lana Facebook Share
 * add 'show faces' to shortcode
 *
 * @param $atts
 * @param $layout
 *
 * @return mixed
 */
function lana_fb_share_shortcode_add_show_faces( $atts, $layout ) {

	/** only standard layout */
	if ( $layout != 'standard' ) {
		return $atts;
	}

	$atts['show_faces'] = 'true';
	$atts['height']     = 60;

	return $atts;
}

add_filter( 'lana_fb_share_shortcode_atts', 'lana_fb_share_shortcode_add_show_faces', 10, 2 );
?>`

= Add locale to shortcode: =

`<?php
/**
 * Lana Facebook Share
 * add 'locale' to shortcode
 *
 * @param $atts
 *
 * @return mixed
 */
function lana_fb_share_shortcode_add_locale( $atts ) {

    /** eg. hungarian language */
    $atts['locale'] = 'hu_HU';

    return $atts;
}

add_filter( 'lana_fb_share_shortcode_atts', 'lana_fb_share_shortcode_add_locale', 10, 1 );
?>`

= Available shortcodes: =

`[lana_fb_share]` Facebook like and share button
`[lana_fb_hide]` Hide default Facebook like and share button


= Lana Codes =
[Lana Facebook Share](http://lana.codes/lana-product/lana-facebook-share/)

== Installation ==

= Requires =
* WordPress at least 4.0
* PHP at least 5.3

= Instalation steps =

1. Upload the plugin files to the `/wp-content/plugins/lana-facebook-share` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

= How to use it =
* in `Settings > Lana Facebook Share`, you can set it to automatically add the button to posts or pages.
* in `Posts > Edit`, you can manually add the button to the selected post, add the `[lana_fb_share]` shortcode to the post content.
* in `Pages > Edit`, you can manually add the button to the selected page, add the `[lana_fb_share]` shortcode to the page content.

== Frequently Asked Questions ==

Do you have questions or issues with Lana Facebook Share?
Use these support channels appropriately.

= Lana Codes =
[Support](http://lana.codes/contact/)

= WordPress Forum =
[Support Forum](http://wordpress.org/support/plugin/lana-facebook-share)

== Screenshots ==

1. screenshot-1.jpg
1. screenshot-2.jpg

== Changelog ==

= 1.1.2 =
* reformat code

= 1.1.1 =
* reformat code
* update readme.txt

= 1.1.0 =
* add text domain to plugin header

= 1.0.9 =
* Tested in WordPress 4.8 (compatible)
* Change website to lana.codes

= 1.0.8 =
* add locale to shortcode atts

= 1.0.7 =
* bugfix escape

= 1.0.6 =
* bugfix shortcode height

= 1.0.5 =
* Add shortcode atts filter

= 1.0.4 =
* bugfix Lana Facebook Hide widget
* fix Plugin URI typo

= 1.0.3 =
* Tested in WordPress 4.7 (compatible)
* No change

= 1.0.2 =
* Add minimal settings page (button settings, post and page type settings)

= 1.0.1 =
* Bugfix content after share button in page template filter

= 1.0.0 =
* Added Lana Facebook Share
* Added Lana Facebook Hide widget

== Upgrade Notice ==

= 1.1.2 =
This version changed code format.

= 1.1.1 =
This version changed code format.

= 1.1.0 =
This version added text domain to the plugin header. Upgrade recommended.

= 1.0.9 =
Nothing has changed in this version. Tested in WordPress 4.8 and compatible.

= 1.0.8 =
This version added shortcode locale. Upgrade recommended.

= 1.0.7 =
This version fixes escape bug. Upgrade recommended.

= 1.0.6 =
This version fixes shortcode height bug. Upgrade recommended.

= 1.0.5 =
This version added shortcode filter. Upgrade recommended.

= 1.0.4 =
This version fixes Lana Facebook Hide widget bug. Upgrade recommended.

= 1.0.3 =
Nothing has changed in this version. Tested in WordPress 4.7 and compatible.

= 1.0.2 =
This version added settings page. Upgrade recommended.

= 1.0.1 =
This version fixes content after share button in page template (slug) bug. Upgrade recommended.