<?php
    $department_manager = get_field('choose_department_manager');
    if($department_manager){
        $title = $department_manager->post_title;
        $role  = get_field('officials_role', $department_manager->ID);
    }
    $department_tel      = get_field('department_tel');
    $department_fax      = get_field('department_fax');
    $department_email    = get_field('department_email');
    $department_address  = get_field('department_address');
    $department_hours    = get_field('department_hours');

    $department_link_contact = get_field('department_link_contact', 'option');
    $link;
    if($department_link_contact){
        $link = $department_link_contact;
    } else {
        $link = home_url();
    }
?>
<div class="alphone-contact">
    <div class="alphone-contactin">
        <div class="alphone-mayor">
            <span class="alphoneMayorImgWrap">
                <?php $imgurl = wp_get_attachment_url( get_post_thumbnail_id($department_manager->ID) );?>
                <img class="pic" src="<?php echo $imgurl; ?>" alt="" />
            </span>
            <div class="alphone-mayorin">
                <?php if($department_manager){ ?>
                    <div class="title"><?php echo $title; ?><div class="designation"><?php echo $role; ?></div></div>
                    <?php set_query_var("member_post",$department_manager);?>
                    <?php get_template_part("inc/member_social"); ?>
                    <div class="clear"></div>
                <?php } ?>

            </div>
            <div class="clear"></div>
        </div>
        <div class="alphone-info">

            <div class="alphone-addre">
                <span class="lnk">
                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/phone-icon2.png" width="20" height="20" alt="" />
                    <span class="txt"><?php echo $department_tel; ?></span>
                    <strong class="clear"></strong>
                </span><br/>
                <span class="lnk no_mar">
                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/fax-icon2.png" width="20" height="20" alt="" />
                    <span class="txt"><?php echo $department_fax; ?></span>
                    <strong class="clear"></strong>
                </span>
            </div>

            <div class="alphone-addre">
                <a href="mailto:<?php echo $department_email; ?>" class="lnk">
                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon3.png" width="20" height="20" alt="" />
                    <span class="txt"><?php echo $department_email; ?></span>
                    <strong class="clear"></strong>
                </a><br>
                <div class="lnk location-icon no_mar">
                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/locator-icon.png" width="20" height="20" alt="" />
                    <span class="txt"><?php echo $department_address; ?></span>
                    <strong class="clear"></strong>
                </div>
            </div>

            <div class="alphone-addre opening-time">
                <div class="lnk no_mar">
                    <img class="icon" src="<?php echo THEME_DIR; ?>/images/clock-icon.png" width="20" height="20" alt="" />
                    <span class="txt"><?php echo $department_hours; ?></span>
                    <strong class="clear"></strong>
                </div>
            </div>

            <div class="clear"></div>
        </div>
        <a href="<?php echo $department_link_contact; ?>" class="cont-but"><?php echo _e('Contact', 'kasrin'); ?></a>
        <div class="clear"></div>
    </div>
</div>
