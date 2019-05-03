<?php

namespace DecentProductivity\WpFeatures\Shortcodes;

/**
 * Shortcode Factory
 */
class Factory {

	private $shorcodes = [];

	function register( string $argument ) {
		switch ( $argument ) {
			case 'about':
			case 'author':
				// code...
				$this->shortcodes[ $argument ]->registerInWordpress();
        
        return $this;
			default:
				// code...
				break;
		}
	}

	public function registerAbout( About\Register $registerAbout ) {
		$this->shortcodes['about'] = $registerAbout;
	}

	public function registerAuthor( Author\Register $registerAuthor ) {
			 $this->shortcodes['author'] = $registerAuthor;
	}

}
