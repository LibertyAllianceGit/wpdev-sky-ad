<?php
/*
Plugin Name: WP Developers | Sky Ad Fix
Plugin URI: http://wpdevelopers.com
Description: Quick and easy fix for floating sky ads.
Version: 1.0.1
Author: Tyler Johnson
Author URI: http://tylerjohnsondesign.com/
Copyright: Tyler Johnson
Text Domain: wpdevskyad
Copyright 2017 WP Developers. All Rights Reserved.
*/

/**
Check for Updates
**/
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/LibertyAllianceGit/wpdev-sky-ad',
	__FILE__,
	'wpdev-sky-ad'
);

/**
Enqueue Files
**/
function wpdev_skyad_enqueue() {
    wp_enqueue_style('wpdev-sky-ad-css', plugin_dir_url(__FILE__) . 'css/wpdev-sky-ad.css');
    wp_enqueue_script('wpdev-sky-ad', plugin_dir_url(__FILE__) . 'js/wpdev-sky-ad.js', array('jquery'), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'wpdev_skyad_enqueue');