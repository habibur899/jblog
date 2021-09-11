<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="loading-area"></div>

<header class="header other-page">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="<?php home_url(); ?>">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

							if ( has_custom_logo() ) {
								echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
								echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
							}
							?>
                        </a>


                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

						<?php wp_nav_menu( array(
							'container_class' => 'collapse navbar-collapse sub-menu-bar',
							'container_id'    => 'navbarSupportedContent',
							'menu_class'      => 'navbar-nav ml-auto',
							'menu_id'         => 'nav',
							'walker'          => new WP_Bootstrap_Navwalker(),
							'theme_location'  => 'primary_menu',
						) ) ?>


                    </nav>

                </div>
            </div>

        </div>

    </div>

</header>
