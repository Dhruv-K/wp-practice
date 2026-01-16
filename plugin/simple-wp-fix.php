<?php
/**
 * Plugin Name: Simple WP Fix Demo
 * Description: Demo plugin for practice.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function swf_demo_init() {
    error_log('Simple WP Fix Demo loaded');
}
add_action('plugins_loaded', 'swf_demo_init');
