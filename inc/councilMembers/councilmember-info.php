<?php
	global $members_list;
    $link_to_contact_page = get_field('link_to_contact_page');
?>
<div class="council-members">
	<?php while ($members_list->have_posts()) : $members_list->the_post();
		$member_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	?>
    	<div class="council-items">
        	<div class="council-align">
            	<div class="council-head">
                	<div class="mayor-members">
                    	<span class="mayorMembersImgWrap">
                    		<img class="pic" src="<?php echo $member_img; ?>" alt="<?php echo get_the_title( $member->ID );?>" />
                    	</span>
                        <div class="pera_p"><?php the_title();?>
                       	 <br><?php echo get_field('cmember_role' , $post->ID); ?></div>
                        <div class="clear"></div>
                    </div>
                    <?php
                        $args = add_query_arg( array(
                            'memberid'  => $post->ID
                        ),  $link_to_contact_page );
                    ?>

                    <a href="<?php echo esc_url($args) ; ?>" class="cont-but">
                        <?php _e('Contact','kasrin');?>
                    </a>
                    <div class="clear"></div>
                </div>
                <div class="council-info">
                    <?php get_template_part("inc/member_social"); ?>
                	<div class="council-contact">
                        <div class="council-list">
                            <div class="council-lnk">
                                <img class="icon" src="<?php echo THEME_DIR; ?>/images/phone-icon.png" width="21" height="21" alt="" />
                                <a href="tel:<?php echo get_field('cmember_phone' , $post->ID); ?>" title="">
                                    <span class="txt"><?php echo get_field('cmember_phone' , $post->ID); ?></span>
                                </a>
                                <strong class="clear"></strong>
                            </div>
                        </div>
                        <div class="council-list">
                            <div class="council-lnk">
                                <img class="icon" src="<?php echo THEME_DIR; ?>/images/cell-icon.png" width="21" height="21" alt="" />
                                <a href="tel:<?php echo get_field('cmember_cellphone' , $post->ID); ?>" title="">
                                    <span class="txt"><?php echo get_field('cmember_cellphone' , $post->ID); ?></span>
                                </a>
                                <strong class="clear"></strong>
                            </div>
                        </div>
                        <div class="council-list">
                            <div class="council-lnk">
                                <img class="icon" src="<?php echo THEME_DIR; ?>/images/fax-icon.png" width="21" height="21" alt="" />
                                <a href="<?php echo get_field('cmember_fax' , $post->ID); ?>" title="">
                                    <span class="txt"><?php echo get_field('cmember_fax' , $post->ID); ?></span>
                                </a>
                                <strong class="clear"></strong>
                            </div>
                        </div>
                        <div class="council-list maili-block">
                            <a href="mailto:<?php echo get_field('cmember_email' , $post->ID); ?>" class="council-lnk">
                                <img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon2.png" width="21" height="21" alt="" />
                                    <span class="txt"><?php echo get_field('cmember_email' , $post->ID); ?></span>
                                <strong class="clear"></strong>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
</div>
