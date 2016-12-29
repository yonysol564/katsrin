<?php
    /* Template Name: Protocols  */
    get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>
    <div class="container" id="skip-main-content">
        <div class="inner-main">

            <?php get_template_part('inc/council', 'menu'); ?>

            <div class="inner-content">

                <div class="inner-head no_border">
                    <?php get_template_part('inc/socials', 'icons'); ?>
                    <h1 class="head"><?php the_title(); ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="alfon-council">
                    <div class="alfon-top">
                        <?php echo the_content(); ?>
                    </div>

                    <?php get_template_part('inc/protocols/protocol', 'list'); ?>

                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>


<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
