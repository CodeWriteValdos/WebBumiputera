<?php
/*Default Page Template 
*/
get_header(); ?>

<?php get_template_part( 'nav' );  ?> 

<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>
  <?php 
    include(trailingslashit( get_template_directory() ) . 'title-background-images/title-function.php');
  ?> 
  <div class="wrapper100percent">
    <div class="container">
      <div class="row">
        <div class="col-md-12">				
          <?php the_post_thumbnail('post-large'); ?>
          <?php  the_content(); ?>
          <?php if ( comments_open() || get_comments_number() ) {comments_template();} endwhile; ?>
        </div>
      </div>
  </div>
</div>
</div>
<?php get_footer(); ?>