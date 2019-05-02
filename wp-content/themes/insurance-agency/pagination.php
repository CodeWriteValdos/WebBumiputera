<?php
/**
 *  pagination
 *
 */
 ?>
          <div class="row">
            <div class="col-lg-12 pagination">
              <?php
              global $wp_query;
              $big = 999999999;
              echo paginate_links( array( 'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format'  => '?paged=%#%',
                'prev_text'    => esc_html__('', 'insurance-agency'),
	              'next_text'    => esc_html__('', 'insurance-agency'),
                'current' => max( 1, get_query_var( 'paged' ) ),
                'total'   => $wp_query->max_num_pages) );
              ?>
            </div>
          </div>	
