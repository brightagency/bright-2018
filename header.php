<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.png">
    <meta name="description" content="We build brands, design websites and produce visual media for progressive companies, government agencies, NGOs and nonprofits">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('parts/organisms/primary-nav'); ?>
<?php get_template_part('parts/organisms/nav-takeover'); ?>