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