<section class="case-study-feature">
    <div class="container">
        <div class="row">
            <div class="columns">
                <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>
                <img src="<?php echo $img; ?>">
            </div>
        </div>
    </div>
</section>