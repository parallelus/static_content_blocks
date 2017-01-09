<?php
/*
Plugin Name: Static Content Blocks
Plugin URI: http://para.llel.us
Description: Content sections to easily add content to theme sections.
Author: Parallelus
Author URI: http://para.llel.us
Version: 1.0.4
*/

if (!function_exists('the_static_block')) {
	require_once( plugin_dir_path( __FILE__ ) . 'post-type-static-block.php' );
}