<?php 
    get_header();
?>

    <div class="single-post">
        <?php the_post() ?>
        <h1 class="single-post__h1">
            <?php the_title(); ?>
        </h1>
        <div class="single-post__txt">
            <?php the_content(); ?>
        </div>
    </div>


<?php
    get_footer();
?>