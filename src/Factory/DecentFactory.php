<?php


namespace DecentProductivity\WpFeatures\Factory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use DecentProductivity\WpFeatures\Interfaces\ModuleFactory;

/**
 * Abstract Factory to get correct service
 */
class DecentFactory {

	public function __construct() {
		$container       = include( __DIR__ . '/../DependencyConfig.php' );
		$this->container = $container;
	}

	public function makeService( string $type ) : ModuleFactory {
		switch ( $type ) {
			case 'shortcode':
			case 'shortcodes':
				return $this->container->get( 'shortcode-factory' );
				break;

			case 'widget':
			case 'widgets':
				return $this->container->get( 'widget-factory' );
				break;

			default:
				break;
		}
	}
}
