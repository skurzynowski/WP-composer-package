<?php

namespace DecentProductivity\WpFeatures\Interfaces;

/**
 * Intarface for module shortcode
 */
interface ModuleShortcode {
	public function registerInWordpress():void;
	public function registerShortcode():void;
	public function registerScripts():void;
}
