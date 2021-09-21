<?php get_header(); 

    $posty = new WP_Query(array(
    'post_type' => 'post'
    ));

?>




    <div class="blog">

        <div class="blog__header">
            <h2 class="blog__header__h2">
                BLOG
            </h2>
            <h3 class="blog__header__h3">
                Dowiedz się więcej 
            </h3>
        </div>

        <div class="blog__posts">
            <?php 
            while($posty->have_posts()){
            $posty->the_post(); ?>
                <div class="blog__posts__module">
                    <div class="blog__posts__module__pic">
                        <img src="<?php the_field('zdjecie_posta') ?>" alt="zdjecie" class="blog__posts__module__pic__img">
                    </div>

                    <div class="blog__posts__module__txt">
                        <h2 class="blog__posts__module__txt__h2">
                            <?php the_title() ?>
                        </h2>
                        <p class="blog__posts__module__txt__p">
                            <?php the_field('opis_posta') ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="blog__posts__module__txt__btn">Czytaj dalej</a>
                    </div>
                </div>

            <?php
                } 
            ?>
        </div>
    </div>
           

<?php
    get_footer();
?>
