<?php

namespace DecentProductivity\WpFeatures\Interfaces;

/**
 * Intarface for module factories
 */
interface ModuleFactory
{
  public function register(string $type):self;
}
