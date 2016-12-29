<?php
    /* Template Name: Alphope  */
    get_header();

    $official_title = get_field('official_title');
    $alpnoe_email_title = get_field('alpnoe_email_title');
    $alpnoe_fullname_title = get_field('alpnoe_fullname_title');
    $alpnoe_role_title = get_field('alpnoe_role_title');
    $alpnoe_phone_title = get_field('alpnoe_phone_title');
    $alpnoe_contact_title = get_field('alpnoe_contact_title');
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
                        <?php the_content(); ?>
                    </div>
                    <div class="alfon-officials alphonePageTableWrapper">
                        <div class="head_h5"><?php echo $official_title; ?></div>

                        <form role="search" method="get" id="searchform" class="alfon-seach" action="<?php echo esc_url( home_url() ); ?>">
                            <div class="inner_wrap">
                                <input type="text" class="text-field" placeholder="<?php _e('Search','kasrin');?>" value="<?php echo get_search_query(); ?>" name="s" id="s"  />
                                <input type="submit" class="icon" value="" />
                                <input type="hidden" name="post_type" value="officials" />
                                <div class="clear"></div>
                            </div>
                        </form>

                        <div class="clear"></div>
                        <div class="alfon-table">
                            <div class="alfon-head">
                                <div class="head"><?php echo $alpnoe_fullname_title; ?></div>
                                <div class="head"><?php echo $alpnoe_role_title; ?></div>
                                <div class="head"><?php echo $alpnoe_email_title ?></div>
                                <div class="head"><?php echo $alpnoe_phone_title; ?></div>
                                <div class="head"><?php echo $alpnoe_contact_title; ?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="alfon-scroll scrollME">
                                <div class="scrollMEinner">
                                    <div class="alfon-content">
                                        <?php
                                            $args = array(
                                                'post_type' => 'officials',
                                                'posts_per_page' => -1,
                                                'orderby'   => 'title',
                                                'order'     => 'ASC'
                                            );
                                            $officials_list = new WP_Query($args);
                                        ?>

                                        <?php while ($officials_list->have_posts()) : $officials_list->the_post();  ?>

                                            <div class="alfon-data">
                                                <div class="head tableItemHeadline"><?php echo $alpnoe_fullname_title; ?></div>

                                                <div class="data"><?php echo get_the_title($post->ID); ?></div>

                                                <div class="head tableItemHeadline"><?php echo $alpnoe_role_title; ?></div>

                                                <div class="data"><?php echo get_field('officials_role' ,$post->ID); ?></div>

                                                <div class="head tableItemHeadline"><?php echo $alpnoe_email_title ?></div>

                                                <div class="data">
                                                    <a class="lnk" href="mailto:<?php echo get_field('officials_email' ,$post->ID); ?>">
                                                        <?php echo get_field('officials_email' ,$post->ID); ?>
                                                    </a>
                                                </div>

                                                <div class="head tableItemHeadline"><?php echo $alpnoe_phone_title; ?></div>

                                                <?php $phone = get_field('officials_phone' ,$post->ID) ;?>
                                                <div class="data">
                                                    <span class="lnk">
                                                        <?php if($phone):?>
                                                            <a href="tel:<?php echo $phone;?>">
                                                                <?php echo get_field('officials_phone' ,$post->ID); ?>
                                                            </a>
                                                        <?php endif;?>
                                                    </span>
                                                </div>

                                                <div class="head tableItemHeadline"><?php echo $alpnoe_contact_title; ?></div>

                                                <a href="<?php echo get_field('officials_url' ,$post->ID) ? get_field('officials_url' ,$post->ID) : get_field('officials_email' ,$post->ID); ?>" class="lnk" class="data"><?php _e('Click To Contact ','kasrin');?></a>

                                                <div class="clear"></div>
                                            </div>

                                        <?php endwhile; ?>

                                    </div>
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
