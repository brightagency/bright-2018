<?php $data = get_field('proud_to_have_worked_with', get_option('page_on_front'))[0]; ?>

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
                    <?php $button = $data['button'][0]; ?>
                    <a href="<?php echo $button['link'] ?>" class="button button--hover-red" target="<?php echo $button['new_tab'] ? '_blank' : '_self' ?>">
                        <?php echo $button['title'] ?>
                    </a>
                </p>
            </div>
            <div class="large-6 columns">
                <?php $clients = [
                    [ "alt" => "NSW Government", "img" => "nsw-government.svg" ],
                    [ "alt" => "Parramatta Mission", "img" => "pam.svg" ],
                    [ "alt" => "PHN South Western Sydney", "img" => "phn.svg" ],
                    [ "alt" => "Achieve Australia", "img" => "achieve.svg" ],
                    [ "alt" => "TAD - Clever Ideas Changing Lives", "img" => "tad.svg" ],
                    [ "alt" => "Australian Hearing", "img" => "ahr.svg" ],
                    [ "alt" => "WentWest", "img" => "wwe.svg" ],
                    [ "alt" => "Western Sydney University", "img" => "wsu.svg" ],
                    [ "alt" => "One Door Mental Health", "img" => "odm.svg" ],
                ]; ?>
                <div class="client-grid">
                    <?php foreach ($clients as $client): ?>
                        <div class="client-grid__col">
                            <div class="client-grid__logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/worked-with/<?php echo $client['img'] ?>" alt="tdd<?php echo $client['alt'] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>