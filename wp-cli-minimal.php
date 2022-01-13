<?php
/**
 * Plugin Name: Minimal Package
 * Plugin URI: https://github.com/bintzpress/wp-cli-minimal
 * Description: Minimal WP-CLI Package
 * Version: 1.0.1
 * Author: Brian Bintz
 * Author URI: https://bintzpress.com
 * License: GPL v2.0
 */

namespace bintzpress\CLI\Minimal\Command;

use WP_CLI;

if ( ! ( defined('WP_CLI') && WP_CLI )) {
    return;
}

function hello() {
    WP_CLI::success("Hello!");
}

WP_CLI::add_command( 'hello', __NAMESPACE__.'\\hello');
