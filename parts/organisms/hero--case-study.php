<section class="hero hero--case-study">
    <div class="container">
        <div class="row">
            <div class="columns">

                <!-- <h1 class="site-title"><?php the_title(); ?>.</h1>
                <p class="subtitle">
                    We build brands, design websites and produce visual media for <strong>progressive companies</strong>, <strong>government agencies</strong>, <strong>NGOs</strong> and <strong>nonprofits</strong>
                </p> -->

                <div class="industry">
                    <?php $industries = wp_get_post_terms( get_the_id(), 'industry' ); ?>
                    <?php $industry = $industries[0]; ?>
                    <h3>
                        <span class="highlight--red">Industry:</span> <?php echo $industry->name; ?>
                    </h3>
                </div>

                <h1 class="site-title">
                    <span><span class="highlight--red">Client:</span> <?php echo get_field('client_name'); ?></span>
                    <span><span class="highlight--red">Project:</span> <?php echo get_field('project_description'); ?></span>
                </h1>

            </div>
        </div>
    </div>
</section>