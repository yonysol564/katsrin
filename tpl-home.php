<?php
/* Template Name: Homepage */

get_header();
?>

    <?php get_template_part('inc/home/slider', 'home'); ?>

    <?php get_template_part('inc/home/links', 'pages'); ?>

    <?php get_template_part('inc/home/mayor' , 'remarks'); ?>

    <?php get_template_part('inc/home/events' , 'board'); ?>

    <?php get_template_part('inc/home/whatsup' , 'city'); ?>

    <?php get_template_part('inc/home/partners'); ?>

<?php
get_sidebar();
get_footer();
?>
