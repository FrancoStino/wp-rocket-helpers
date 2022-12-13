<?php
/**
 * Plugin Name: WP Rocket | No LazyLoad for Mobile Devices
 * Description: Disables LazyLoad for mobile devices when Separate Cache for Mobile devices option is active.
 * Plugin URI:  https://github.com/wp-media/wp-rocket-helpers/tree/master/lazyload/wp-rocket-no-lazyload-mobile-no-cache/
 * Author:      WP Rocket Support Team
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2018
 */

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Disable LazyLoad on mobile devices (as detected by WordPress)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_is_mobile/
 */
if ( wp_is_mobile() ) {
	add_filter( 'do_rocket_lazyload', '__return_false' );
}
