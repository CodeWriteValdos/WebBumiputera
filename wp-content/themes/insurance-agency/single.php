<?php
/**
 * Template for single blog post
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
        <?php //sidebar metabox 
        $sideb = rwmb_meta('insurance_sideb'); 
         ?>
        <div class="<?php if (isset($sideb)&& strlen($sideb)) echo $sideb; else echo "col-md-9"; ?>"> 
        <?php //sidebar metabox ?>
        <!-- post -->
        <article>
        <div class="text-center">
          <?php the_post_thumbnail('rt_insurance_one_row_img'); ?>
        </div> 
          <!-- meta -->
          <?php if ( 'post' == get_post_type() ){
          include(trailingslashit( get_template_directory() ) . 'meta.php'); 
          }
          else "";
          ?>
          <!-- meta end -->
          <div class="wrapper100percent"> 
            <?php  the_content(); ?>
          </div>
          <?php wp_link_pages( array( 'before' => '<div class="pagination">' . esc_html__( 'Pages:', 'insurance-agency' ), 'after' => '</div>' ) ); ?>
        </article>
        <!-- post end -->
        <!-- tags -->
        <?php if(has_tag()): ?>
        <div class="tags">
            <?php the_tags( ' ',' ' ); ?> 
        </div>
        <div class="postnavigation">
          <div class="postnavigation-previous"><?php previous_post_link('<strong>%link</strong>'); ?></div>
          <div class="postnavigation-next"><?php next_post_link('<strong>%link</strong>'); ?></div>
        </div> 
        <?php endif; ?>
          <!-- comments -->
          <?php if ( comments_open() || '0' != get_comments_number() ){
          comments_template( '', true );
          }
        ?>
        <!-- comments end -->
        <?php endwhile; else : 
          get_template_part( 'content', 'none' );
        endif; ?>		
        </div>
		<?php 
        //sidebar metabox
        $sideb = rwmb_meta('insurance_sideb'); 
        if($sideb == "col-md-12") 
          unregister_sidebar( 'sidebar-1' ); 
        else 
          get_sidebar(); 
        ?> 	
      </div>	
    </div>
  </div> 
</div> 
<?php posts_nav_link(); ?> 
<?php get_footer(); ?>