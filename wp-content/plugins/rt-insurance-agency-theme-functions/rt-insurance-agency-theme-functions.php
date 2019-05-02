<?php
/*
Plugin Name: Rt Insurance Agency Theme Functions
Plugin URI: http://themeforest.net/user/rayoflightt
Description: Shortcodes and custom post types for Insurance Agency - Business and Insurance WordPress Theme
Version: 1.0
Author: rayoflightthemes.com
Author http://themeforest.net/user/rayoflightt
License: http://themeforest.net/licenses
*/
/********************************************************
* CUSTOM POST TYPES
*********************************************************/

/* Page Sections custom post type */
add_action('init', 'rt_insurancetheme_one_page_section'); 

function rt_insurancetheme_one_page_section()  {  
  $labels = array(  
    'name' => esc_html__('Page Sections', 'insurance-agency'),  
    'singular_name' => esc_html__('Page Section', 'insurance-agency'),  
    'add_new' => esc_html__('Add section', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add new section', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit section', 'insurance-agency'),  
    'new_item' => esc_html__('New section', 'insurance-agency'),  
    'view_item' => esc_html__('View section', 'insurance-agency'),  
    'search_items' => esc_html__('Search sections', 'insurance-agency'),  
    'not_found' =>  esc_html__('No sections found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('No sections found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => true,  
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => true,	 
    'menu_position' => 4, 
    'supports' => array( 'title', 'editor')  
  );  
  register_post_type('page-sections',$args);  
} 
/* Page Sections custom post type end */


/* Page Sections2 custom post type */
add_action('init', 'rt_insurancetheme_one_page_section2'); 

function rt_insurancetheme_one_page_section2()  {  
  $labels = array(  
    'name' => esc_html__('Page Sections2', 'insurance-agency'),  
    'singular_name' => esc_html__('Page Section2', 'insurance-agency'),  
    'add_new' => esc_html__('Add section', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add new section', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit section', 'insurance-agency'),  
    'new_item' => esc_html__('New section', 'insurance-agency'),  
    'view_item' => esc_html__('View section', 'insurance-agency'),  
    'search_items' => esc_html__('Search sections', 'insurance-agency'),  
    'not_found' =>  esc_html__('No sections found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('No sections found in Trash', 'insurance-agency'),   
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => true,  
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => true,	 
    'menu_position' => 5, 
    'supports' => array( 'title', 'editor')  
  );  
  register_post_type('page-sections2',$args);  
} 
/* Page Sections2 custom post type end */



/* Testimonials carousel custom post type */
add_action('init', 'rt_insurancetheme_carousel2_cpt'); 

function rt_insurancetheme_carousel2_cpt()  {  
  $labels = array(  
    'name' => esc_html__('Testimonials carousel', 'insurance-agency'),  
    'singular_name' => esc_html__('Testimonials carousel', 'insurance-agency'),  
    'add_new' => esc_html__('Add New item', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add New item', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit item', 'insurance-agency'),  
    'new_item' => esc_html__('New item', 'insurance-agency'),  
    'view_item' => esc_html__('View item', 'insurance-agency'),  
    'search_items' => esc_html__('Search items', 'insurance-agency'),  
    'not_found' =>  esc_html__('Not found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('Not found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'thumbnail', 'title' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true, 
	  'menu_position' => 6, 
    'capability_type' => 'post'
  );  
  register_post_type('rt-ins-carousel2',$args);  
} 
/* Testimonials carousel custom post type */


/* Business partners carousel custom post type */
add_action('init', 'rt_insurancetheme_carousel1_cpt'); 

function rt_insurancetheme_carousel1_cpt()  {  
  $labels = array(  
    'name' => esc_html__('Business partners carousel', 'insurance-agency'),  
    'singular_name' => esc_html__('Business partners carousel', 'insurance-agency'),  
    'add_new' => esc_html__('Add New item', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add New item', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit item', 'insurance-agency'),  
    'new_item' => esc_html__('New item', 'insurance-agency'),  
    'view_item' => esc_html__('View item', 'insurance-agency'),  
    'search_items' => esc_html__('Search items', 'insurance-agency'),  
    'not_found' =>  esc_html__('Not found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('Not found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => true,  
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => true,	 
    'menu_position' => 7, 
    'supports' => array( 'title', 'thumbnail')  
  );  
  register_post_type('rt-ins-carousel1',$args);  
} 
/* Business partners carousel custom post type */


/* Team carousel custom post type */
add_action('init', 'rt_insurancetheme_team_cpt'); 

function rt_insurancetheme_team_cpt()  {  
  $labels = array(  
    'name' => esc_html__('Team', 'insurance-agency'),  
    'singular_name' => esc_html__('Team', 'insurance-agency'),  
    'add_new' => esc_html__('Add New item', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add New item', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit item', 'insurance-agency'),  
    'new_item' => esc_html__('New item', 'insurance-agency'),  
    'view_item' => esc_html__('View item', 'insurance-agency'),  
    'search_items' => esc_html__('Search items', 'insurance-agency'),  
    'not_found' =>  esc_html__('Not found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('Not found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'thumbnail', 'title' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'team','with_front' => false), 
	  'menu_position' => 8, 
    'capability_type' => 'post'
  );  
  register_post_type('rt-ins-team',$args);  
} 
/* Team custom post type */


/* Carousel2 custom post type */
add_action('init', 'rt_insurancetheme_carousel1d_cpt'); 

function rt_insurancetheme_carousel1d_cpt()  {  
  $labels = array(  
    'name' => esc_html__('Carousel2', 'insurance-agency'),  
    'singular_name' => esc_html__('Carousel2', 'insurance-agency'),  
    'add_new' => esc_html__('Add New item', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add New item', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit item', 'insurance-agency'),  
    'new_item' => esc_html__('New item', 'insurance-agency'),  
    'view_item' => esc_html__('View item', 'insurance-agency'),  
    'search_items' => esc_html__('Search items', 'insurance-agency'),  
    'not_found' =>  esc_html__('Not found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('Not found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => true,  
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => true,	 
    'menu_position' => 9, 
    'supports' => array( 'title', 'thumbnail')  
  );  
  register_post_type('rt-ins-carousel3',$args);  
} 
/* Carousel2 custom post type */



/* Gallery filter custom post type */
add_action('init', 'rt_insurancetheme_galleryfilter_cpt'); 

function rt_insurancetheme_galleryfilter_cpt() {  
{
  $labels = array(  
    'name' => esc_html__('Gallery filter', 'insurance-agency'),  
    'singular_name' => esc_html__('gallery filter', 'insurance-agency'),  
    'add_new' => esc_html__('Add New', 'insurance-agency'),  
    'add_new_item' => esc_html__('Add New', 'insurance-agency'),  
    'edit_item' => esc_html__('Edit item', 'insurance-agency'),  
    'new_item' => esc_html__('New item', 'insurance-agency'),  
    'view_item' => esc_html__('View item', 'insurance-agency'),  
    'search_items' => esc_html__('Search item', 'insurance-agency'),  
    'not_found' =>  esc_html__('No item found', 'insurance-agency'),  
    'not_found_in_trash' => esc_html__('No item found in Trash', 'insurance-agency'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => true,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => array('slug' => 'gallery','with_front' => false), 
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => false,	 
    'menu_position' => 10, 
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')  
  );  
  register_post_type('rt-ins-galleryfilter',$args);  
} 

register_taxonomy( 'rt-ins-galleryfilter-categories', 
	array( 	'rt-ins-galleryfilter' ), 
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"), 
		'singular_label' => __( "Cagetory", 'insurance-agency' ), 
		'rewrite' => array( 'slug' => 'category',  
		'with_front' => false)
	) 
);

}
/* gallery filter custom post type end */


register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'rt_insurancetheme_functions_flush_rewrites' );
function rt_insurancetheme_functions_flush_rewrites() {
  register_post_type('page-sections',$args); 
  register_post_type('page-sections2',$args); 
  register_post_type('rt-ins-carousel1',$args);
  register_post_type('rt-ins-carousel2',$args); 
  register_post_type('rt-ins-carousel3',$args);   
  register_post_type('rt-ins-team',$args);
  register_post_type('rt-ins-galleryfilter',$args);  
  register_taxonomy( 'rt-ins-galleryfilter-categories', 
	array( 	'rt-ins-galleryfilter' ), 
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"), 
		'singular_label' => __( "Cagetory", 'insurance-agency' ), 
		'rewrite' => array( 'slug' => 'category',  
		'with_front' => false)
	) 
  );
flush_rewrite_rules();
}

/**********************************************************
 * SHORTCODES  
 *
 ***********************************************************/ 
 
/******************
 * Business partners carousel query [business_partners_carousel columns="6" limit="-1" order="ASC"]  
 *
 ******************/ 
function rt_insurancetheme_carousel1( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'columns' => '6',  
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('php/business-partners-carousel.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('business_partners_carousel','rt_insurancetheme_carousel1');


/******************
 * Testimonials carousel query [testimonials_carousel limit="-1" order="ASC"]  
 *
 ******************/ 
function rt_insurancetheme_carousel2( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => -1, 
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('php/testimonials-carousel.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('testimonials_carousel','rt_insurancetheme_carousel2');


/******************
 * Blog news carousel query [blog_news_carousel columns="3" limit="-1" order="DESC"]  
 *
 ******************/ 
function rt_insurancetheme_carousel3( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => -1, 
  'columns' => 3,
	'order' => 'DESC'
   ),$atts));
   
	ob_start();	
	include('php/blog-news-carousel.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('blog_news_carousel','rt_insurancetheme_carousel3');


/******************
 * Team carousel query [team columns="3" limit="-1" order="DESC"]  
 *
 ******************/ 
function rt_insurancetheme_team( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => -1, 
  'columns' => 3,
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('php/team.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('team','rt_insurancetheme_team');


/******************
 * Gallery filter query [rt_gallery_filter  limit="-1" order="ASC" columns="3"]  
 *
 ******************/ 
function rt_insurancetheme_galleryfilter( $atts, $content = null ) {	

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC',
 	'columns' => '3' 
   ),$atts));
   
	ob_start();	
	include('php/galleryfilter.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_gallery_filter','rt_insurancetheme_galleryfilter');


/******************
 * Carousel2 query [carousel2 columns="6" limit="-1" order="ASC"]  
 *
 ******************/ 
function rt_insurancetheme_carousel1d( $atts, $content = null ) {	
	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'columns' => '6',  
	'order' => 'ASC'
   ),$atts));
   
	ob_start();	
	include('php/carousel2.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('carousel2','rt_insurancetheme_carousel1d');



/***************************************
* Shortcodes below are depreciated, not used in theme (but you can play and test them if you don't want to use page builder)

***************************************/

/***************
 one_counter [one_counter headline="headline" number="50" column="fw-col-sm-4"]
****************/

function rt_insutancetheme_one_counter( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'headline' => 'one counter',
	'number' => '50',
	'column' => 'fw-col-sm-4',  
 	'imgurl' => '', 
	),$atts));

	return "
  <div class=\"$column\">
    <div class=\"timerwrapper\">
      <div class=\"onecounter\">
        <div class=\"onecounter-left\">
          <img src=\"$imgurl\" alt=\"\">
        </div>
        <div class=\"onecounter-right\">
          <p><span class=\"timer\" data-to=\"$number\" data-speed=\"100\" data-refresh-interval=\"1\">1</span></p>
          <h6>$headline</h6>
        </div>
      </div>
    </div>
  </div>";
}
add_shortcode('one_counter','rt_insutancetheme_one_counter');



/******************
 * Social icons shortcode  [social_icon url="" icon="" target=""]*
 *
 ******************/

function rt_insurancetheme_socialicon( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '',
  'icon' => '',
	'target' => '_blank',
	),$atts));

	return "						  
<a href=\"$url\" target=\"$target\"><i class=\"fa fa-".$icon."\"></i></a>
";
}
add_shortcode('social_icon','rt_insurancetheme_socialicon');



/************
* main headline [main_headline headline="" subheadline=""]*

*************/
function rt_insurancetheme_main_headline( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'subheadline' => '',
  'headline' => '',
),$atts));

	return "
  <div class=\"mainheadlinewrapper\">
    <div class=\"mainheadline\">
      <h2>".$headline."</h2>
      <h3>".$subheadline."</h3>
    </div>
  </div>";
}
add_shortcode('main_headline','rt_insurancetheme_main_headline');


/*****************
* button1 [button1 url="" content="" position="" target=""]*
******************/

function rt_insurancetheme_button1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
	'position' => '',
  'content' => '',
	'target' => '_blank',

	),$atts));

	return "

<div class=\"button1 $position\">
  <a href=\"".$url."\" target=\"".$target."\">".$content."</a>
</div>";
}
add_shortcode('button1','rt_insurancetheme_button1');



/******** Shortcodes for Bootstrap columns *******/


/************************************************************************
*  text container //[container]content[/container]
*************************************************************************/

function rt_insurancetheme_container( $atts, $content = null ) {

	return "<div class=\"container\"><div class=\"row\">".do_shortcode($content)."</div></div>";

}
add_shortcode('container','rt_insurancetheme_container');


/************************************************************************
*  one //
[container][one]content[/one][/container]
*************************************************************************/

function rt_insurancetheme_one( $atts, $content = null ) {

	return "<div class=\"col-lg-12\">".do_shortcode($content)."</div>";

}
add_shortcode('one','rt_insurancetheme_one');



/************************************************************************
*  one third //
[container][one_third]content[/one_third][one_third]content[/one_third][one_third]content[/one_third][/container]
*************************************************************************/

function rt_insurancetheme_one_third( $atts, $content = null ) {

	return "<div class=\"col-lg-4\">".do_shortcode($content)."</div>";

}
add_shortcode('one_third','rt_insurancetheme_one_third');



/************************************************************************
*  one forth //
[container][one_forth]content[/one_forth][one_forth]content[/one_forth][one_forth]content[/one_forth][/container]
*************************************************************************/

function rt_insurancetheme_one_forth( $atts, $content = null ) {

	return "<div class=\"col-lg-3\">".do_shortcode($content)."</div>";

}
add_shortcode('one_forth','rt_insurancetheme_one_forth');



/************************************************************************
*  one half //
[container][one_half]content[/one_half][one_half]content[/one_half][one_half]content[/one_half][/container]
*************************************************************************/

function rt_insurancetheme_one_half( $atts, $content = null ) {

	return "<div class=\"col-lg-6\">".do_shortcode($content)."</div>";

}
add_shortcode('one_half','rt_insurancetheme_one_half');



