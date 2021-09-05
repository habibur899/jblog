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
?>
<div class="post-comments">
    <h3 class="comment-title"><span>3 comments on this post</span></h3>
    <ul class="comments-list">
        <li>
            <div class="comment-img">
                <img src="assets/images/blog/comment1.png" class="rounded-circle" alt="img">
            </div>
            <div class="comment-desc">
                <div class="desc-top">
                    <h6>Rosalina Kelian</h6>
                    <span class="date">19th May 2023</span>
                    <a href="#" class="reply-link"><i class="lni lni-reply"></i>Reply</a>
                </div>
                <p>
                    Donec aliquam ex ut odio dictum, ut consequat leo interdum. Aenean nunc
                    ipsum, blandit eu enim sed, facilisis convallis orci. Etiam commodo
                    lectus
                    quis vulputate tincidunt. Mauris tristique velit eu magna maximus
                    condimentum.
                </p>
            </div>
        </li>
        <li class="children">
            <div class="comment-img">
                <img src="assets/images/blog/comment2.png" class="rounded-circle" alt="img">
            </div>
            <div class="comment-desc">
                <div class="desc-top">
                    <h6>Arista Williamson <span class="saved"><i
                                    class="lni lni-bookmark"></i></span></h6>
                    <span class="date">15th May 2023</span>
                    <a href="#" class="reply-link"><i class="lni lni-reply"></i>Reply</a>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim.
                </p>
            </div>
        </li>
        <li>
            <div class="comment-img">
                <img src="assets/images/blog/comment3.png" class="rounded-circle" alt="img">
            </div>
            <div class="comment-desc">
                <div class="desc-top">
                    <h6>Arista Williamson</h6>
                    <span class="date">12th May 2023</span>
                    <a href="#" class="reply-link"><i class="lni lni-reply"></i>Reply</a>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam.
                </p>
            </div>
        </li>
    </ul>
</div>
<div class="comment-form">
	<?php

	$jblog_comment_fields            = array();
	$jblog_comment_fields['author']  = <<<EOD
        <div class="row">
        <div class="error-message alert alert-danger" style="display:none">Field Cannot Be Empty</div>
        <div class="success-message alert alert-success" style="display:none">Comment Successful</div>
            <div class="col-lg-6 col-12">
                <div class="form-box form-group">
                    <input type="text" name="author" id="author" class="form-control form-control-custom"
                           placeholder="Your Name*" required="required"/>
                </div>
            </div>
EOD;
	$jblog_comment_fields['email']   = <<<EOD
        <div class="col-lg-6 col-12">
            <div class="form-box form-group">
                <input type="email" name="email" id="email" class="form-control form-control-custom"
                       placeholder="Your Email*" required="required"/>
            </div>
        </div>
EOD;
	$jblog_comment_fields['url']     = <<<EOD
        <div class="col-12">
            <div class="form-box form-group">
                <input type="url" name="url" id="url" class="form-control form-control-custom"
                       placeholder="Your Website"/>
            </div>
        </div>
EOD;
	$jblog_comment_field             = <<<EOD
        <div class="col-12">
            <div class="form-box form-group">
                <textarea name="comment" id="comment" rows="6" class="form-control form-control-custom"
                          placeholder="Your Comments*" required="required"></textarea>
            </div>
        </div>
EOD;
	$jblog_comment_submit_button     = <<<EOD
            <div class="col-12">
                <div class="button">
                    <button type="submit" class="btn mouse-dir white-bg">Post Comment <span
                                class="dir-part"></span></button>
                </div>
            </div>
        </div>
EOD;
	$jblog_comment_fields['cookies'] = ' ';

	$jblog_comment_form_arguments = array(
		'title_reply'          => __( 'Leave a comment', 'jblog' ),
		'fields'               => $jblog_comment_fields,
		'comment_field'        => $jblog_comment_field,
		'submit_button'        => $jblog_comment_submit_button,
		'comment_notes_before' => ' ',
		'class_form'           => ' ',
		'title_reply_before'   => '<h3 class="comment-reply-title"><span>',
		'title_reply_after'    => '</span></h3>',

	)
	?>
	<?php comment_form( $jblog_comment_form_arguments ); ?>
</div>
