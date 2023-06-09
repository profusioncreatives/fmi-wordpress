<?php
/**
 * Handle styles that need to be added to already existing inline style managers in the theme.
 *
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      2018-12-03
 *
 * @package Neve Pro Addon
 */

namespace Neve_Pro\Views\Inline;

/**
 * Class Injector
 *
 * @deprecated Functionality replaced with the subscriber mechanism, we keep it only for compatibility with the pro version.
 * @package Neve Pro Addon
 */
class Injector {

	/**
	 * Initialize the injector and hook in the new classes.
	 */
	public function init() {
		if ( defined( 'NEVE_NEW_DYNAMIC_STYLE' ) ) {
			return;
		}
		add_filter( 'neve_filter_inline_style_classes', array( $this, 'inject_front_end_style_classes' ), 10, 2 );
		add_filter( 'neve_filter_inline_style_classes', array( $this, 'inject_gutenberg_style_classes' ), 10, 2 );
	}

	/**
	 * Inject front end style classes from this plugin.
	 *
	 * @param array $style_classes style classes from Neve.
	 *
	 * @return array
	 * @see \Neve\Views\Inline\Front_End_Style_Manager
	 */
	public function inject_front_end_style_classes( $style_classes, $style_handle ) {
		if ( $style_handle !== 'neve-generated-style' ) {
			return $style_classes;
		}
		$style_classes[] = '\\Neve_Pro\\Views\\Inline\\Colors';

		$additional = array();

		if ( apply_filters( 'nv_pro_woocommerce_booster_status', false ) && class_exists( 'WooCommerce' ) ) {
			$additional[] = '\\Neve_Pro\\Modules\\Woocommerce_Booster\\Inline\\Shop_Page';
		}

		if ( apply_filters( 'nv_pro_lifterlms_booster_status', false ) && class_exists( 'LifterLMS' ) ) {
			$additional[] = '\\Neve_Pro\\Modules\\LifterLMS_Booster\\Inline\\Course_Membership';
			$additional[] = '\\Neve_Pro\\Modules\\LifterLMS_Booster\\Inline\\Colors';
		}

		if ( apply_filters( 'nv_pro_scroll_to_top_status', false ) ) {
			$additional[] = '\\Neve_Pro\\Modules\\Scroll_To_Top\\Inline\\Scroll_To_Top';
		}

		if ( apply_filters( 'nv_pro_blog_pro_status', false ) ) {
			$additional[] = '\\Neve_Pro\\Modules\\Blog_Pro\\Inline\\Blog_Pro';
		}

		return array_merge( $additional, $style_classes );
	}

	/**
	 * Inject front end style classes from this plugin.
	 *
	 * @param array  $style_classes Style classes from Neve.
	 * @param string $style_handle Handle gutenberg style.
	 *
	 * @return array
	 * @see \Neve\Views\Inline\Gutenberg_Style_Manager
	 */
	public function inject_gutenberg_style_classes( $style_classes, $style_handle ) {
		if ( $style_handle !== 'neve-gutenberg-style' ) {
			return $style_classes;
		}

		return $style_classes;
	}
}
