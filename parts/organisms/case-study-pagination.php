<section class="case-study-pagination">
    <div class="container">
        <div class="row">
            <div class="columns">
                <div class="pagination-grid">

                    <div class="all-work">
                        <a href="<?php echo get_post_type_archive_link('case-study'); ?>">All work.</a>
                    </div>

                    <div class="pagination">

                        <p class="title">Next Project</p>

                        <?php if ( get_next_post() ): ?>
                            <a href="<?php the_permalink(get_next_post()); ?>"><i class="far fa-chevron-left"></i></a>
                        <?php endif; ?>

                        <?php if ( get_previous_post() ): ?>
                            <a href="<?php the_permalink(get_previous_post()); ?>"><i class="far fa-chevron-right"></i></a>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>