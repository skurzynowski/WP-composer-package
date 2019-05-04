<?php

namespace DecentProductivity\WpFeatures\Interfaces;
use \DecentProductivity\WpFeatures\Shortcodes\About\AcfConfiguration;
/**
 *
 */
abstract class RegisterAbstract {

	public function __construct( AcfConfiguration $acfConfiguration ) {
		$this->acfConfiguration = $acfConfiguration;
	}

	public function registerInWordpress():void {
		$this->registerShortcode();
		add_action( 'wp_enqueue_scripts', array( $this, 'registerScripts' ) );
	}

	public function registerShortcode():void {
		add_shortcode( 'decent' . $this->name, array( $this, 'shortcodeCallback' ) );
	}

	public function registerScripts():void {
		foreach ( $this->cssLocations as $cssLocation ) {
			$cssLocation = '/css/' . $cssLocation . '.css';
			if ( file_exists( $this->registerDir . $cssLocation ) ) {
				$url = $this->createFileUrl( $cssLocation );
				  wp_enqueue_style( 'decent-css-' . $this->name, $url, null, '1.0' );
			}

			foreach ( $this->jsLocations as $jsLocation ) {
				  $jsLocation = '/js/' . $jsLocation . '.js';
				if ( file_exists( $this->registerDir . $jsLocation ) ) {
					$url = $this->createFileUrl( $jsLocation );
					  wp_enqueue_script( 'decent-js-' . $this->name, $url, [ 'jquery' ], '1.0' );
				}
			}
		}
	}

	public function createFileUrl( string $destination ):string {
		$dir  = $this->registerDir;
		$link = str_replace( WP_CONTENT_DIR, WP_CONTENT_URL, $dir );

		return $link . $destination;
	}

	public function shortcodeCallback():string {
		$templateLocation = '/Templates/Main.php';
		if ( file_exists( $this->registerDir . $tamplateLocation ) ) {
			ob_start();
			include( $this->registerDir . $templateLocation );
			return ob_get_clean();
		}
	}

	public function registerActions():void {}

	public function registerFilters():void {}
}
