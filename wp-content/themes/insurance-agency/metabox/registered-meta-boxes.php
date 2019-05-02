<?php
/**REGISTERED META BOXES
* 
*
* All the definitions of meta boxes are listed below with comments.
* Please read them CAREFULLY.
*
* You also should read the changelog to know what has been changed before updating.
*
* For more information, please visit:
* @link http://metabox.io/docs/registering-meta-boxes/
*/


add_filter( 'rwmb_meta_boxes', 'rt_insurance_register_meta_boxes' );
/**
* Register meta boxes
*
* Remember to change "insurance" to actual prefix in your project
*
* @param array $meta_boxes List of meta boxes
*
* @return array
*/

function rt_insurance_register_meta_boxes( $meta_boxes )
{
/**
* prefix of meta keys (optional)
* Use underscore (_) at the beginning to make keys hidden
* Alt.: You also can make prefix empty to disable it
*/
// Better has an underscore as last sign
$prefix = 'insurance_';



// 1st meta box

$meta_boxes[] = array(
// Meta box id, UNIQUE per meta box. Optional since 4.1.5
'id' => 'sidebars',
// Meta box title - Will appear at the drag and drop handle bar. Required.
'title' => esc_html__( 'Sidebar', 'insurance-agency' ),
// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
'post_types' => array( 'post', 'rt-ins-team', 'rt-ins-galleryfilter', 'rt-ins-carousel2' ),
// Where the meta box appear: normal (default), advanced, side. Optional.
'context' => 'normal',
// Order of meta box: high (default), low. Optional.
'priority' => 'high',
// Auto save: true, false (default). Optional.
'autosave' => true,
// List of meta fields
'fields' => array(

// radio button
array(
'name' => esc_html__( 'Sidebar in post', 'insurance-agency' ),
'id' => "{$prefix}sideb",
'type' => 'radio',
// Array of 'value' => 'Label' pairs for select box
'options' => array(
'col-md-9' => esc_html__( 'add sidebar in post', 'insurance-agency' ),
'col-md-12' => esc_html__( 'remove sidebar from post', 'insurance-agency' ),
),
// Select multiple values, optional. Default is false.
'multiple' => false,
'std' => 'col-md-9',
),

)
);
//1st metabox end


// 2nd meta box

$meta_boxes[] = array(
'id' => "{$prefix}width",
'title' => esc_html__( 'Page section width and background color', 'insurance-agency' ),
'post_types' => array( 'page-sections', 'page-sections2' ),
'context' => 'normal',
'priority' => 'high',
'autosave' => true,
'fields' => array(

// checkbox
array(
'name' => esc_html__( 'Check/uncheck this for boxed/wide layout', 'insurance-agency' ),
'id' => "{$prefix}checkbox",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),
// radio
array(
'name' => esc_html__( 'Section background color', 'insurance-agency' ),
'id' => "{$prefix}colorbg",
'type' => 'radio',
'options' => array(
'section1' => esc_html__( 'white', 'insurance-agency' ),
'section1a' => esc_html__( 'light grey', 'insurance-agency' ),
'section2' => esc_html__( 'first color', 'insurance-agency' ),
'section2a' => esc_html__( 'second color', 'insurance-agency' ),
'section2b' => esc_html__( 'second color 2', 'insurance-agency' ),
),
// Select multiple values, optional. Default is false.
'multiple' => false,
'std' => 'section1',
),
// checkbox
array(
'name' => esc_html__( 'Check/uncheck this for section space (top)', 'insurance-agency' ),
'id' => "{$prefix}sectionpadding",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),
// checkbox
array(
'name' => esc_html__( 'Check/uncheck this for section space (bottom)', 'insurance-agency' ),
'id' => "{$prefix}sectionpadding1",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),

)
);
//2nd metabox end


// 3rd meta box

$meta_boxes[] = array(
'id' => "{$prefix}team",
'title' => esc_html__( 'Team member information', 'insurance-agency' ),
'post_types' => array( 'rt-ins-team' ),
'context' => 'normal',
'priority' => 'high',
'autosave' => true,
'fields' => array(

// Text
array(
// Field name - Will be used as label
'name' => esc_html__( 'Team member job/position', 'insurance-agency' ),
// Field ID, i.e. the meta key
'id' => "{$prefix}teamtext1",
// Field description (optional)
'desc' => esc_html__( 'Team member job/position', 'insurance-agency' ),
'type' => 'text',
// Default value (optional)
'std' => esc_html__( 'e.g. agent', 'insurance-agency' ),
// CLONES: Add to make the field cloneable (i.e. have multiple value)
'clone' => false,
),

// Text
array(
// Field name - Will be used as label
'name' => esc_html__( 'Team member description', 'insurance-agency' ),
// Field ID, i.e. the meta key
'id' => "{$prefix}teamtext2",
// Field description (optional)
'desc' => esc_html__( 'Team member description', 'insurance-agency' ),
'type' => 'text',
// Default value (optional)
'std' => esc_html__( 'e.g. Over 15 years of experiance', 'insurance-agency' ),
// CLONES: Add to make the field cloneable (i.e. have multiple value)
'clone' => false,
),

// custom_html
array(
// Field name - Will be used as label
'name' => esc_html__( 'Team member social icons', 'insurance-agency' ),
// Field ID, i.e. the meta key
'id' => "{$prefix}teamtext3",
// Field description (optional)
'desc' => esc_html__( 'Team member social icons code snipet', 'insurance-agency' ),
'type' => 'wysiwyg',
// Default value (optional)
'std' => esc_html__( '', 'insurance-agency' ),
// CLONES: Add to make the field cloneable (i.e. have multiple value)
'clone' => false,
),


// custom_html
array(
// Field name - Will be used as label
'name' => esc_html__( 'Team member custom html for team page', 'insurance-agency' ),
// Field ID, i.e. the meta key
'id' => "{$prefix}teamtext4",
// Field description (optional)
'desc' => esc_html__( 'recomended for button shortcode below image in single team page', 'insurance-agency' ),
'type' => 'wysiwyg',
// Default value (optional)
'std' => esc_html__( '', 'insurance-agency' ),
// CLONES: Add to make the field cloneable (i.e. have multiple value)
'clone' => false,
),


// custom_html
array(
// Field name - Will be used as label
'name' => esc_html__( 'Team member custom html for team page left of image', 'insurance-agency' ),
// Field ID, i.e. the meta key
'id' => "{$prefix}teamtext5",
// Field description (optional)
'desc' => esc_html__( 'Team member custom html for team page left of image', 'insurance-agency' ),
'type' => 'wysiwyg',
// Default value (optional)
'std' => esc_html__( '', 'insurance-agency' ),
// CLONES: Add to make the field cloneable (i.e. have multiple value)
'clone' => false,
),

)
);
//3rd metabox end


// 4 meta box for title background image in post and pages

$meta_boxes[] = array(
// Meta box id, UNIQUE per meta box. Optional since 4.1.5
'id' => 'singletitlebg',
// Meta box title - Will appear at the drag and drop handle bar. Required.
'title' => esc_html__( 'Title background image for single posts and pages', 'insurance-agency' ),
// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
'post_types' => array( 'post', 'rt-ins-team', 'page' ),
// Where the meta box appear: normal (default), advanced, side. Optional.
'context' => 'normal',
// Order of meta box: high (default), low. Optional.
'priority' => 'low',
// Auto save: true, false (default). Optional.
'autosave' => false,
// List of meta fields
'fields' => array(

// upload image
array(
'name' => esc_html__( 'Title background image', 'insurance-agency' ),
'desc' => esc_html__( 'Upload image for title background image. Recommended size - width over 2000px. This will overwritte general background image if it is already set in Customizer.', 'insurance-agency' ),
'id' => "{$prefix}singletitlebg",
'type' => 'image_advanced',
'clone' => false
),

)
);
//4 metabox end

return $meta_boxes;
}