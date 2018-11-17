<?php

// check if the flexible content field has rows of data
if( have_rows('modules') ):

     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();

        switch (get_row_layout()) {
            case 'image_content':
                get_template_part('parts/organisms/module--image-content');
                break;
            // case 'banner':
            //     get_template_part('parts/organisms/module--banner');
            //     break;
            // case 'text_content':
            //     get_template_part('parts/organisms/module--text-content');
            //     break;
            // case 'what_we_delivered':
            //     get_template_part('parts/organisms/module--what-we-delivered');
            //     break;

            default:
                // echo get_row_layout();
                $moduleError = "No module found called: " . get_row_layout();
                require get_template_directory() . '/parts/organisms/module--error.php';
                break;
        }

    endwhile;

else :

    // no layouts found
    $error = "No modules found";
    require get_template_directory() . '/parts/organisms/module--error.php';
    // include(locate_template('parts/parts/organisms/module--error.php'));

endif;