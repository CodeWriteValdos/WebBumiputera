<?php
/**
 * Template for comments.
 *
 * 
 */
?>
<div class="commentwrapper"> 
  <br>
  <!-- comment one -->           
  <?php if ( post_password_required() ) return; ?>
	<?php if ( have_comments() ) : ?>
  <h4>
	<?php printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'insurance-agency' ),
	number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
	?>
  </h4>
  <br>
	<ol>
		<?php
			wp_list_comments( array(                           
			'style'       => 'ol',
			'short_ping'  => true,
			'avatar_size' => 74,
		) );
	  ?>
	</ol>
  <!-- comment one end --> 
<?php	
  if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'insurance-agency' ); ?></h2>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'insurance-agency' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'insurance-agency' ) ); ?></div>
		</nav>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		  <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'insurance-agency' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>
  
  <!-- comment form --> 
  <?php 
  $aria_req = NULL;
  $comment_args = array( 
  'title_reply'=> esc_html__('Join the Discussion', 'insurance-agency') ,
  'comment_notes_before'=> esc_html__('', 'insurance-agency') ,
  'fields' => apply_filters( 'comment_form_default_fields', array(
  
  'author' => '<div class="comment-form-author">' . 
  '<input id="author" placeholder="Your name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',   
  'email'  => '<div class="comment-form-email">' .
  '<input id="email" placeholder="Your email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</div>',
  'url' => '<div class="comment-form-url">' . 
  '<input id="url" placeholder="Your website" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . ' /></div>',   
 ) ),
  'comment_field' => '<div>' .
  '<textarea id="comment" placeholder="Comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
  '</div>',
  'comment_notes_after' => ''
);
comment_form($comment_args); ?>
<!-- comment form end --> 
</div>  