<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="primary-nav">
    <div class="container">
        <div class="row">
            <div class="columns">
                <div class="primary-nav__items">
                    <div class="primary-nav__logo">
                        <a href="<?php echo get_site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logos/bright-logo.svg" alt=""></a>
                    </div>
                    <div class="primary-nav__hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>