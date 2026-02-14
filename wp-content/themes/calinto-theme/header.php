<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container header-flex">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calinto-logo.png" alt="Calinto Technologies">
        </div>

        <nav>
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </div>
</header>
