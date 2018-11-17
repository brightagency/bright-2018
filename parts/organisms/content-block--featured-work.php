<?php 
$data = get_field('featured_work')[0]; 
if (!$data) {
    $data = get_field('featured_work', get_option('page_on_front'))[0];
}
 ?>

<section class="content-block content-block--text-purple content-block--split-bg">
    <div class="container">
        <div class="row">
            <div class="medium-8 columns">
                <h2 class="section-title"><?php echo $data['title']; ?></h2>
                <div class="subtitle">
                    <?php echo $data['description']; ?>
                </div>
                <div class="bar bar--purple"></div>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                <div class="work-cards">
                    <?php $loop = new WP_Query(array( 
                        "post_type" => 'case-study',
                        "posts_per_page" => $data['featured_count'],
                        'order' => 'ASC',
                        'orderby' => 'menu_order'
                    )); ?>
                    <?php if ( $loop->have_posts() ) : ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post() ?>
                        <?php get_template_part('parts/molecules/work-card'); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="row row--cta">
            <div class="columns">
                <p class="center">
                    <?php $button = $data['button'][0]; ?>
                    <a href="<?php echo $button['link'] ?>" class="button button--purple" target="<?php echo $button['new_tab'] ? '_blank' : '_self' ?>">
                        <?php echo $button['title'] ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>