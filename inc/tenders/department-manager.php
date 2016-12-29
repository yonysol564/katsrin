<?php $tender_manger = get_field('tender_choose_manger');

    $title = $tender_manger->post_title;
    $role  = get_field('officials_role', $tender_manger->ID);
    $department_tel      = get_field('tender_phone');
    $department_fax      = get_field('tender_fax');
    $department_email    = get_field('tender_email');
    $department_address  = get_field('tender_address');
    $department_hours    = get_field('tender_hours');

?>
<div class="alphone-contactin tendersPageDetailsWrapper">
    <div class="alphone-mayor">
        <span class="alphoneMayorImgWrap">
          <?php $imgurl = wp_get_attachment_url( get_post_thumbnail_id($tender_manger->ID) );?>
            <img class="pic" src="<?php echo $imgurl; ?>" alt="" />
        </span>
        <div class="alphone-mayorin">
            <div class="title">
                <?php echo $title; ?>
                <div class="designation"><?php echo $role; ?></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="alphone-info">
        <div class="alphone-addre">
            <span class="lnk">
                <img class="icon" src="<?php echo THEME_DIR; ?>/images/phone-icon2.png" width="20" height="20" alt="" />
                <span class="txt">
                    <?php if($department_tel): ?>
                        <a href="tel:<?php echo $department_tel;?>" rel="nofollow">
                            <?php echo $department_tel; ?>
                        </a>
                    <?php endif;?>
                </span>
                <strong class="clear"></strong>
            </span><br>
            <span class="lnk no_mar">
                <img class="icon" src="<?php echo THEME_DIR; ?>/images/fax-icon2.png" width="20" height="20" alt="" />
                <span class="txt"><?php echo $department_fax; ?></span>
                <strong class="clear"></strong>
            </span>
        </div>
        <div class="alphone-addre">
            <a href="mailto:<?php echo $department_email; ?>" class="lnk" rel="nofollow">
                <img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon3.png" width="20" height="20" alt="" />
                <span class="txt">
                    <?php if($department_email):?>
                        <a href="mailto:<?php echo $department_email;?>">
                            <?php echo $department_email; ?>
                        </a>
                    <?php endif;?>
                </span>
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
                <span class="txt">
                    <?php _e('Opening Hours:', 'kasrin'); ?><br/>
                    <?php echo $department_hours; ?>
                </span>
                <strong class="clear"></strong>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
