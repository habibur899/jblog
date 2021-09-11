<?php get_header() ?>

<section class="section latest-news-area blog-list">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<div class="row">
					<div class="sidebar mb-3">
						<div class="widget">
							<h2><?php esc_html_e( 'Author Name: ', 'jblog' );?><span class="highlight-color"><?php esc_html(get_the_author_meta('display_name'))?></span></h2>

						</div>
					</div>
					<?php if ( ! have_posts() ) {
						?>
						<div class="error-area">
							<div class="d-table">
								<div class="d-table-cell">
									<div class="container">
										<div class="error-content">
											<h2><?php esc_html_e( 'No Result Found', 'jblog' ); ?></h2>
											<div class="button">
												<a href="<?php home_url(); ?>"
												   class="btn"><?php esc_html_e( 'Go To Home', 'jblog' ); ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					if ( have_posts() ):while ( have_posts() ):the_post(); ?>
						<div class="col-lg-4 col-12">
							<div class="single-news wow fadeInUp" data-wow-delay=".3s">
								<div class="image">
									<?php the_post_thumbnail( 'thumb-image', array( 'class' => 'thumb' ) ); ?>
								</div>
								<div class="content-body">
									<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
									<div class="meta-details">
										<ul>
											<?php if ( has_tag() ): ?>
												<li>
													<a href="<?php echo get_tag_link( get_the_tags()[0]->term_id ) ?>"><i
															class="lni lni-tag"></i><?php echo get_the_tags()[0]->name; ?>
													</a></li>
											<?php endif; ?>
											<li><a href="<?php echo esc_url( get_day_link( false, false, false ) ); ?>"><i
														class="lni lni-calendar"></i><?php echo get_the_date( 'm-d-Y' ) ?>
												</a></li>
											<li><a href="<?php the_permalink(); ?>"><i
														class="lni lni-eye"></i> <?php echo getPostViews( get_the_ID() ); ?>
												</a></li>
										</ul>
									</div>
									<?php echo wp_trim_words( get_the_content(), 20, '' ) ?>
									<div class="button">
										<a href="<?php the_permalink(); ?>"
										   class="btn"><?php _e( 'Read More', 'jblog' ) ?></a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;endif; ?>
					<div class="pagination center">
						<?php echo get_the_posts_pagination( array(
							'prev_text'          => '<i class="lni lni-chevron-left"></i>',
							'next_text'          => '<i class="lni lni-chevron-right"></i>',
							'screen_reader_text' => ' ',
							'mid_size'           => 4
						) ); ?>
					</div>
				</div>


			</div>
		</div>
	</div>
</section>


<?php get_footer() ?>
