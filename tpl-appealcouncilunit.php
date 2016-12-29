<?php
    /* Template Name: Appeal Council Units  */
    get_header();
    $set_appo_form = get_field('set_appo_form', 'option');
    $link_contact = get_field('department_link_contact', 'option');
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container" id="skip-main-content">
        <div class="inner-main">
            <div class="sidebar">
                <?php wp_nav_menu( array( 'theme_location' => 'contact_menu_one', 'container' => '', 'menu_class' => 'contact_menu_one' ) ); ?>
                <div class="clear"></div>
            </div>
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
                    <div class="contactCouncilUnits">
                        <div class="head_h5">
                            <?php _e('Council Units','kasrin') ;?>

                            <form role="search" method="get" id="unitform" class="contactCouncilUnits_searchForm" action="<?php echo esc_url( home_url() ); ?>">
                                <input type="text" class="contactCouncilUnits_searchInput" placeholder="<?php _e('Search','kasrin') ;?>" value="<?php echo get_search_query(); ?>" name="s" id="s"  />
                                <input type="submit" value="" class="contactCouncilUnits_searchSubmit" />
                                <input type="hidden" name="post_type" value="unit" />
                            </form>
                            <div class="clear"></div>

                        </div>
                        <div class="alphone-table">
                            <div class="alphone-head">
                                <div class="head"><?php _e('Link','kasrin');?></div>
                                <div class="head"><?php _e('info','kasrin');?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="scrollME">
                                <div class="scrollMEinner">
                                    <?php
                                        $args = array(
                                            'post_type' => 'unit',
                                            'posts_per_page' => -1,
                                        );
                                        $allUnits = new WP_Query($args);
                                    ?>
                                    <?php while ($allUnits->have_posts()) : $allUnits->the_post(); ?>
                                    <div class="alphone-data">
                                        <div class="head tableItemHeadline"><?php _e('Link','kasrin');?></div>
                                        <div class="data">
                                            <a href="<?php echo $link_contact; ?>" class="data_a"><?php echo the_title(); ?></a>
                                        </div>
                                        <div class="head tableItemHeadline"><?php _e('info','kasrin');?></div>
                                        <div class="data"><?php echo dynamic_excerpt(100); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                        </div>
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
