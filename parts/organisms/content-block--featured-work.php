<?php global $featured_work_count ?>
<?php $featured_work_count = $featured_work_count ?? 6; ?>
<section class="content-block content-block--text-purple content-block--split-bg">
    <div class="container">
        <div class="row">
            <div class="medium-8 columns">
                <h2 class="section-title">Featured work.</h2>
                <p class="subtitle">
                    We build brands, design websites and produce visual media for produce visual media for produce <strong>visual media for</strong>.
                </p>
                <div class="bar bar--purple"></div>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                <div class="work-cards">
                    <?php $loop = new WP_Query(array( 
                        "post_type" => 'case-study',
                        "posts_per_page" => $featured_work_count,
                        'order' => 'ASC',
                        'orderby' => 'menu_order'
                    )); ?>
                    <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post() ?>
                        <?php get_template_part('parts/molecules/work-card'); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                <p class="center">
                    <a href="#" class="button button--purple">View all Work</a>
                </p>
            </div>
        </div>
    </div>
</section>