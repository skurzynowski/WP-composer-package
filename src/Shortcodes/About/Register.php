<?php

namespace DecentProductivity\WpFeatures\Shortcodes\About;

use \DecentProductivity\WpFeatures\Interfaces\ModuleShortcode;
use \DecentProductivity\WpFeatures\Interfaces\RegisterAbstract;

/**
 * Register About Shortcode
 */
class Register extends RegisterAbstract implements ModuleShortcode {
	public $name = 'about';
  public $registerDir = __DIR__;
  public $cssLocations = ['about'];
  public $jsLocations = ['about'];

	public function shortcodeCallback():string {
		$templateLocation = '/Templates/Main.php';
		if ( file_exists( $this->registerDir . $tamplateLocation ) ) {
			ob_start();
			include( $this->registerDir . $templateLocation );
			return ob_get_clean();
		}
	}
}
