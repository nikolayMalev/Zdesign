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

            <a href="" class="hero__btn btn">
                Свържи се с Нас
            </a>
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

<section class="section-slider-testimonials image-fit bg-overlay">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/slider-bg.png" alt="" class="">

    <header class="section__head">
        <h2>Ето Какво Мислят Нашите Клиенти</h2>
    </header><!-- /.section__head -->

    <div class="slider-testimonials splide-testimonials splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <h3>'Професионалисти работещи с бърза ръка'</h3>

                    <h6>Иван Иванов</h6>
                </li><!-- /.splide__slide -->
                <li class="splide__slide">
                    <h3>'Проектът се получи точно както искахме и сме много щастливи'</h3>

                    <h6>Георги Радославов</h6>
                </li><!-- /.splide__slide -->
                <li class="splide__slide">
                    <h3>'Най-добрите. Спестиха ни много време и нерви'</h3>

                    <h6>Александър Георгиев</h6>
                </li><!-- /.splide__slide -->
                <li class="splide__slide">
                    <h3>'Всичко се случи много спокойно и без неприятни изненади'</h3>

                    <h6>Благой Христов</h6>
                </li><!-- /.splide__slide -->
            </ul><!-- /.splide__list -->
        </div><!-- /.splide__track -->
    </div><!-- /.slider-testimonials -->
</section><!-- /.section-slider-testimonials -->

<?php get_footer(); ?>