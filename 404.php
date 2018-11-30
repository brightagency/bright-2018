<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--page'); ?>

<section class="content-block content-block--pad-sm">
    <div class="container">
        <div class="row">
            <div class="small-12 columns">
                <div class="rte">
                    <h3>The requested page could not be found.</h3>
                    <p>
                        Please ensure you do not have any typos in the URL. Alternatively, <a href="<?php echo get_site_url() ?>">click here to head to the homepage.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>