<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=12345678">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open();
