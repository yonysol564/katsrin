<?php
    /* Template Name: Council Members  */
    global $members_list;
    get_header();

    $base_url            = get_permalink($post->ID);
    $council_member_show = get_field('council_member_show');

    $fpaged = isset($_GET["fpaged"]) ? sanitize_text_field($_GET["fpaged"]) : 1;
    $args = array(
        'post_type'      => 'council_member',
        'posts_per_page' => 8,
        'paged'          => $fpaged,
        'post__in'       => $council_member_show,
        'orderby'        => 'post__in'
    );
    $members_list = new WP_Query($args);
?>

<?php get_template_part('inc/page', 'banner'); ?>

<?php get_template_part('inc/breadcrumbs'); ?>
    <div class="container" id="skip-main-content">
	<div class="inner-main">

    	<?php get_template_part('inc/council', 'menu'); ?>

        <div class="inner-content">
        	<div class="inner-head head-bor no_border">
            	<?php get_template_part('inc/socials', 'icons'); ?>
            	<h1 class="head"><?php echo get_the_title(); ?></h1>
                <div class="clear"></div>
            </div>

            <?php get_template_part('inc/councilMembers/councilmember', 'info'); ?>

            <div class="inner-pagenation">
                <div class="inner-pagenationin">
                     <?php
                        $total_members_available = $members_list->found_posts;
                        $posts_per_page          = $members_list->query_vars["posts_per_page"];
                        $total_pages             = ceil($total_members_available/$posts_per_page);
                    ?>
                    <?php /*
                    <a href="#" rel="nofollow" class="lft">
                        <img src="<?php echo THEME_DIR; ?>/images/arrow7left.png" width="8" height="13" alt="" />
                    </a>
                    */ ?>
                    <?php for($i = 1;$i<$total_pages;$i++):?>
                            <?php $active =  selected($i,$fpaged,false) ? "active" : ""; ?>
                            <a href="<?php echo add_query_arg("fpaged",$i,$base_url);?>" class="num <?php echo $active;?>"><?php echo $i;?></a>
                    <?php endfor;?>
                    <?php /*
                    <a href="#" rel="nofollow"  class="rgt">
                        <img src="<?php echo THEME_DIR; ?>/images/arrow8left.png" width="8" height="13" alt="" />
                    </a>
                    */?>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</div>

<?php
get_sidebar();
get_footer();
?>
