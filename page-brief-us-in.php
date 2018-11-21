<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--page'); ?>

<section class="content-block content-block--pad-sm">
    <div class="container">
        <div class="row align-center">
            <div class="medium-10 large-8 columns">
                <div class="rte">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/organisms/content-block--clients'); ?>

<?php get_footer(); ?>