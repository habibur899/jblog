<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="loading-area"></div>

<header class="header other-page">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="<?php echo site_url() ?>">
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
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
							<?php wp_nav_menu( array(
								'menu_class'     => 'navbar-nav ml-auto',
								'menu_id'        => 'nav',
								'walker'         => new WP_Bootstrap_Navwalker(),
								'theme_location' => 'primary_menu',
							) ) ?>
                        </div>

                    </nav>

                </div>
            </div>

        </div>

    </div>

</header>


<!--<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Grid Sidebar</h1>
                    <p>Business plan draws on a wide range of knowledge from different business<br> disciplines.
                        Business draws on a wide range of different business .</p>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li>Blog Grid Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
</div>-->
