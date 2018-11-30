<section class="hero hero--page">
    <div class="container">
        <div class="row">
            <div class="medium-10 columns">
                <div class="bar bar--red"></div>
                <h1 class="site-title">
                    <?php if (is_404()): ?>
                        404 - Page not found
                    <?php else: ?>
                        <?php the_title(); ?>.
                    <?php endif; ?>
                </h1>
                <div class="subtitle">
                    <?php echo get_field('header_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>