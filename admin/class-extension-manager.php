<?php
/**
 * @package WPSEO\Admin
 */

/**
 * Represents the class that contains the available extensions for Yoast SEO.
 */
class WPSEO_Extension_Manager {

	const EXTENSION_ENDPOINT = 'https://my.yoast.com/edd-sl-api';

	/** @var WPSEO_Extension[] */
	protected $extensions = array();


	/**
	 * Adds an extension to the manager.
	 *
	 * @param string           $extension_name The extension name.
	 * @param WPSEO_Extension  $extension      The extension value object.
	 */
	public function add( $extension_name, WPSEO_Extension $extension = null ) {
		$this->extensions[ $extension_name ] = $extension;
	}

	/**
	 * Removes an extension from the manager.
	 *
	 * @param string $extension_name The name of the extension to remove.
	 */
	public function remove( $extension_name ) {
		if ( array_key_exists( $extension_name, $this->extensions ) ) {
			unset( $this->extensions[ $extension_name ] );
		}
	}

	/**
	 * Returns the extension for the given extension name.
	 *
	 * @param string $extension_name The name of the extension to get.
	 *
	 * @return null|WPSEO_Extension
	 */
	public function get( $extension_name ) {
		if ( array_key_exists( $extension_name, $this->extensions ) ) {
			return $this->extensions[ $extension_name ];
		}

		return null;
	}

	/**
	 * Returns all set extension.
	 *
	 * @return WPSEO_Extension[]
	 */
	public function get_all() {
		return $this->extensions;
	}

	/**
	 * Checks if the plugin is activated.
	 *
	 * @param string $site_url       The current site url.
	 * @param string $extension_name The extension name to check.
	 *
	 * @return bool
	 */
	public function is_activated( $site_url, $extension_name ) {
		return true;
	}


}