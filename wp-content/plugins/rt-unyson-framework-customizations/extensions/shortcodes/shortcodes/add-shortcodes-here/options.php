<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'teeny'  => true,
		'reinit' => true,
		'label'  => esc_html__( 'Add shortcode here. Copy/paste from example below or see documentation', 'insurance-agency' ),
		'desc'   => esc_html__( 'Shortcodes list: for team shortcode is [team columns="3" limit="-1" order="DESC"], for testimonials shortcode is [testimonials_carousel limit="-1" order="ASC"], for complete
list of shortcodes see documentation', 'insurance-agency' )
	),
);
