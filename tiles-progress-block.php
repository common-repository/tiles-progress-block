<?php
/**
 * Plugin Name:       Tiles Progress Bar Block
 * Description:       Add a progress bar block to your website.
 * Plugin URI:        https://usetiles.com/?utm_source=wp-plugins&utm_medium=tiles-progress-block&utm_campaign=plugin-uri
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.2.4
 * Author:            UseTiles.com
 * Author URI:        https://usetiles.com/?utm_source=wp-plugins&utm_medium=tiles-progress-block&utm_campaign=author-uri
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tiles-progress-block
 *
 * @package           tiles/tiles-progress-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function tiles_progress_block_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'tiles_progress_block_init' );
