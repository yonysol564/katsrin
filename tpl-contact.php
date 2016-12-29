<?php
    /* Template Name: Contact  */
    get_header();
    $appeal_to_mayor_form  = get_field('appeal_to_mayor_form', 'option');
?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('inc/page', 'banner'); ?>

    <?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container" id="skip-main-content">
        <div class="inner-main">
            <div class="sidebar council-bar">
                <?php wp_nav_menu( array( 'theme_location' => 'contact_menu_one', 'container' => '', 'menu_class' => 'contact_menu_one' ) ); ?>
                <div class="clear"></div>
            </div>
            <div class="inner-content">
                <div class="inner-head head-bor">
                    <?php get_template_part('inc/socials', 'icons'); ?>
                    <h1 class="head"><?php  the_title();  ?></h1>
                    <div class="clear"></div>
                </div>
                  <?php echo do_shortcode($appeal_to_mayor_form); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>

<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
