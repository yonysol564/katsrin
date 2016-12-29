<?php
    /* Template Name: Tenders  */
    //$object = get_queried_object();
    get_header();
    $tenders_sub_title = get_field('tenders_sub_title');
    $tender_number = get_field('tender_number');
    $tender_name = get_field('tender_name');
    $tender_last_date = get_field('tender_last_date');
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
                        <div class="pera_p">
                          <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="alphone-contact">

                        <div class="head_h5"><?php echo $tenders_sub_title; ?></div>

                        <?php get_template_part('inc/tenders/department', 'manager'); ?>

                        <?php get_template_part('inc/tenders/tenders', 'list'); ?>

                    </div>
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
