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

	'content'  => array(
		'label' => esc_html__( 'Content', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is content text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 24px width and 24px height.', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


);