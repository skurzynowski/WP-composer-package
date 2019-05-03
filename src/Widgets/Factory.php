<?php

/**
 * Widgets Factory
 */
class Factory {

	function register( string $argument ) {
		switch ( $argument ) {
			case 'LatestPosts':
			case 'latestposts':
			case 'latest-posts':
			case 'latest_posts':
				// code...
				return $this->registerLatestPosts();


			default:
				// code...
				break;
		}
	}

	public function registerLatestPosts( LatestPosts\Register $registerLatestPosts ) {
		return $registerLatestPosts;
	}
}
