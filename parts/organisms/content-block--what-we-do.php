<?php $data = get_field('what_we_do'); ?>

<section class="content-block content-block--bg-red content-block--invert">
    <div class="container">
        <div class="row">
            <div class="columns">
                <h2 class="section-title"><?php echo $data['title'] ?></h2>
                <div class="subtitle">
                    <?php echo $data['description']; ?>
                </div>
                <div class="bar bar--white"></div>
                <?php get_template_part('parts/molecules/service-icons'); ?>
            </div>
        </div>
    </div>
</section>