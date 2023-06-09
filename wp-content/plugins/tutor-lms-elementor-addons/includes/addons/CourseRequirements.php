<?php
/**
 * Course Requirements
 *
 * @since 1.0.0
 */

namespace TutorLMS\Elementor\Addons;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class CourseRequirements extends BaseAddon {

	use \TutorLMS\Elementor\AddonsTrait;

	private static $prefix_class_alignment = 'elementor-align-';

	public function get_title() {
		return __( 'Course Requirements', 'tutor-lms-elementor-addons' );
	}

	protected function register_content_controls() {
		$this->start_controls_section(
			'course_requirements_content',
			array(
				'label' => __( 'General Settings', 'tutor-lms-elementor-addons' ),
			)
		);

		$this->add_control(
			'section_title_text',
			array(
				'label'       => __( 'Title', 'tutor-lms-elementor-addons' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'Requirements', 'tutor-lms-elementor-addons' ),
				'placeholder' => __( 'Type your title here', 'tutor-lms-elementor-addons' ),
				'rows'        => 3,
			)
		);

		$this->add_responsive_control(
			'course_requirements_layout',
			array(
				'label'     => __( 'Layout', 'tutor-lms-elementor-addons' ),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => array(
					'list-item'       => array(
						'title' => __( 'List', 'tutor-lms-elementor-addons' ),
						'icon'  => 'fa fa-list-ul',
					),
					'inline' => array(
						'title' => __( 'Inline', 'tutor-lms-elementor-addons' ),
						'icon'  => 'fa fa-ellipsis-h',
					),
				),
				'default'   => 'list-item',
				'prefix_class'	=> 'etlms-course-requirements-display-',
				'selectors' => array(
					'{{WRAPPER}} .etlms-course-widget-list-items li'  => 'display: {{VALUE}};',
				),
			)
		);

		$this->add_control(
			'course_requirements_list_icon',
			array(
				'label'   => __( 'List Icon', 'tutor-lms-elementor-addons' ),
				'type'    => Controls_Manager::ICONS,
				'default' => array(
					'value'   => 'fas fa-check',
					'library' => 'solid',
				),
			)
		);

		// Alignment
		$this->add_responsive_control(
			'course_requirements_align',
			array(
				'label'     => __( 'Alignment', 'tutor-lms-elementor-addons' ),
				'type'      => \Elementor\Controls_Manager::CHOOSE,
				'options'   => array(
					'flex-start' => array(
						'title' => __( 'Left', 'tutor-lms-elementor-addons' ),
						'icon'  => 'eicon-text-align-left',
					),
					'center'     => array(
						'title' => __( 'Center', 'tutor-lms-elementor-addons' ),
						'icon'  => 'eicon-text-align-center',
					),
					'flex-end'   => array(
						'title' => __( 'Right', 'tutor-lms-elementor-addons' ),
						'icon'  => 'eicon-text-align-right',
					),
				),
				'default'   => 'flex-start',
				'selectors' => array(
					'{{WRAPPER}}.etlms-course-requirements' => 'text-align: {{VALUE}};',
				),
			)
		);

		$this->end_controls_section();
	}

	protected function register_style_controls() {
		$title_selector = '{{WRAPPER}} .etlms-course-widget-title';
		$list_selector  = '{{WRAPPER}} .etlms-course-widget-list-items';

		$this->start_controls_section(
			'course_requirements_title_section',
			array(
				'label' => __( 'Section Title', 'tutor-lms-elementor-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'course_requirements_title_color',
			array(
				'label'     => __( 'Color', 'tutor-lms-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					$title_selector => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'course_requirements_title_typo',
				'label'    => __( 'Typography', 'tutor-lms-elementor-addons' ),
				'selector' => $title_selector,
			)
		);

		$this->add_responsive_control(
			'etlms_heading_gap',
			array(
				'label'      => __( 'Gap', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min' => 0,
						'max' => 50,
					),
				),
				'selectors'  => array(
					$title_selector => 'margin-bottom: {{SIZE}}{{UNIT}};'
				),
			)
		);
		$this->end_controls_section();

		/* List  Section */
		$this->start_controls_section(
			'course_requirements_list_section',
			array(
				'label' => __( 'List', 'tutor-lms-elementor-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_responsive_control(
			'course_requirements_space_between',
			array(
				'label'      => __( 'Space Between', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min' => 0,
						'max' => 50,
					),
				),
				'selectors'  => array(
					$list_selector . ' l:not(last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};'
				)
			)
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			array(
				'name'     => 'course_requirements_border',
				'label'    => __( 'Border', 'tutor-lms-elementor-addons' ),
				'selector' => $list_selector . ' li',
			)
		);

		$this->add_responsive_control(
			'course_requirements_border_radius',
			array(
				'label'      => __( 'Border Radius', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					$list_selector . ' li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				),
			)
		);

		$this->add_control(
			'course_requirements_list_padding',
			array(
				'label'      => __( 'Padding', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%', 'em' ),
				'selectors'  => array(
					$list_selector . ' li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				),
				'separator'  => 'before',
			)
		);

		$this->end_controls_section();

		 /* Icon  Section */
		$this->start_controls_section(
			'course_requirements_icon_section',
			array(
				'label' => __( 'Icon', 'tutor-lms-elementor-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'course_requirements_icon_color',
			array(
				'label'     => __( 'Color', 'tutor-lms-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					$list_selector . ' li .tutor-list-icon' => 'color: {{VALUE}}'
				),
			)
		);

		$this->add_responsive_control(
			'course_requirements_icon_size',
			array(
				'label'      => __( 'Size', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min' => 5,
						'max' => 100,
					),
				),
				'selectors'  => array(
					$list_selector . ' li .tutor-list-icon' => 'font-size: {{SIZE}}{{UNIT}};'
				)
			)
		);

		$this->end_controls_section();

		/* Text  Section */
		$this->start_controls_section(
			'course_requirements_text_section',
			array(
				'label' => __( 'Text', 'tutor-lms-elementor-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'course_requirements_text_color',
			array(
				'label'     => __( 'Color', 'tutor-lms-elementor-addons' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					$list_selector . ' li .tutor-list-label' => 'color: {{VALUE}}'
				),
			)
		);

		$this->add_responsive_control(
			'course_requirements_text_indent',
			array(
				'label'      => __( 'Text Indent', 'tutor-lms-elementor-addons' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => array( 'px' ),
				'range'      => array(
					'px' => array(
						'min' => 0,
						'max' => 50,
					),
				),
				'selectors'  => array(
					$list_selector . ' li .tutor-list-icon' => 'margin-right: {{SIZE}}{{UNIT}};'
				)
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'course_requirements_text_typo',
				'label'    => __( 'Typography', 'tutor-lms-elementor-addons' ),
				'selector' => $list_selector . ' li .tutor-list-label',
			)
		);

		$this->end_controls_section();
	}

	protected function render( $instance = array() ) {
		$disable_option = ! (bool) get_tutor_option( 'enable_course_requirements' );
		if ( $disable_option ) {
			if ( \Elementor\Plugin::instance()->editor->is_edit_mode() ) {
				echo __( 'Please enable course requirements from tutor settings', 'tutor-lms-elementor-addons' );
			}
			return;
		}

		$course       = etlms_get_course();
		$requirements = tutor_course_requirements();
		if ( $course && is_array( $requirements ) && count( $requirements ) ) {
			ob_start();
			$settings = $this->get_settings_for_display();
			include etlms_get_template( 'course/requirements' );
			$output = apply_filters( 'tutor_course/single/requirements_html', ob_get_clean() );
			// PHPCS - the variable $output holds safe data.
			echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			$op = '';
			if ( $this->is_elementor_editor() ) {
				$op = __( 'Please add requirements from Tutor course builder', 'tutor-lms-elementor-addons' );
			}
			echo esc_html( $op );
		}
	}
}
