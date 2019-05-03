<?php

namespace \DecentProductivity\WpFeaturesPackage;
/**
 * Abstract Factory to get correct service
 */
class PackageFactory
{
  public function __construct(string $type)
  {

  }

  public static function make(string $type):Factory{
    switch ($type) {
      case 'shortcode':
        // code...
        break;

      case 'widget':
        // code...
        break;

      default:
        // code...
        break;
    }
  }
}
