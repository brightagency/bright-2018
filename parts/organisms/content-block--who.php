<?php 
$data = get_field('who_we_are')[0]; 
if (!$data) {
    $data = get_field('who_we_are', get_option('page_on_front'))[0];
}
 ?>

<section 
    class="content-block content-block--invert content-block--parallax" 
    data-parallax="scroll" 
    data-image-src="<?php echo $data['background_image']; ?>" 
    data-speed="0.8"
>
    <div class="container">
        <div class="row">
            <div class="medium-8 columns">
                <div class="content-block__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/bright-logo.svg" alt="Bright Logo">
                </div>
                <div class="subtitle">
                    <?php echo $data['description']; ?>
                </div>
                <p class="content-block__cta-container">
                    <?php $button = $data['button'][0]; ?>
                    <a href="<?php echo $button['link'] ?>" class="button" target="<?php echo $button['new_tab'] ? '_blank' : '_self' ?>">
                        <?php echo $button['title'] ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>