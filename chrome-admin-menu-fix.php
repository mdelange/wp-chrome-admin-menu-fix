<?php
/*
Plugin Name: Admin Menu Fix for Google Chrome 45
Description: Fixes admin menu layout glitch in Google Chrome 45.
Version: 0.1
Author: Miesjel de Lange
*/

add_action('admin_enqueue_scripts', function()
{
	wp_add_inline_style('wp-admin', '#adminmenu { transform: translateZ(0); }');
});