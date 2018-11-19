<section class="module module-what-we-delivered">
    <div class="container">
        <div class="row align-center">
            <div class="medium-10 columns">
                
                <div class="content">
                    <h3 class="title">What we delivered</h3>
                    <?php the_sub_field('content'); ?>
                </div>

                <div class="expertise-section">
                    <h3>Expertise provided</h3>
                    <?php /*

                    <div class="expertise-grid">
                        <?php $expertises = wp_get_post_terms( get_the_id(), 'expertise' ); ?>
                        <?php foreach ($expertises as $expertise): ?>
                            <div class="expertise">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/services/<?php echo $expertise->slug ?>.svg">
                                </div>
                                <p><?php echo $expertise->name; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    */ ?>
                    <div class="purple-service-icons smaller-service-icons">
                        <?php get_template_part('parts/molecules/service-icons'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>