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
        
                        <div class="work-card-wrap">
                            <div class="work-card">
                                <a href="<?php the_permalink(); ?>" class="work-card__inner">
                                    <div class="work-card__overlay"></div>
                                    <div class="work-card__thumb">
                                        <div class="work-card__thumb-inner" style="background-image: url(<?php echo get_field('thumbnail')['url']; ?>)">
                                        </div>
                                    </div>
                                    <div class="work-card__content">
                                        <div class="work-card__content-wrap">
                                            <h3 class="work-card__client"><?php echo get_field('client_name'); ?>.</h3>
                                            <p class="work-card__project"><?php echo get_field('project_description'); ?></p>
                                            <p class="work-card__link"><i class="fas fa-arrow-right"></i>&nbsp;</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    
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