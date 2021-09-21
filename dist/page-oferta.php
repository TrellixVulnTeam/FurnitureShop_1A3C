<?php 
    get_header();

    $products = new WP_Query(array(
        'post_type' => 'produkt'
    ));

?>

<div class="oferta">
    
    <div class="oferta__header">
        <h2 class="oferta__header__h2">
            Oferta
        </h2>
        <h3 class="oferta__header__h3">
            Sprawdź co mam obecnie na sprzedaż
        </h3>
    </div>

    <div class="oferta__up">
        <div class="oferta__up__module">
            <p class="oferta__up__module__p">
                W tej zakładce znajdziesz część moich prac.
                Wiele z nich może ulegać modyfikacjom - zgodnie z Twoim gustem i potrzebami.
                Jeżeli masz jakąś wizję i chcesz abym ją dla Ciebie zrealizowała - skontaktuj się ze mną.
            </p>

            <a href="<?php echo site_url('/kontakt'); ?>" class="oferta__up__module__btn">
                Kontakt
            </a>
        </div>

        <div class="oferta__up__module">
            <p class="oferta__up__module__p">
                Kliknij aby dowiedzieź się więcej na temat zasad dotyczących dostawy oraz zwrotów.
            </p>

            <a href="<?php echo site_url('/regulamin'); ?>" class="oferta__up__module__btn">
                Regulamin
            </a>
        </div>
    </div>

    <div class="oferta__produkty">
        <?php
        while($products->have_posts()){
            $products->the_post(); ?>

        
            <a href="<?php echo the_permalink(); ?>">
                <div class="oferta__produkty__item">
                    <div class="oferta__produkty__item__pic">
                        <img src="<?php the_field('zdjecie_produktu') ?>" alt="zdjecie" class="oferta__produkty__item__pic__img">
                    </div>        

                    <div class="oferta__produkty__item__txt">
                        <div class="oferta__produkty__item__txt__up">
                            <h3 class="oferta__produkty__item__txt__up__h3"><?php the_title(); ?></h3>
                            <p class="oferta__produkty__item__txt__up__cena"><?php the_field('cena_produktu') ?> PLN</p>
                        </div>
                        <div class="oferta__produkty__item__txt__btn">
                            <a href="<?php echo the_permalink(); ?>"  class="oferta__produkty__item__txt__btn__a">Zobacz</a>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        } ?>
        
    </div>
</div>





<?php
    get_footer(); 
?>