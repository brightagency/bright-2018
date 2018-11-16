<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--page'); ?>

<section class="our-work-grid content-block content-block--bg-purple content-block--invert content-block--zero-top">
    <div class="container">
        <div class="row">
            <div class="columns">
                <div class="work-cards">
                    <?php $loop = new WP_Query(array( 
                        "post_type" => 'case-study',
                        "posts_per_page" => -1,
                        'order' => 'ASC',
                        'orderby' => 'menu_order'
                    )); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post() ?>
                        <?php get_template_part('parts/molecules/work-card'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/organisms/content-block--clients'); ?>

<?php get_footer(); ?>