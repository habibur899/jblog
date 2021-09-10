<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Grids
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comment-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
        <div class="post-comments">
            <h3 class="comment-title">
				<span>
					<?php
					$jblog_comment_count = get_comments_number();
					if ( '1' === $jblog_comment_count ) {
						printf(
						/* translators: 1: title. */
							esc_html__( 'One Comment on this post', 'jblog' ),
							'<span>' . wp_kses_post( get_the_title() ) . '</span>'
						);
					} else {
						printf(
						/* translators: 1: comment count number, 2: title. */
							esc_html( _nx( '%1$s Comment on this post', '%1$s Comments on this post', $jblog_comment_count, 'comments title', 'jblog' ) ),
							number_format_i18n( $jblog_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'<span>' . wp_kses_post( get_the_title() ) . '</span>'
						);
					}
					?>
				</span>
            </h3><!-- .comments-title -->
            <!-- .comment-list -->
            <ul class="comments-list ul-m-0">
				<?php
				wp_list_comments(
					array(
						'style'       => 'ul',
						'short_ping'  => true,
						'callback'    => 'custom_comment_callback',
						'avatar_size' => 100,
					)
				);
				?>
            </ul><!-- .comment-list -->

			<?php the_comments_navigation(); ?>
        </div>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'jblog' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	// Code for custom comments form

	$commenter = wp_get_current_commenter();
	if ( isset( $args['format'] ) ) {
		;
	}
	$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	$req            = get_option( 'require_name_email' );
	$aria_req       = ( $req ? "aria-required = 'true' " : '' );
	$html_req       = ( $req ? "required = 'required' " : '' );
	$html5          = 'html5' === $args['format'];

	$comments_args = array(
		// change the title of send button
		'label_submit'         => __( 'Post Comment', 'jblog' ),
		'class_submit'         => 'btn mouse-dir white-bg',
		'id_form'              => '',
		'id_submit'            => '',
		'class_container'      => 'comment-form',
		'class_form'           => 'contact-form',
		// change the title of the reply section
		'title_reply'          => __( 'Leave a Comment', 'jblog' ),
		'title_reply_to'       => __( 'Leave a Reply to %s', 'jblog' ),
		'title_reply_before'   => '<h3 class="comment-reply-title"><span>',
		'title_reply_after'    => '</span></h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply', 'jblog' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
		'submit_field'         => '<div class="form-submit button">%1$s %2$s</div></div>',
		'format'               => 'xhtml',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_form_top'     => 'ds',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		// redefine your own textarea (the comment body)
		'comment_field'        => '<div class="col-12"><div class="form-box form-group"><textarea id="comment" class="form-control form-control-custom" name="comment" placeholder="Your Comment... " aria-required="true"></textarea></div></div>',
		'fields'               => apply_filters( 'comment_form_default_fields', array(

				'author' =>
					'<div class="row"><div class="col-lg-6 col-12"><div class="form-box form-group">' .
					'<input id="author" class="form-control form-control-custom" placeholder="Your Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /></div></div>',

				'email' =>
					'<div class="col-lg-6 col-12"><div class="form-box form-group">' .
					'<input id="email" class="form-control form-control-custom" placeholder="Your Email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></div></div>',

				'url'     =>
					'<div class="col-12"><div class="form-box form-group">' .
					'<input id="url" class="form-control form-control-custom" placeholder="Your Website" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></div></div>',

				// Now we will add our new privacy checkbox optin
				'cookies' => '',

			)
		),
	);

	comment_form( $comments_args );

	?>

</div><!-- #comments -->
