<footer class="footer">

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

					<?php if ( is_active_sidebar( 'footer-top-sidebar-one' ) ) {
						dynamic_sidebar( 'footer-top-sidebar-one' );
					} ?>

                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">

							<?php if ( is_active_sidebar( 'footer-top-sidebar-two' ) ) {
								dynamic_sidebar( 'footer-top-sidebar-two' );
							} ?>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

							<?php if ( is_active_sidebar( 'footer-top-sidebar-three' ) ) {
								dynamic_sidebar( 'footer-top-sidebar-three' );
							} ?>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

							<?php if ( is_active_sidebar( 'footer-top-sidebar-four' ) ) {
								dynamic_sidebar( 'footer-top-sidebar-four' );
							} ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
						<?php if ( is_active_sidebar( 'footer-bottom-sidebar-one' ) ) {
							dynamic_sidebar( 'footer-bottom-sidebar-one' );
						} ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer_menu',
							'container_class' => 'right',
						) );
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>
<?php wp_footer(); ?>
</body>

</html>