<?php
/**
 * Template for one author posts
 *
 */
get_header(); ?>

<?php get_template_part( 'nav', 'single' );  ?>  

<div id="wrapperpages">

  <header class="mainheadlinewrapperpage">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 mainheadlinewrapperpage-left">
           <h1><?php printf( esc_html__( 'Post By: %s', 'insurance-agency' ), get_the_author_meta('display_name')); ?>	</h1>
        </div>
        <div class="col-sm-6">
          <div class="breadcrumb-wrapper">
            <div class="breadcrumb">
              <?php if(function_exists('bcn_display')){ bcn_display();} ?>
            </div>
          </div>
        </div>
       </div>
      </div>
  </header>
  
  <div class="wrapper100percent"> 
    <div class="container">
      <div class="row">
        <div class="<?php echo rt_insurance_agency_archivesidebar1() ?> blogpages"> 
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <article class="blogpost">
            <div class="text-center">
              <?php the_post_thumbnail('rt_insurance_one_row_img'); ?>
            </div> 
            <div class="wrapper100percent">
              <div <?php post_class(); ?>>
              <?php include(trailingslashit( get_template_directory() ) . 'meta.php'); ?>
                <a href="<?php the_permalink(); ?>" 
                title="<?php the_title_attribute(); ?>">
                <h2 class="blog-title">
                <?php the_title(); ?>
                </h2>
                </a>
                <br>
                <div class="wrapper100percent">
                <p>
                <?php 
                $content = get_the_content();
                $trimmed_content = wp_trim_words( $content, 35 );
                echo $trimmed_content;
                ?>
                </p>
                <?php include (trailingslashit( get_template_directory() ) . 'button2.php');?>
                </div>
              </div>
            </div>
          </article>
          <?php endwhile; else : 
            get_template_part( 'content', 'none' );
          endif; 
	        include (trailingslashit( get_template_directory() ) . 'pagination.php');?>
        </div>
          <?php rt_insurance_agency_archivesidebar2() ?>
      </div>
    </div>
  </div>
 
</div>	
<?php get_footer(); ?>