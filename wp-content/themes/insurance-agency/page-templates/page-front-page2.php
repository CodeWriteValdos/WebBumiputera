<?php
/*Template Name: Front Page displays page sections2 posts
*/
get_header(); ?>

<?php get_template_part( 'nav' );  ?> 

<div id="wrapperpages">
  <?php 
  $args = array(
  'posts_per_page' => -1,
  'post_type' => 'page-sections2',
  'orderby' => 'menu_order',
);
// query
$the_query = new WP_Query( $args );
// loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		get_template_part('page-sections');
	}
} else {
}
// reset post data
wp_reset_postdata(); 
?>
</div> 
<?php get_footer(); ?>