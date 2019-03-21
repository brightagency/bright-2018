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

                    <div class="purple-service-icons smaller-service-icons">
                        <div class="service-icons">

                            <?php $expertises = wp_get_post_terms( get_the_id(), 'expertise' ); ?>
                            <?php foreach ($expertises as $expertise): ?>
                                <div class="service">
                                    <?php 
                                        switch ($expertise->slug) {
                                            case 'brand-identity':
                                                $title = "Brand<br>Identity";
                                                break;
                                            case 'creative-direction':
                                                $title = "Creative<br>Direction";
                                                break;
                                            case 'graphic-design':
                                                $title = "Graphic<br>Design";
                                                break;
                                            case 'video-production':
                                                $title = "Video<br>Production";
                                                break;
                                            case 'web-digital':
                                                $title = "Web &amp;<br>Digital";
                                                break;
                                            default:
                                                $title = false;
                                                break;
                                        }
                                    ?> 
                                    <?php if ($title): ?>
                                        <?php $image_src = get_template_directory_uri() . '/dist/images/icons/' . $expertise->slug . '.svg'; ?>
                                        <?php error_log($image_src) ?>
                                        <div class="service__icon">
                                            <img data-svg-inline src="<?php echo $image_src ?>" alt="<?php echo $title ?>">
                                        </div>
                                        <div class="service__title"><?php echo $title; ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
