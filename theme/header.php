<!DOCTYPE html>
<html lang="fr">

<head> 
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name') ?> <?php wp_title() ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css" />
    <script>
            iconsPath = '<?php bloginfo('template_url') ?>/';
    </script>
    <script src="<?php bloginfo('template_url') ?>/scripts/main.js" defer></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" data-component="Header" data-threshold="8" data-auto-hide="true">
        <a href="<?php bloginfo('url'); ?>" class="logo">
           <h3><?php bloginfo('name'); ?></h3> 
        </a>
        <?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'nav',
                'container_class' => 'nav-primary',
            )); ?>
        <button class="header__toggle js-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>