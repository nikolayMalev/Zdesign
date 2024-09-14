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

<section class="section-slider-testimonials">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/" alt="" class="">

    <div class="slider-testimonials splide-testimonials splide">
        <div class="splide__track">
            <ul class="splide__list">
                <div class="splide__slide">
                    <h1>one</h1>
                </div><!-- /.splide__slide -->
                <div class="splide__slide">
                    <h2>two</h2>
                </div><!-- /.splide__slide -->
                <div class="splide__slide">
                    <h1>three</h1>
                </div><!-- /.splide__slide -->
                <div class="splide__slide">
                    <h4>four</h4>
                </div><!-- /.splide__slide -->
            </ul><!-- /.splide__list -->
        </div><!-- /.splide__track -->
    </div><!-- /.slider-testimonials -->
</section><!-- /.section-slider-testimonials -->

<?php get_footer(); ?>