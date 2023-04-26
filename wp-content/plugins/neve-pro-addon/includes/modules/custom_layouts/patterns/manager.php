<?php
/**
 * Loader for Gutenberg patterns
 *
 * Author:      Bogdan Preda <friends@themeisle.com>
 * Created on:  02-12-{2022}
 *
 * @package Neve Pro Addon
 */

namespace Neve_Pro\Modules\Custom_Layouts\Patterns;

use Neve_Pro\Modules\Custom_Layouts\Patterns\Core\Patterns_Config;

/**
 * Class Manager
 */
class Manager {

	/**
	 * Holds the instance of this class.
	 *
	 * @var null|Manager $_instance
	 */
	private static $_instance = null;

	/**
	 * List of pattern classes to load.
	 *
	 * @var string[]
	 */
	private $patterns = [
		'Nosidebar_One_Archive',
		'Nosidebar_Two_Archive',
		'Sidebar_Left_Archive',
		'Nosidebar_Cover_Single',
		'Nosidebar_Single',
		'Sidebar_Left_Single',
	];

	/**
	 * Get instance
	 *
	 * @access public
	 * @return Manager
	 */
	public static function get_instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Load registered patterns and add required hooks.
	 */
	public function load_patterns() {
		foreach ( $this->patterns as $pattern_name ) {
			$this->build( $pattern_name );
		}

		add_action( 'init', [ $this, 'register_categories' ], 10, 1 );

		add_filter( 'the_content', [ $this, 'check_content_and_add_style' ] );
		add_action( 'enqueue_block_editor_assets', [ $this, 'pattern_styles' ] );
	}

	/**
	 * Enqueue pattern styles.
	 */
	public function pattern_styles() {
		wp_enqueue_style( 'neve-layout-pattern-styles', NEVE_PRO_INCLUDES_URL . 'modules/custom_layouts/assets/pattern_styles' . ( ( NEVE_DEBUG ) ? '' : '.min' ) . '.css', [], NEVE_PRO_VERSION );
	}

	/**
	 * Use the `the_content` filter hook to check if styles should be enqueued.
	 *
	 * @param string $content Content of the displayed page.
	 *
	 * @return string
	 */
	public function check_content_and_add_style( $content ) {
		if ( strpos( $content, Patterns_Config::LAYOUT_CONTAINER_CLASS ) !== false ) {
			// enable style enqueue for layout patterns
			if ( ! wp_style_is( 'neve-layout-pattern-styles' ) ) {
				$this->pattern_styles();
			}
		}
		return $content;
	}

	/**
	 * Register patterns categories
	 */
	public function register_categories() {
		register_block_pattern_category(
			Patterns_Config::NEVE_PATTERN_CATEGORY,
			array( 'label' => __( 'Neve Patterns', 'neve' ) )
		);
	}

	/**
	 * Build class name and invoke class.
	 *
	 * @param string $class The class name.
	 */
	private function build( $class ) {
		$full_class_name = '\\Neve_Pro\\Modules\\Custom_Layouts\\Patterns\\' . $class;
		if ( class_exists( $full_class_name ) ) {
			new $full_class_name();
		}
	}

	/**
	 * Cloning is forbidden.
	 *
	 * @access public
	 * @since  2.5.x
	 */
	public function __clone() {}

	/**
	 * Un-serializing instances of this class is forbidden.
	 *
	 * @access public
	 * @since  2.5.x
	 */
	public function __wakeup() {}
}
