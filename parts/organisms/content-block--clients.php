<?php $data = get_field('proud_to_have_worked_with'); ?>

<section class="content-block content-block--invert content-block--bg-red">
    <div class="container">
        <div class="row">
            <div class="large-6 columns">
                <h2 class="section-title">
                    <?php echo $data['title']; ?>
                </h2>
                <div class="lead">
                    <?php echo $data['description']; ?>
                </div>
                <p class="content-block__cta-container">
                    <?php $button = $data['button']; ?>
                    <a href="<?php echo $button['link'] ?>" class="button button--hover-red" target="<?php echo $button['new_tab'] ? '_blank' : '_self' ?>">
                        <?php echo $button['title'] ?>
                    </a>
                </p>
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