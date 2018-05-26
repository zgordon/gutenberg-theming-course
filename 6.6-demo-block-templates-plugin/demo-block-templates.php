<?php
/**
 * Plugin's bootstrap file to launch the plugin.
 *
 * @package     Gutenberg_Courses\Theming
 * @author      Zac Gordon (@zgordon)
 * @license     GPL2+
 *
 * @wordpress-plugin
 * Plugin Name: Gutenberg - Block Templates
 * Plugin URI:  https://gutenberg.courses
 * Description: An demo plugin showing how to add block templates to a plugin.
 * Version:     1.0.0
 * Author:      Zac Gordon (@zgordon)
 * Author URI:  https://twitter.com/zgordon
 * Text Domain: gutenbergblocktemplates
 * Domain Path: /languages
 * License:     GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

//  Exit if accessed directly.
defined('ABSPATH') || exit;

// Register Custom Post Types
require_once( __DIR__ . '/lib/block-templates.php' );
