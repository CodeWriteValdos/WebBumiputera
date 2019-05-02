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
  
  'headlinetag'  => array(
		'label' => esc_html__( 'Headline H Tag', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose headline H tag for SEO purpose.', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      '<h2>'  => esc_html__('H2', 'insurance-agency'),
      '<h1>'  => esc_html__('H1', 'insurance-agency'),
      '<h3>'  => esc_html__('H3', 'insurance-agency'),
      '<h4>'  => esc_html__('H4', 'insurance-agency'),
      '<h5>'  => esc_html__('H5', 'insurance-agency'),
      '<h6>'  => esc_html__('H6', 'insurance-agency'),
    ),
    'value'   => '<h2>'
	),

	'subheadline'  => array(
		'label' => esc_html__( 'Subheadline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is subheadline text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  'subheadlinetag'  => array(
		'label' => esc_html__( 'Subheadline H Tag', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose subheadline H tag for SEO purpose.', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      '<h2>'  => esc_html__('H2', 'insurance-agency'),
      '<h1>'  => esc_html__('H1', 'insurance-agency'),
      '<h3>'  => esc_html__('H3', 'insurance-agency'),
      '<h4>'  => esc_html__('H4', 'insurance-agency'),
      '<h5>'  => esc_html__('H5', 'insurance-agency'),
      '<h6>'  => esc_html__('H6', 'insurance-agency'),
    ),
    'value'   => '<h3>'
	),
  
  'breadcrumbs'  => array (
		'label' => esc_html__( 'Breadcrumb navigation', 'insurance-agency' ),
		'desc'  => esc_html__( 'Show or hide breadcrumb navigation.', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      'hide'  => esc_html__('Hide', 'insurance-agency'),
      'show'  => esc_html__('Show', 'insurance-agency')
    ),
    'value'   => 'hide'
	),

	'iconheadline'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  'active'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => esc_html__('Not current service', 'insurance-agency'),
      'active'  => esc_html__('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),
  
  
  	'iconheadline2'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl2'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url2'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'active2'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => esc_html__('Not current service', 'insurance-agency'),
      'active'  => esc_html__('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),

 	'iconheadline3'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl3'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url3'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'active3'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => __('Not current service', 'insurance-agency'),
      'active'  => __('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),
  
  	'iconheadline4'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl4'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url4'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'active4'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => esc_html__('Not current service', 'insurance-agency'),
      'active'  => esc_html__('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),
  
   	'iconheadline5'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl5'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url5'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'active5'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => esc_html__('Not current service', 'insurance-agency'),
      'active'  => esc_html__('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),
   
  'iconheadline6'  => array(
		'label' => esc_html__( 'Icon headline', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is iconheadline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'imgurl6'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'url6'  => array(
		'label' => esc_html__( 'URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  'active6'  => array(
		'label' => esc_html__( 'Current service', 'insurance-agency' ),
		'desc'  => esc_html__( 'Choose is it current service', 'insurance-agency' ),
    'type'    => 'select',
    'choices' => array(
      ''  => esc_html__('Not current service', 'insurance-agency'),
      'active'  => esc_html__('Current service', 'insurance-agency')
    ),
    'value'   => ''
	),
  
);