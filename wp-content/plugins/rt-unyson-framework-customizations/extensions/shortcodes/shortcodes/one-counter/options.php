<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(

	'headline'  => array(
		'label' => esc_html__( 'Headline text', 'insurance' ),
		'desc'  => esc_html__( 'This is text', 'insurance' ),
		'type'  => 'text',
		'value' => ''
	),

	'number'  => array(
		'label' => esc_html__( 'Number', 'insurance' ),
		'desc'  => esc_html__( 'Add number value here', 'insurance' ),
		'type'  => 'text',
		'value' => ''
	),

);