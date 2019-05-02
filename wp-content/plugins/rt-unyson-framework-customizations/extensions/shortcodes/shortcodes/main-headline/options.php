<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'headline'  => array(
		'label' => esc_html__( 'Headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	

	'subheadline'  => array(
		'label' => esc_html__( 'Subheadline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is subheadline text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'textalignment'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Headline appears in left, center or right.', 'insurance-agency'),
		'choices' => array(
			'text-center' => esc_html__('Center', 'insurance-agency'),		
			'text-left' => esc_html__('Left', 'insurance-agency'),
			'text-right' => esc_html__('Right', 'insurance-agency')
		)
	),


);