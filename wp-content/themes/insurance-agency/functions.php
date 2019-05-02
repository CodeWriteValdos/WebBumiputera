<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once(trailingslashit( get_template_directory() ) . 'class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'rt_insurance_register_required_plugins' );

function rt_insurance_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
        
    array(
			'name'     				=> 'Rt Insurance Agency Theme Functions', // The plugin name
			'slug'     				=> 'rt-insurance-agency-theme-functions', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/rt-insurance-agency-theme-functions.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		
		array(
			'name'     				=> 'Rt Unyson Framework Customizations', // The plugin name
			'slug'     				=> 'rt-unyson-framework-customizations', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/rt-unyson-framework-customizations.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		
    array(
			'name'     				=> 'Slider Revolution', // The plugin name
			'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/revslider.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),   

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name' 		=> 'Unyson Page Builder',
			'slug' 		=> 'unyson',
			'required' 	=> true,
		),
		                 
    array(
			'name' 		=> 'Contact Form',
			'slug' 		=> 'contact-form-7',
			'required' 	=> false,
		),

		 array(
			'name' 		=> 'Breadcrumbs',
			'slug' 		=> 'breadcrumb-navxt',
			'required' 	=> false,
		),

  array(
			'name' 		=> 'Image Pop-up',
			'slug' 		=> 'wp-video-lightbox',
			'required' 	=> false,
		),
  array(
			'name' 		=> 'TablePress Extension: Chartist',
			'slug' 		=> 'tablepress-chartist',
			'required' 	=> false,
	),
  
  array(
			'name' 		=> 'TablePress',
			'slug' 		=> 'tablepress',
			'required' 	=> false,
	),
  
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}



/**********************************************************
* include meta boxes 
***********************************************************/
require_once (trailingslashit( get_template_directory() ) . 'metabox/meta-box-plugin/meta-box.php');
include (trailingslashit( get_template_directory() ) . 'metabox/registered-meta-boxes.php');


/**********************************************************
* language support
***********************************************************/
function rt_insurance_load_theme_textdomain() {
  load_theme_textdomain( 'insurance-agency', get_template_directory().'/languages' );
}
add_action( 'after_setup_theme', 'rt_insurance_load_theme_textdomain' );


/**********************************************************
* google fonts support
***********************************************************/
function rt_insurance_fonts_url() {
  $font_url = '';

  if ( 'off' !== _x( 'on', 'Google font: on or off', 'insurance-agency' ) ) {
    $font_url = add_query_arg( 'family', urlencode( 'Droid Sans|Source Sans Pro:300,400,600&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
  }  
  
  return esc_url_raw( $font_url );
}


/************************************************************************
* enable shortcodes in widgets
*************************************************************************/
add_filter('widget_text', 'do_shortcode');


/**********************************************************
* title tag support
***********************************************************/
add_theme_support( 'title-tag' );


/**********************************************************
* menu
***********************************************************/

//for front single page
register_nav_menu( 'primary-menu', esc_html__( 'Menu for front page (single page website)', 'insurance-agency' ) );

//for inner pages
register_nav_menu( 'header-menu', esc_html__( 'Menu for inner pages (multipage website)', 'insurance-agency' ) );


/**********************************************************
* support for shortcodes in excerpt 
***********************************************************/
add_filter('the_excerpt', 'do_shortcode');


/**********************************************************
* post width
***********************************************************/
if ( ! isset( $content_width ) ) $content_width = 900;


/******************************************************
* rss
*******************************************************/
add_theme_support( 'automatic-feed-links' );


/******************************************************
* disable unused unyson extensions
*******************************************************/
if (defined('FW')):
    function rt_insurance_hide_extensions_from_the_list() {
        if (fw_current_screen_match(array('only' => array('id' => 'toplevel_page_fw-extensions')))) {
            echo '<style type="text/css"> #fw-ext-slider { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-social { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-learning { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-events { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-megamenu { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-styling { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-backup { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-seo { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-analytics { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-translation { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-feedback { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-sidebars { display: none; } </style>';  
            echo '<style type="text/css"> #fw-ext-breadcrumbs { display: none; } </style>';
            echo '<style type="text/css"> #fw-ext-portfolio { display: none; } </style>';  
        }
    }
    add_action('admin_print_scripts', 'rt_insurance_hide_extensions_from_the_list');
endif;


/******************************************************
* enable image support
*******************************************************/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'rt-ins-team', 'rt-ins-galleryfilter', 'rt-ins-carousel1', 'rt-ins-carousel2', 'rt-ins-carousel3' ) );      
}

//cropped image sizes for columns
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'rt_insurance_one_row_img', 1200, 450, array( 'center', 'center' ) );
add_image_size( 'rt_insurance_two_rows_img', 600, 350, array( 'center', 'center' ) );
add_image_size( 'rt_insurance_three_rows_img', 400, 250, array( 'center', 'center' ) ); 
add_image_size( 'rt_insurance_four_rows_img', 300, 200, array( 'center', 'center' ) ); 
add_image_size( 'rt_insurance_five_rows_img', 240, 200, array( 'center', 'center' ) );
add_image_size( 'rt_insurance_six_rows_img', 200, 150, array( 'center', 'center' ) ); 
}


/************************************************************************
* Backend admin scripts and styles 
*************************************************************************/
function rt_insurance_load_custom_wp_admin_style(){
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/css/admin.css' );
    
    /**** for metabox bundled plugin *****/    
    wp_enqueue_script( 'admin_meta2', get_template_directory_uri() . '/metabox/meta-box-plugin/js/autosave.js', array('jquery'), false );
    wp_enqueue_script( 'admin_meta3', get_template_directory_uri() . '/metabox/meta-box-plugin/js/jquery.validate.min.js', array('jquery'), false  );
    wp_enqueue_script( 'admin_meta4', get_template_directory_uri() . '/metabox/meta-box-plugin/js/validate.js', array('jquery'), false  );
    wp_enqueue_script( 'admin_meta5', get_template_directory_uri() . '/metabox/meta-box-plugin/js/media.js', array('jquery'), false  ); 
}
  
add_action('in_admin_footer', 'rt_insurance_load_custom_wp_admin_style');


/************************************************************************
* Front end scripts and styles 
*************************************************************************/

function rt_insurance_scripts() {

/** enqueue theme style **/
wp_enqueue_style( 'rt_insurance_style', get_stylesheet_uri() );

/*** fonts function from above ***/
wp_enqueue_style( 'rt_insurance_fonts', rt_insurance_fonts_url(), array(), '1.0.0' );

/*** for color switch styles ***/
if ( 'blue' === get_theme_mod( 'colorswitch' ))
  wp_enqueue_style( 'rt_insurance_styledefaultblue', get_stylesheet_directory_uri() . '/style-default-blue.css'  );
elseif ( 'green' === get_theme_mod( 'colorswitch' ))
  wp_enqueue_style( 'rt_insurance_stylegreen', get_stylesheet_directory_uri() . '/style-green.css'  );
elseif ( 'orange' === get_theme_mod( 'colorswitch' ))
  wp_enqueue_style( 'rt_insurance_styleorange', get_stylesheet_directory_uri() . '/style-orange.css'  );
elseif ( 'less' === get_theme_mod( 'colorswitch' ) and class_exists( 'WPLessPlugin' ))
  wp_enqueue_style( 'rt_insurance_styleless', get_stylesheet_directory_uri(). '/style.less' );
else wp_enqueue_style( 'rt_insurance_styledefaultblue', get_stylesheet_directory_uri() . '/style-default-blue.css'  );
/*** for color switch styles end ***/

/** enqueue comment script in single posts **/
if ( is_singular() ) 
  wp_enqueue_script( 'comment-reply' );
else;	

/** enqueue masonry script in blog page templates with 2 and 3 columns **/
if (is_page_template( 'page-templates/blog-archive-columns2.php' or 'page-templates/blog-archive-columns3.php' ))
  wp_enqueue_script( 'masonry' );
else;

/** enqueue theme scripts **/
wp_enqueue_script( 'rt_insurance_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'rt_insurance_flickity', get_template_directory_uri() . '/assets/js/flickity.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'rt_insurance_countto', get_template_directory_uri() . '/assets/js/countto.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'rt_insurance_isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'rt_insurance_waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'rt_insurance_scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'rt_insurance_scripts' );


/************************************************************************
* customize theme in customizer
*************************************************************************/

function rt_insurance_customize_register( $wp_customize ) {

//COPYRIGHT DETAILS
 $wp_customize->add_setting( 'copyright_detailstext' , array(
  'default'     => 'Copyright text',
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_insurance_sanitize_text',
) );

$wp_customize->add_control( 'copyright_detailstext', array(
  'type' => 'textarea',
	'label'        => esc_html__( 'Copyright text', 'insurance-agency' ),
	'section'    => 'rt_insurance_copyrighturl',
	'settings'   => 'copyright_detailstext',
 ));

$wp_customize->add_section( 'rt_insurance_copyrighturl' , array(
  'title'      => esc_html__( 'Copyright Details', 'insurance-agency' ),  
) );


//COLOR SWITCH
 $wp_customize->add_setting( 'colorswitch' , array(
  'default'     => 'blue',
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_insurance_sanitize_radio',
) );
$wp_customize->add_control( 'colorswitch', array(
	'label'        => esc_html__( 'Color switch', 'insurance-agency' ),
	'section'    => 'rt_insurance_colorswitch_section',
	'settings'   => 'colorswitch',
  'type'   => 'radio',
  'choices'    => array(
    'blue' => __('Default blue', 'insurance-agency' ),
    'green' => __('Green', 'insurance-agency' ),
    'orange' => __('Orange', 'insurance-agency' ), 
    'less' => __('Check this only if you want to use/modify less file. Make sure wp-less plugin is active.', 'insurance-agency' ),
  ),
 ));
$wp_customize->add_section( 'rt_insurance_colorswitch_section' , array(
  'title'      => esc_html__( 'Color switch', 'insurance-agency' ),  
) );


//CUSTOMIZE LOGO
$wp_customize->add_setting( 'logo', array(
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_insurance_sanitize_image',
) );
$wp_customize->add_section( 'rt_insurance_logo_section' , array(
  'title'       => esc_html__( 'Logo', 'insurance-agency' ),
  'priority'    => 30,
  'description' => esc_html__('Upload a logo image to replace the default site name and description in the header, in jpg or png format only.', 'insurance-agency' ),
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
  'label'    => esc_html__( 'Logo', 'insurance-agency' ),
  'section'  => 'rt_insurance_logo_section',
  'settings' => 'logo',
) ) );


//SIDEBAR IN ARCHIVE PAGES
 $wp_customize->add_setting( 'archivesidebar' , array(
  'default'     => 'on',
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_insurance_sanitize_radio',
) );
$wp_customize->add_control( 'archivesidebar', array(
  'label'        => esc_html__( 'Blog archive pages sidebar', 'insurance-agency' ),
  'section'    => 'rt_insurance_agency_archivesidebar_section',
  'settings'   => 'archivesidebar',
  'type'   => 'radio',
  'choices'    => array(
    'on' => __('Add sidebar in blog archive pages (category, tag, etc) - default', 'insurance-agency' ),
    'off' => __('Remove sidebar from blog archive pages (category, tag, etc)', 'insurance-agency' )  
 ),
 ));
$wp_customize->add_section( 'rt_insurance_agency_archivesidebar_section' , array(
  'title'      => esc_html__( 'Blog archive pages sidebar', 'insurance-agency' ),  
) );


//CUSTOMIZE INNER PAGES TITLE BACKGROUND IMAGE
$wp_customize->add_setting( 'titlebg', array(
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_insurance_sanitize_image',
) );
$wp_customize->add_section( 'titlebg_section' , array(
  'title'       => esc_html__( 'Inner pages title background', 'insurance-agency' ),
  'priority'    => 30,
  'description' => esc_html__('Upload image for inner pages title background in jpg or png format only. Recommended size at least 2000px wide.', 'insurance-agency' ),
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'titlebg', array(
  'label'    => esc_html__( 'Title background', 'insurance-agency' ),
  'section'  => 'titlebg_section',
  'settings' => 'titlebg',
) ) );

}
add_action( 'customize_register', 'rt_insurance_customize_register' );

/*** sanitize text and image and radio button inputs/choices ****/
function rt_insurance_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function rt_insurance_sanitize_image( $image, $setting ) {
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'png'          => 'image/png',
	);
	$file = wp_check_filetype( $image, $mimes );
	return ( $file['ext'] ? $image : $setting->default );
}
function rt_insurance_sanitize_radio( $input ) {
  $valid = array(
    'blue' => __('Default blue', 'insurance-agency' ),
    'green' => __('Green', 'insurance-agency' ),
    'orange' => __('Orange', 'insurance-agency' ), 
    'less' => __('Check this only if you want to use/modify less file. Make sure wp-less plugin is active.', 'insurance-agency' ),
	  'on' => __('Add sidebar in archive pages (category, tag, etc) - default', 'insurance-agency' ),
    'off' => __('Remove sidebar in archive pages (category, tag, etc)', 'insurance-agency' )  
  );
  if ( array_key_exists( $input, $valid ) ) {
    return $input;
  } else {
    return '';
  }
}
/*** sanitize end ***/


//CUSTOMIZE TITLE BACKGROUND IMAGES FUNCTIONS FOR FRONTEND
function rt_insurance_customizer_css() {
?>

<?php //archive blog and inner pages title background image in Customizer ?>
<style> 
<?php if ( 0 < count( strlen( ( $rt_insurance_title_background_image_url1 = get_theme_mod( 'titlebg' ) ) ) ) ) { ?>
	.mainheadlinewrapperpage {
		background-image: url( <?php echo $rt_insurance_title_background_image_url1; ?> );
  }
<?php } ?>
</style>

<?php //single post and page title background image that overwritte customizers bg image ?>
<style>
<?php if ( 0 < count( ( $rt_insurance_title_background_image_url2 = rwmb_meta( 'insurance_singletitlebg', 'type=image' )) ) ) { ?>
  .singletitlebg {
	  background-image: url( <?php   
      foreach ( $rt_insurance_title_background_image_url2 as $image ) {
        echo $image['full_url'];
      } ?> );
   }
<?php } ?>
</style>

<?php
} 
add_action( 'wp_head', 'rt_insurance_customizer_css');


/** set archive pages sidebar functions **/
function rt_insurance_agency_archivesidebar1(){
if ( 'on' == get_theme_mod( 'archivesidebar' ))
  return 'col-md-9';
elseif ( 'off' == get_theme_mod( 'archivesidebar' ))
  return 'col-md-12';
else
  return 'col-md-9';
}

function rt_insurance_agency_archivesidebar2(){
if ( 'on' == get_theme_mod( 'archivesidebar' ))
  get_sidebar();
elseif ( 'off' == get_theme_mod( 'archivesidebar' ))
  unregister_sidebar('sidebar-1'); 
else
  get_sidebar();
}
/** set archive pages sidebar functions end **/


/****************************************************************
* Sidebars and widget areas
*****************************************************************/

function rt_insurance_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Main Blog Sidebar', 'insurance-agency' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Appears in posts and pages sidebar', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3><span>',
		'after_title' => '</span></h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Second', 'insurance-agency' ),
		'id' => 'sidebar-3',
		'description' => esc_html__( 'Appears in footer', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Third', 'insurance-agency' ),
		'id' => 'sidebar-4',
		'description' => esc_html__( 'Appears in footer', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Forth', 'insurance-agency' ),
		'id' => 'sidebar-5',
		'description' => esc_html__( 'Appears in footer', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => esc_html__( 'Header First', 'insurance-agency' ),
		'id' => 'sidebar-6',
		'description' => esc_html__( 'Appears in header', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Second', 'insurance-agency' ),
		'id' => 'sidebar-7',
		'description' => esc_html__( 'Appears in header', 'insurance-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'rt_insurance_widgets_init' );


/************************************************************************
* page/post navigation
*************************************************************************/

add_filter( 'wp_nav_menu_objects', 'rt_insurance_nav_links' );
function rt_insurance_nav_links( $abcs ) {
foreach  ($abcs as $abc ) {
if('custom' == $abc->type && !is_page()){
if( 1 == preg_match('/^#([^\/]+)$/', $abc->url )){
$abc->url = home_url( '/' ).$abc->url;
}

}
	
}

return $abcs;   
}