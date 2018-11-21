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

                        <?php if ( get_adjacent_post(false, '', true) ): ?>
                            <a href="<?php the_permalink(get_adjacent_post(false, '', true)); ?>"><i class="far fa-chevron-left"></i></a>
                        <?php endif; ?>

                        <?php if ( get_adjacent_post(false, '', false) ): ?>
                            <a href="<?php the_permalink(get_adjacent_post(false, '', false)); ?>"><i class="far fa-chevron-right"></i></a>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>