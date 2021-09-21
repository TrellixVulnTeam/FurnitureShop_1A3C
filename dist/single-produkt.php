<?php 
    get_header();
?>

    <div class="produkt">
        <div class="produkt__left">
            <div class="produkt__left__pic">
                <img src="<?php the_field('zdjecie_produktu') ?>" alt="" class="produkt__left__pic__img">
            </div>
            <div class="produkt__left__small">
                <?php if( get_field('zdjecie_produktu'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu2'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu2') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu3'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu3') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>
                
                <?php if( get_field('zdjecie_produktu4'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu4') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu5'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu5') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu6'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu6') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu7'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu7') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>
                
                <?php if( get_field('zdjecie_produktu8'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu8') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>

                <?php if( get_field('zdjecie_produktu9'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu9') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>
                
                <?php if( get_field('zdjecie_produktu10'))
                {?>
                    <img class="produkt__left__small__img" src="<?php the_field('zdjecie_produktu10') ?>" alt="" onclick="switchPhoto(this)">
                <?php 
                } ?>
            </div>
        </div>

        <div class="produkt__right">
            <h2 class="produkt__right__h2">
                <?php the_title(); ?>
            </h2>

            <div class="produkt__right__cena">
                <?php the_field('cena_produktu'); ?> PLN
            </div>

            <div class="produkt__right__opis">
                <?php echo the_field('opis_produktu'); ?>
            </div>
            
            <div class="produkt__right__sklep">
                <a class="produkt__right__sklep__a" href="<?php echo site_url('/kontakt') ?>">Skontaktuj się</a>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>