<?php get_header() ?>
<?php while ( have_posts() ) :
	the_post(); ?>
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">

                    <div class="single-inner">
                        <div class="post-thumbnils">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'large' );
							}
							?>
                        </div>
                        <div class="post-details">
                            <div class="detail-inner">
                                <h2 class="post-title">
									<?php the_title() ?>
                                </h2>

                                <ul class="custom-flex post-meta">
                                    <li>
                                        <a href="<?php echo esc_url( get_day_link( false, false, false ) ); ?>">
                                            <i class="lni lni-calendar"></i>
											<?php echo get_the_date( 'd F Y' ) ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="lni lni-comments"></i>
											<?php comments_popup_link( __( 'Leave a comment', 'jblog' ), __( '1 Comment', 'jblog' ), __( '% Comments', 'jblog' ) ); ?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <i class="lni lni-eye"></i>
											<?php echo getPostViews( get_the_ID() ); ?>
                                        </a>
                                    </li>
                                </ul>
								<?php the_content(); ?>
                                <div class="post-tags-media">
                                    <div class="post-tags popular-tag-widget mb-xl-40">
                                        <h5 class="tag-title"><?php esc_html( _e( 'Related Tags', 'jblog' ) ) ?></h5>
                                        <div class="tags">
											<?php echo get_the_tag_list() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="post-comments">
                                <h3 class="comment-title"><span>3 comments on this post</span></h3>
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment-img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/comment1.png"
                                                 class="rounded-circle" alt="img">
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
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/comment2.png"
                                                 class="rounded-circle" alt="img">
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
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog/comment3.png"
                                                 class="rounded-circle" alt="img">
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
                                <h3 class="comment-reply-title"><span>Leave a comment</span></h3>
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-box form-group">
                                                <input type="text" name="#" class="form-control form-control-custom"
                                                       placeholder="Your Name"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-box form-group">
                                                <input type="email" name="#" class="form-control form-control-custom"
                                                       placeholder="Your Email"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <input type="email" name="#" class="form-control form-control-custom"
                                                       placeholder="Your Subject"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                            <textarea name="#" rows="6" class="form-control form-control-custom"
                                                      placeholder="Your Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="button">
                                                <button type="submit" class="btn mouse-dir white-bg">Post Comment <span
                                                            class="dir-part"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<div class="comment-form">
								<?php
								// If comments are open or there is at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
								?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php endwhile; ?>
<?php get_footer() ?>
