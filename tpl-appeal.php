<?php
    /* Template Name: Appeal */
    get_header();
    $appeal_to_member_form  = get_field('appeal_to_member_form', 'option');
    $memberid = isset($_GET["memberid"]) ? sanitize_text_field($_GET["memberid"]) : ' ';
?>
<?php while ( have_posts() ) : the_post(); ?>

    <?php $page_banner = get_field('page_banner');?>
    <div class="banner-section inner-banner">
        <img class="ban-pic" src="<?php echo $page_banner['url']; ?>" width="1600" height="249" alt="" />
        <div class="layer"></div>
        <div class="banner">
            <div class="banner-align">
                <div class="banner-middle">
                    <div class="container">
                        <div class="banner-content">
                            <h2 class="head_h1"><?php echo _e('Contact' , 'kasrin'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <h1 class="head"><?php _e('Appeal To','kasrin');?><?php echo get_the_title($memberid); ?></h1>
                    <div class="clear"></div>
                </div>
                <?php echo do_shortcode($appeal_to_member_form); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>

<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
