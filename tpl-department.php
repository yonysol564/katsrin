<?php
    /* Template Name: Department  */
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
                <div class="alfon-council department-page">

                    <?php get_template_part('inc/departments/department', 'manager'); ?>

                    <div class="department-top">
                        <div class="childrens-block">
                            <div class="childrens-pic">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <img class="pic" src="<?php echo $url; ?>" width="379" height="249" alt="" />
                            </div>
                            <div class="pera_p">
                                <?php the_content(); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="department-info">

                        <?php get_template_part('inc/departments/department', 'contact'); ?>

                        <?php get_template_part('inc/departments/schedule', 'section'); ?>

                        <div class="clear"></div>
                    </div>

                    <?php if( have_rows('file_downloads_rep') ): ?>
                        <div class="head_h5 downloadFilesHeadline"><?php echo get_field('files_title'); ?></div>
                        <ul class="psdFiles_ul">
                                <?php while ( have_rows('file_downloads_rep') ) : the_row();
                                    $file_title = get_sub_field('file_title');
                                    $file_down_src = get_sub_field('file_down_src');
                                    $file_down_img = get_sub_field('file_down_img');
                                ?>
                                    <li class="psdFiles_li">
                                        <a href="<?php echo $file_down_src; ?>" class="psdFiles_a" download>
                                            <img src="<?php echo $file_down_img['url']; ?>" alt="" class="psdFiles_img" />
                                            <h4 class="psdFiles_h4"><?php echo $file_title; ?></h4>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                        </ul>
                    <?php endif;?>

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
