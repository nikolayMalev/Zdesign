<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri();?>/dist/css/styles.min.css'/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="shell">
            <div class="header__inner">
                <div class="header__nav">
                    <a href="#" class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo.svg" alt="">
                    </a><!-- /.logo -->

                    <nav class="nav">
                        <ul>
                            <li>
                                <a href="">Начало</a>
                            </li>

                            <li>
                                <a href="">За Нас</a>
                            </li>

                            <li>
                                <a href="">Проекти</a>
                            </li>

                            <li>
                                <a href="">Контакти</a>
                            </li>
                        </ul>
                    </nav><!-- /.nav -->
                </div><!-- /.header__nav -->

                <div class="header__actions">
                    <a href="" class="header__btn btn">
                        Заяви Проект
                    </a>
                </div><!-- /.header__actions -->
            </div><!-- /.header__inner -->
        </div><!-- /.shell-->
    </header><!-- /.header -->
<main>