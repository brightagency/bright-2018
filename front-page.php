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
                        "posts_per_page" => 6,
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

<section class="content-block content-block--invert content-block--bg-red">
    <div class="container">
        <div class="row">
            <div class="large-6 columns">
                <h2 class="section-title">Proud to have worked with.</h2>
                <p class="lead">We love partnering with organisations that are passionate about their purpose and take a forward-thinking approach to the impact they can have.</p>
                <p class="content-block__cta-container"><a href="#" class="button">Our Services</a></p>
            </div>
            <div class="large-6 columns">
                <div class="client-grid">
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/nsw-government.svg" alt="NSW Government">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/pam.svg" alt="Parramatta Mission">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/phn.svg" alt="PHN South Western Sydney">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/achieve.svg" alt="Achieve Australia">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/tad.svg" alt="TAD - Clever Ideas Changing Lives">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/ahr.svg" alt="Australian Hearing">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/wwe.svg" alt="WentWest">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/wsu.svg" alt="Western Sydney University">
                        </div>
                    </div>
                    <div class="client-grid__col">
                        <div class="client-grid__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/odm.svg" alt="One Door Mental Health">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>