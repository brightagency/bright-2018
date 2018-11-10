<?php get_header(); ?>

<?php get_template_part('parts/organisms/hero--home'); ?>

<section class="content-block content-block--bg-red content-block--invert">
    <div class="container">
        <div class="row">
            <div class="columns">
                <h2 class="section-title">What we do.</h2>
                <p class="subtitle">We build brands, design websites and produce visual media for<br><strong>progressive companies</strong>, <strong>government agencies</strong>, <strong>NGOs and nonprofits</strong></p>
                <div class="bar bar--white"></div>
                <div class="service-icons">
                    <div class="service">
                        <div class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/creative-direction.svg" alt=""></div>
                        <div class="service__title">Creative<br>Direction</div>
                    </div>
                    <div class="service">
                        <div class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/brand-identity.svg" alt=""></div>
                        <div class="service__title">Brand<br>Identity</div>
                    </div>
                    <div class="service">
                        <div class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/graphic-design.svg" alt=""></div>
                        <div class="service__title">Graphic<br>Design</div>
                    </div>
                    <div class="service">
                        <div class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/web-digital.svg" alt=""></div>
                        <div class="service__title">Web &<br>Digital</div>
                    </div>
                    <div class="service">
                        <div class="service__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/video-production.svg" alt=""></div>
                        <div class="service__title">Video<br>Production</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-block content-block--invert" style="background-image: url(<?php echo get_template_directory_uri() ?>/dist/images/wework-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="medium-8 columns">
                <div class="content-block__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/bright-logo.svg" alt="Bright Logo"></div>
                <p class="subtitle"><strong>Who?</strong> We’re a team of problem solvers and creative thinkers with a common passion for dedicating our focus and skills to projects that have a <strong>positive impact</strong> on the lives of others.</p>
                <p class="content-block__cta-container"><a href="#" class="button">Get in Touch</a></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>