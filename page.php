<?php get_header() ?>

<section class="section latest-news-area blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
					<?php if ( have_posts() ):while ( have_posts() ):the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile;endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>


<?php get_footer() ?>
