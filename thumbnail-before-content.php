<?php
	/*
		* Plugin Name: Thumbnail Before Content
		* Plugin URI: http://mesklin.net/projects/thumbnail-before-content/
		* Description: Automatically inserts the post thumbnail (featured image) before the post content
		* Version: 0.9
		* Author: Mesklin Net Technologies
		* Author URI: http://mesklin.net/
		* License: GPL2
	*/

	add_filter( 'the_content', 'thumbnail_before_content');
	function thumbnail_before_content($content) {
		global $post;
		$new_content = '<p>' . get_the_post_thumbnail( $post -> ID, 'full' ) . '</p>';

		return $new_content . $content;
	}