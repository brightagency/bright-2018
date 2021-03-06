<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--page'); ?>

<section class="content-block content-block--bg-white content-block--text-red red-service-icons">
    <div class="container">
        <div class="row">
            <div class="columns">
                <?php get_template_part('parts/molecules/service-icons'); ?>
            </div>
        </div>
    </div>
</section>

<?php $data = get_field('the_process')[0]; ?>
<div class="content-block content-block--bg-red content-block--invert">
    <div class="container">
        <div class="row">
            <div class="medium-6 columns">
                <h2 class="section-title">
                    <?php echo $data['title'] ?>
                </h2>
                <div class="lead">
                    <?php echo $data['description'] ?>
                </div>
                <div class="bar bar--white"></div>
            </div>
            <div class="medium-5 medium-offset-1 columns">
                <div class="process-slider owl-carousel owl-theme">
                    <?php $process_steps = $data['process_steps']; ?>
                    <?php foreach ($process_steps as $index => $process_step): ?>
                        <div class="process-slider__slide">
                            <h4 class="process-slider__title">
                                <?php echo $index + 1; ?>. <?php echo $process_step['title'] ?>
                            </h4>
                            <p>
                                <?php echo $process_step['content']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('parts/organisms/content-block--featured-work'); ?>

<?php get_template_part('parts/organisms/content-block--clients'); ?>

<?php get_footer(); ?>