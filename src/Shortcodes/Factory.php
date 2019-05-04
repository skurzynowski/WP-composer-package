<?php

namespace DecentProductivity\WpFeatures\Shortcodes;

use DecentProductivity\WpFeatures\Interfaces\ModuleFactory;

/**
 * Shortcode Factory
 */
class Factory implements ModuleFactory{

	private $shorcodes = [];

	function register( string $type ):ModuleFactory {
		switch ( $type ) {
			case 'about':
			case 'author':
				$this->shortcodes[ $type ]->registerInWordpress();

        return $this;
			default:
				
        return $this;
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
