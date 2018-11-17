<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--case-study'); ?>

<section class="case-study-feature">
    <div class="container">
        <div class="row">
            <div class="columns">
                <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>
                <img src="<?php echo $img; ?>">
            </div>
        </div>
    </div>
</section>

<section class="case-study-overview">
    <div class="container">
        <div class="row align-center">
            <div class="medium-10 columns">
                <h3 class="title">Overview</h3>
                <?php echo get_field('overview'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/modules/module-looper'); ?>

<section class="case-study-pagination">
    <div class="container">
        <div class="row">
            <div class="columns">
                <div class="pagination-grid">

                    <div class="all-work">
                        <a href="<?php echo get_post_type_archive_link('case-study'); ?>">All work.</a>
                    </div>

                    <div class="pagination">

                        <p class="title">Next Project</p>

                        <?php if ( get_next_post() ): ?>
                            <a href="<?php the_permalink(get_next_post()); ?>"><i class="far fa-chevron-left"></i></a>
                        <?php endif; ?>

                        <?php if ( get_previous_post() ): ?>
                            <a href="<?php the_permalink(get_previous_post()); ?>"><i class="far fa-chevron-right"></i></a>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>