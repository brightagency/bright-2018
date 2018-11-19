<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--page'); ?>

<section class="brief-us-in">
    <div class="container">
        <div class="row">
            <div class="columns">
                <a href="<?php the_permalink(192); ?>" class="brief-us-in-cta">
                    <p>Do you know your specific project requirements?</p>
                    <div class="button-plain">
                        <span class="content">Brief us in</span>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="content-block content-block--pad-sm content-block--zero-top">
    <div class="container">
        <div class="row">
            <div class="medium-5 large-4 columns">
                <div class="rte">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="medium-7 large-8 columns">
            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>

<?php get_template_part('parts/organisms/content-block--clients'); ?>

<?php get_footer(); ?>