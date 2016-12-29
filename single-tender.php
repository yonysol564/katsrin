<?php
    get_header(); 
    $op = get_fields();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?> 

	<?php get_template_part('inc/breadcrumbs'); ?>

        <div class="container">
        <div class="inner-main">

            <?php get_template_part('inc/council', 'menu'); ?> 

            <div class="inner-content">
                <div class="inner-head no_border">
                    <?php get_template_part('inc/socials', 'icons'); ?> 
                    <h1 class="head"><?php the_title(); ?></h1>
                    <div class="clear"></div>                                      
                </div>
                <div class="tender-page">

                    <div class="tender-top">
                        <div class="pera_p">
                            <div class="sub-head"><?php _e('Tender Number:', 'kasrin'); ?></div><?php echo $op['tender_single_number']; ?>
                        </div>
                        <div class="pera_p">
                            <div class="sub-head"><?php _e('Last Updated:', 'kasrin'); ?></div> <?php echo $op['tender_single_update']; ?>
                        </div>
                        <div class="pera_p">
                            <div class="sub-head"><?php _e('Submission Deadline:', 'kasrin'); ?></div> <?php echo $op['tender_single_last']; ?>
                        </div>
                        <div class="pera_p">
                            <div class="sub-head"><?php _e('Tender Documents Cost:', 'kasrin'); ?></div> <?php echo $op['documents_costs']; ?>
                        </div>
                    </div>
   

                    <div class="tender-top">
                        <div class="head_h5"><?php echo $op['more_info_title']; ?></div>
                        <div class="pera_p"><div class="sub-head"><?php echo $op['more_info_subtitle']; ?></div></div>
                        <div class="tender-detailsin">
                            <div class="tender-detail">
                                <span class="lnk">
                                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/phone-icon2.png" width="20" height="20" alt="" />
                                    <span class="txt"><?php echo $op['tender_info_phone']; ?></span>
                                    <strong class="clear"></strong>
                                </span>
                            </div>
                            <div class="tender-detail">
                                <span class="lnk">
                                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/fax-icon2.png" width="20" height="20" alt="" />
                                    <span class="txt"><?php echo $op['tender_info_fax']; ?></span>
                                    <strong class="clear"></strong>
                                </span>
                            </div>
                            <div class="tender-detail">
                                <a href="mailto:hitkash@qatzrin.org.il" class="lnk">
                                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon3.png" width="20" height="20" alt="" />
                                    <span class="txt"><?php echo $op['tender_info_email']; ?></span>
                                    <strong class="clear"></strong>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="pera_p"><div class="sub-head"><?php _e('Tender Description:', 'kasrin'); ?></div> <?php echo $op['tender_desc']; ?></div>
                    </div>
   
                    <div class="tender-top">
                        <div class="head_h5"><?php echo $op['attached_files_title']; ?></div>
                        <a href="<?php echo $op['tender_file']; ?>" class="tender-pdf" target="_blank"> 
                            <img class="icon" src="<?php echo $op['tender_file_img']['url']; ?>" width="20" height="23" alt="" />
                            <span class="txt"><?php echo $op['tender_file_desc']; ?></span>
                            <strong class="clear"></strong>
                        </a>                        
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