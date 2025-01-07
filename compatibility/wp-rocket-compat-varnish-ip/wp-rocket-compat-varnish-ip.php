<?php
/**
 * Plugin Name: WP Rocket | Varnish IP
 * Description: Sets a custom Varnish IP to sync WP Rocket’s cache with.
 * Plugin URI:  https://github.com/wp-media/wp-rocket-helpers/tree/master/compatibility/wp-rocket-compat-varnish-ip/
 * Author:      WP Rocket Support Team
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2018
 */

namespace WP_Rocket\Helpers\compat\varnish_ip;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Return custom Varnish IP
 *
 * @author Arun Basil Lal
 *
 * @param (array) $ips Array containing custom Varnish IP's
 * @return array
 */
function set_custom_varnish_ip( $ips ) {

	if ( ! is_array( $ips ) ) {
        	$ips = (array) $ips;
    	}

	$ips[] = '127.0.0.1';	// Enter your custom Varnish IP here
	// $ips[] = '13.1.2.3:23457';	// Add each new IP as a new line, you can add the port if needed
	
	return $ips;
}
add_filter( 'rocket_varnish_ip', __NAMESPACE__ . '\set_custom_varnish_ip' );
