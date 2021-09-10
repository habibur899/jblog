<?php

// Custom Comment Listing -------------------------

function custom_comment_callback( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li ';
		$add_below = 'div-comment';
	} ?>
    <<?php echo $tag; ?><?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php
	if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-desc"><?php
	} ?>
    <div class="comment-img"><?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'],null, 'avatar', array('class' => array('img-responsive', 'rounded-circle') )  );

		} ?>

    </div>
	<?php
	if ( $comment->comment_approved == '0' ) { ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'jblog' ); ?></em>
        <br/><?php
	} ?>
    <div class="comment-desc">
        <div class="desc-top">
            <h6><?php printf( get_comment_author() ); ?></h6>
            <span class="date">
                    <?php
                    /* translators: 1: date, 2: time */
                    printf(
	                    __( '%1$s', 'jblog' ),
	                    get_comment_date( 'jS F Y' )
                    ); ?>
                </span>
			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => $add_below,
						'depth'     => $depth,
						'max_depth' => $args['max_depth']
					)
				)
			);
			?>
			<?php
			edit_comment_link( __( '(Edit)', 'jblog' ), '  ', '' ); ?>
        </div>
		<?php comment_text(); ?>
    </div>

	<?php
	if ( 'div' != $args['style'] ) : ?>
        </div><?php
	endif;

}

// Comment box filtered to the bottom-----------------------------------

function jblog_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'jblog_move_comment_field_to_bottom' );