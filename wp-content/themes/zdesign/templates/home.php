<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<section class="hero image-fit bg-overlay">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/hero-bg.png" alt="" class="">
    <div class="shell">
        <div class="hero__content">
            <h1>ZDesign </br> Студио За Интериорен Дизайн
            </h1>

            <h2>Проектиране / Реализация</h2>
        </div>
    </div><!-- /.shell-->
</section><!-- /.hero -->

<section class="section-image-content">
    <div class="section__content">
        <h2>Вашият Дом. Вашият Стил</h2>

        <ul>
            <li>Ще Ви спестим време</li>

            <li>Ще Ви изготвим проект</li>

            <li>Ще го реализираме за Вас</li>
        </ul>

        <div class="section__actions">
            <h4>Какво чакате?</h4>

            <a href="" class="btn">Заяви Проект</a>
        </div><!-- /.section__actions -->
    </div><!-- /.section__content -->

    <div class="section__image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/image-content.png" alt="" class="">
    </div><!-- /.section__image -->
</section><!-- /.section-image-content -->

<?php get_footer(); ?>