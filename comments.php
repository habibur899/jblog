<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage JBlog
 * @since JBlog 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$jblog_comment_count = get_comments_number();
?>

<div id="comments"
     class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
        <h2 class="comments-title">
			<?php if ( '1' === $jblog_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'jblog' ); ?>
			<?php else : ?>
				<?php
				printf(
				/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $jblog_comment_count, 'Comments title', 'jblog' ) ),
					esc_html( number_format_i18n( $jblog_comment_count ) )
				);
				?>
			<?php endif; ?>
        </h2><!-- .comments-title -->

        <ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ul',
					'short_ping'  => true,
					'callback'    => 'jblog_comment'
				)
			);
			?>
        </ul><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'jblog' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => esc_html__( 'Older comments', 'jblog' ),
				'next_text'          => esc_html__( 'Newer comments', 'jblog' ),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'jblog' ); ?></p>
	<?php endif; ?>
	<?php endif; ?>

	<?php
	$commenter = wp_get_current_commenter();
	if ( ! isset( $args['format'] ) ) {
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	}
	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html_req = ( $req ? " required='required'" : '' );
	$html5    = 'html5' === $args['format'];

	$comments_args = array(
		// redefine your own textarea (the comment body)
		'comment_field'       => '<div class="form-box form-group">
		<textarea class="form-control form-control-custom" id="comment" name="comment" aria-required="true" placeholder="' . esc_attr__( "Your Comments", "text-domain" ) . '" rows="8" cols="37" wrap="hard"></textarea></div>',
		'label_submit'        => esc_html__( 'POST A COMMENT', 'jblog' ),
		'class_submit'        => 'btn comment-submit',
		'title_reply'         => esc_html__( 'ADD COMMENT', 'jblog' ),
		'title_reply_before'  => '<div class="msg_form"><h5 id="reply-title" class="comment-reply-title">',
		'title_reply_after'   => '</h5><div>',
		'cancel_reply_before' => '',
		'cancel_reply_after'  => '',
		'cancel_reply_link'   => esc_html__( 'Cancel reply' ),


		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => sprintf(
				'<div class="form-box form-group">%s</div>',

				sprintf(
					'<input placeholder="Your Name" class="form-control form-control-custom" id="author" name="author" type="text" value="%s" size="30" maxlength="245"%s />',
					esc_attr( $commenter['comment_author'] ),
					$html_req
				)
			),
			'email'  => sprintf(
				'<p class="form-box form-group">%s</p>',

				sprintf(
					'<input class="form-control form-control-custom" placeholder="Your Email" id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes"%s />',
					( $html5 ? 'type="email"' : 'type="text"' ),
					esc_attr( $commenter['comment_author_email'] ),
					$html_req
				)
			),
		),
		)
	);
	comment_form( $comments_args );
	?>

</div><!-- #comments -->
