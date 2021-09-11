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
	                            <?php wp_link_pages(); ?>
                                <div class="post-tags-media">
                                    <div class="post-tags popular-tag-widget mb-xl-40">
                                        <h5 class="tag-title"><?php esc_html( _e( 'Related Tags', 'jblog' ) ) ?></h5>
                                        <div class="tags">
											<?php echo get_the_tag_list() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    </section>


<?php endwhile; ?>
<?php get_footer() ?>
