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

<section class="content-block content-block--pad-sm content-block--zero-top">
    <div class="container">
        <div class="row">
            <div class="medium-5 large-4 columns">
                <div class="rte">
                    <h2>Get in touch</h2>
                    <p><strong>P:</strong> 02 8378 4274<br>
                    <strong>E:</strong> <a href="mailto:hello@brightagency.com.au">hello@brightagency.com.au</a></p>
                    <h4>Office</h4>
                    <p>Level 3, 100 Harris Street<br>Pyrmont NSW 2009</p>
                    <h2>Work at Bright</h2>
                    <p>We don't currently have any positions open, but always welcome portfolio submissions for consideration before advertising for a new role. Email your resume and samples of your work to <a href="mailto:hello@brightagency.com.au">hello@brightagency.com.au</a></p>
                    <div class="follow-us-social">
                        <h2>Follow us</h2>
                        <div class="social-links">
                            <?php get_template_part('parts/molecules/social-links'); ?>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="medium-7 large-8 columns">
            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/organisms/content-block--clients'); ?>

<?php get_footer(); ?>