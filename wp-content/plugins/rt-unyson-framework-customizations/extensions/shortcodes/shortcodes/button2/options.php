<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(


	'content'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is button text label', 'insurance-agency' ),
		'type'  => 'text',
		'value' => 'button'
	),

	

	'url'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is button URL', 'insurance-agency' ),
		'type'  => 'text',
		'value' => 'http://'
	),
	
	'target'   => array(
		'type'    => 'select',
		'label'   => esc_html__('New page opens in same or new tab', 'insurance-agency'),
		'choices' => array(
			'_self' => esc_html__('Same tab', 'insurance-agency'),
			'_blank' => esc_html__('New tab', 'insurance-agency')
		)
	),
		'position'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Button appears in left, center or right', 'insurance-agency'),
		'choices' => array(
			'text-left' => esc_html__('Left', 'insurance-agency'),
			'text-center' => esc_html__('Center', 'insurance-agency'),
			'text-right' => esc_html__('Right', 'insurance-agency')
		)
	),


);