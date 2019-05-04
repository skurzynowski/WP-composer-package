<?php

namespace DecentProductivity\WpFeatures\Shortcodes\Author;

use \DecentProductivity\WpFeatures\Interfaces\ModuleShortcode;
use \DecentProductivity\WpFeatures\Interfaces\RegisterAbstract;
/**
 * Register Author Shortcode
 */
class Register extends RegisterAbstract implements ModuleShortcode{
	public $name = 'author';
  public $registerDir = __DIR__;
  public $cssLocations = ['author'];
  public $jsLocations = ['author'];
}
