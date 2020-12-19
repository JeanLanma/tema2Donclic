<?php get_header() ?>
<!-- <h1>Hola desde Don click Tema</h1> -->

    <!-- PHP -->
    <?php while(have_posts( )) : the_post();?>

    <?php  the_title()?>
    <!-- Wordpress -->
    <?php   
        endwhile;
    ?>

    <!-- HTML -->
    <h1>Hola</h1>

<!-- Content Main Page -->

<?php get_footer() ?>