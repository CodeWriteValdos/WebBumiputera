<?php
/**
 * Template for single team post
 *
 */
get_header(); ?>

<?php get_template_part( 'nav', 'single' );  ?> 

<div id="wrapperpages">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php 
    include(trailingslashit( get_template_directory() ) . 'title-background-images/title-function.php');
  ?> 
  <div class="wrapper100percent">
    <div class="container">
      <div class="row blogpages">
        <div class="col-md-8">
          <?php $teamtext5 = rwmb_meta('insurance_teamtext5'); ?>
          <?php echo $teamtext5; ?>
        </div>
        <div class="col-md-4 text-center">
          <div class="row">
            <div class="col-md-12">
              <?php the_post_thumbnail('rt_insurance_one_row_img'); ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <?php $teamtext3 = rwmb_meta('insurance_teamtext3'); ?>
              <ul class="teamcolumn-icons"><?php echo $teamtext3; ?></ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php $teamtext4 = rwmb_meta('insurance_teamtext4'); ?>
              <ul class="teamcolumn-icons"><?php echo $teamtext4; ?></ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php  the_content(); ?>
        </div>
      </div>	
      <?php endwhile; else : 
        get_template_part( 'content', 'none' );
      endif; ?>	
    </div>	
  </div>
</div> 
<?php get_footer(); ?>