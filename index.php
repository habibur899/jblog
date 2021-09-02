<?php get_header() ?>

<section class="section latest-news-area blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12">
                <div class="row">
					<?php if ( have_posts() ):while ( have_posts() ):the_post(); ?>
                        <div class="col-lg-6 col-12">
                            <div class="single-news wow fadeInUp" data-wow-delay=".3s">
                                <div class="image">
									<?php the_post_thumbnail( 'large', array( 'class' => 'thumb' ) ); ?>
                                </div>
                                <div class="content-body">
                                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                                    <div class="meta-details">
                                        <ul>
                                            <li><a href="<?php echo get_tag_link( get_the_tags()[0]->term_id ) ?>"><i
                                                            class="lni lni-tag"></i><?php echo get_the_tags()[0]->name; ?>
                                                </a></li>
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
                </div>

                <div class="pagination center">
                    <ul class="pagination-list">
						<?php echo get_the_posts_pagination( array(
							'prev_text'          => '<i class="lni lni-chevron-left"></i>',
							'next_text'          => '<i class="lni lni-chevron-right"></i>',
							'screen_reader_text' => ' ',
							'mid_size'           => 4
						) ); ?>
                    </ul>
                </div>

            </div>
            <aside class="col-lg-4 col-md-5 col-12">
				<?php get_sidebar() ?>
            </aside>
        </div>
    </div>
</section>


<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
                class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading">
                            <h3>Login From Here</h3>
                            <p>Log in to continue your account <br> and explore new jobs.</p>
                        </div>
                        <div class="social-login">
                            <ul>
                                <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Log in
                                        with LinkedIn</a></li>
                                <li><a class="google" href="#"><i class="lni lni-google"></i> Log in with
                                        Google</a></li>
                                <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Log in
                                        with Facebook</a></li>
                            </ul>
                        </div>
                        <div class="or-devider">
                            <span>Or</span>
                        </div>
                        <form action="https://demo.graygrids.com/">
                            <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password"
                                           placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                    <label class="form-check-label" for="flexCheckDefault">Remember password</label>
                                </div>
                                <a href="#" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                            </div>
                            <div class="form-group mb-8 button">
                                <button class="btn ">Log in
                                </button>
                            </div>
                            <p class="text-center create-new-account">Don’t have an account? <a href="#">Create a free
                                    account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
                class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
                data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading">
                            <h3>Create a free Account <br> Today</h3>
                            <p>Create your account to continue <br> and explore new jobs.</p>
                        </div>
                        <div class="social-login">
                            <ul>
                                <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Import from
                                        LinkedIn</a></li>
                                <li><a class="google" href="#"><i class="lni lni-google"></i> Import from
                                        Google</a></li>
                                <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Import from
                                        Facebook</a></li>
                            </ul>
                        </div>
                        <div class="or-devider">
                            <span>Or</span>
                        </div>
                        <form action="https://demo.graygrids.com/">
                            <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Confirm Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckDefault">Agree to the <a href="#">Terms
                                            & Conditions</a></label>
                                </div>
                            </div>
                            <div class="form-group mb-8 button">
                                <button class="btn ">Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
