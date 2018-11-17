<section class="module module-banner" data-parallax="scroll" data-image-src="<?php the_sub_field('background_image'); ?>" data-speed="0.8">

    <div class="container">
        <div class="row">
            <div class="columns">
                
                <?php if (get_sub_field('is_video')): ?>

                    <div class="link-container hover-text-colour">
                        <a href="<?php the_sub_field('video_link'); ?>" target="_blank"></a>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.19 132.19">
                          <defs>
                            <style>
                              .a {
                                fill: #fff;
                              }
                              .b {
                                fill: none;
                                stroke: #fff;
                                stroke-miterlimit: 10;
                                stroke-width: 9.79px;
                              }
                            </style>
                          </defs>
                          <title>video-icon</title>
                          <g id="play-icon">
                            <polygon class="a" points="95.61 66.09 51.67 94.83 51.67 37.36 95.61 66.09"/>
                            <circle class="b" cx="66.09" cy="66.09" r="61.2"/>
                          </g>
                        </svg>

                        <style media="screen">
                            svg {
                                position: relative;
                                z-index: 100;
                            }
                            .link-container svg #play-icon polygon,
                            .link-container svg #play-icon circle {
                                transition: .2s ease all;
                            }
                            .link-container:hover svg #play-icon polygon {
                                fill: <?php the_field('project_colour'); ?> !important;
                            }
                            .link-container:hover svg #play-icon circle {
                                stroke: <?php the_field('project_colour'); ?> !important;
                            }
                        </style>

                        <p><a href="<?php the_sub_field('video_link'); ?>" target="_blank">watch video</a></p>
                    </div>

                <?php endif; ?>
                
            </div>
        </div>
    </div>

</section>