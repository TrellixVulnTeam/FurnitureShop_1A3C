<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <img class="header__logo__img" src="<?php echo get_theme_file_uri('/media/logo4.png'); ?>" alt="LOGO">
        </div>
        <div class="header__menu">
            <ul class="header__menu__ul">
                <li class="header__menu__ul__li">
                    <a class="<?php if(is_home())echo 'current-menu-item' ?> header__menu__ul__li__a" href="<?php echo site_url() ?>">
                        Strona Główna
                    </a>
                </li>

                <li class=" header__menu__ul__li">
                    <a class="<?php if(is_page('oferta'))echo 'current-menu-item' ?> header__menu__ul__li__a" href="<?php echo site_url('/oferta') ?>">
                        Oferta
                    </a>
                </li>

                <li class="header__menu__ul__li">
                    <a class="<?php if(is_page('blog'))echo 'current-menu-item' ?> header__menu__ul__li__a" href="<?php echo site_url('/blog') ?>">
                        Blog
                    </a>
                </li>

                <li class="header__menu__ul__li">
                    <a class="<?php if(is_page('o-mnie'))echo 'current-menu-item' ?> header__menu__ul__li__a" href="<?php echo site_url('/o-mnie') ?>">
                        O mnie
                    </a>
                </li>

                <li class="header__menu__ul__li">
                    <a class="<?php if(is_page('kontakt'))echo 'current-menu-item' ?> header__menu__ul__li__a" href="<?php echo site_url('/kontakt') ?>">
                        Kontakt
                    </a>
                </li>
            </ul>
        </div>

        <div class="header__menu-mobile">
            
            <div class="header__menu-mobile__btn">
                <h3 class="header__menu-mobile__btn__txt">MENU</h3>
                <i class="header__menu-mobile__btn__i lni lni-menu"></i>
            </div>
            
            <ul class="header__menu-mobile__ul">
                <li class="header__menu-mobile__ul__li">
                    <a class="<?php if(is_home())echo 'current-menu-mobile-item' ?> header__menu-mobile__ul__li__a" href="<?php echo site_url() ?>">
                        Strona Główna
                    </a>
                </li>

                <li class=" header__menu-mobile__ul__li">
                    <a class="<?php if(is_page('oferta'))echo 'current-menu-mobile-item' ?> header__menu-mobile__ul__li__a" href="<?php echo site_url('/oferta') ?>">
                        Oferta
                    </a>
                </li>

                <li class="header__menu-mobile__ul__li">
                    <a class="<?php if(is_page('blog'))echo 'current-menu-mobile-item' ?> header__menu-mobile__ul__li__a" href="<?php echo site_url('/blog') ?>">
                        Blog
                    </a>
                </li>

                <li class="header__menu-mobile__ul__li">
                    <a class="<?php if(is_page('o-mnie'))echo 'current-menu-mobile-item' ?> header__menu-mobile__ul__li__a" href="<?php echo site_url('/o-mnie') ?>">
                        O mnie
                    </a>
                </li>

                <li class="header__menu-mobile__ul__li">
                    <a class="<?php if(is_page('kontakt'))echo 'current-menu-mobile-item' ?> header__menu-mobile__ul__li__a" href="<?php echo site_url('/kontakt') ?>">
                        Kontakt
                    </a>
                </li>
            </ul>
        </div>
    </header>
