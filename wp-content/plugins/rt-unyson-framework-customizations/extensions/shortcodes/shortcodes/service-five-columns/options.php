<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'headline'  => array(
		'label' => esc_html__( 'HEADLINE FOR FIRST SERVICE', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'content'  => array(
		'label' => esc_html__( 'Text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'buttonurl'  => array(
		'label' => esc_html__( 'Button URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'buttontext'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button text here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'color'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Background color', 'insurance-agency'),
		'choices' => array(
			'color1' => esc_html__('First color', 'insurance-agency'),
			'color2' => esc_html__('First color 2', 'insurance-agency'),
			'color3' => esc_html__('First color 3', 'insurance-agency'),
			'color4' => esc_html__('First color 4', 'insurance-agency'),	
 			'color5' => esc_html__('First color 5', 'insurance-agency'),	
  	  'color6' => esc_html__('First color 6', 'insurance-agency')	    
		)
	),
  
  'headline2'  => array(
		'label' => esc_html__( 'HEADLINE FOR SECOND SERVICE', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'content2'  => array(
		'label' => esc_html__( 'Text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl2'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'buttonurl2'  => array(
		'label' => esc_html__( 'Button URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'buttontext2'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button text here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'color2'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Background color', 'insurance-agency'),
		'choices' => array(
			'color1' => esc_html__('First color', 'insurance-agency'),
			'color2' => esc_html__('First color 2', 'insurance-agency'),
			'color3' => esc_html__('First color 3', 'insurance-agency'),
			'color4' => esc_html__('First color 4', 'insurance-agency'),	
 			'color5' => esc_html__('First color 5', 'insurance-agency'),	
  	  'color6' => esc_html__('First color 6', 'insurance-agency')	    
		)
	),
  
 'headline3'  => array(
		'label' => esc_html__( 'HEADLINE FOR THIRD SERVICE', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'content3'  => array(
		'label' => esc_html__( 'Text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl3'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'buttonurl3'  => array(
		'label' => esc_html__( 'Button URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'buttontext3'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button text here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'color3'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Background color', 'insurance-agency'),
		'choices' => array(
			'color1' => esc_html__('First color', 'insurance-agency'),
			'color2' => esc_html__('First color 2', 'insurance-agency'),
			'color3' => esc_html__('First color 3', 'insurance-agency'),
			'color4' => esc_html__('First color 4', 'insurance-agency'),	
 			'color5' => esc_html__('First color 5', 'insurance-agency'),	
  	  'color6' => esc_html__('First color 6', 'insurance-agency')	    
		)
	), 

'headline4'  => array(
		'label' => esc_html__( 'HEADLINE FOR FORTH SERVICE', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'content4'  => array(
		'label' => esc_html__( 'Text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl4'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'buttonurl4'  => array(
		'label' => esc_html__( 'Button URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'buttontext4'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button text here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'color4'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Background color', 'insurance-agency'),
		'choices' => array(
			'color1' => esc_html__('First color', 'insurance-agency'),
			'color2' => esc_html__('First color 2', 'insurance-agency'),
			'color3' => esc_html__('First color 3', 'insurance-agency'),
			'color4' => esc_html__('First color 4', 'insurance-agency'),	
 			'color5' => esc_html__('First color 5', 'insurance-agency'),	
  	  'color6' => esc_html__('First color 6', 'insurance-agency')	    
		)
	),


'headline5'  => array(
		'label' => esc_html__( 'HEADLINE FOR FIFTH SERVICE', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is headline', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),


	'content5'  => array(
		'label' => esc_html__( 'Text', 'insurance-agency' ),
		'desc'  => esc_html__( 'This is text', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),

	'imgurl5'  => array(
		'label' => esc_html__( 'Image URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add image/icon URL here. Recommended size for icon image is 37px width and 28px height', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
  	'buttonurl5'  => array(
		'label' => esc_html__( 'Button URL', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button URL here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
  
    'buttontext5'  => array(
		'label' => esc_html__( 'Button text', 'insurance-agency' ),
		'desc'  => esc_html__( 'Add button text here', 'insurance-agency' ),
		'type'  => 'text',
		'value' => ''
	),
	
	'color5'   => array(
		'type'    => 'select',
		'label'   => esc_html__('Background color', 'insurance-agency'),
		'choices' => array(
			'color1' => esc_html__('First color', 'insurance-agency'),
			'color2' => esc_html__('First color 2', 'insurance-agency'),
			'color3' => esc_html__('First color 3', 'insurance-agency'),
			'color4' => esc_html__('First color 4', 'insurance-agency'),	
 			'color5' => esc_html__('First color 5', 'insurance-agency'),	
  	  'color6' => esc_html__('First color 6', 'insurance-agency')	    
		)
	), 

);