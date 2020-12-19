<?php get_header()?>

<?php while(have_posts( )) : the_post() ?>

<div class="bg-red">
    <?php the_title() ?>
</div>


<?php the_content() ?>

<?php endwhile;?>

<?php get_footer()?>