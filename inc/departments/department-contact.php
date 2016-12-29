<?php 
    $contact_people = get_field('contact_people');
?>
<div class="department-contact">
    <div class="head_h5"><?php echo get_field('department_info_title'); ?></div>
    <div class="department-accordion">
        <?php if ($contact_people) { ?> 
        <?php foreach ($contact_people as $person) { ?>    
            <div class="department-acco">
                <button type="button" class="head_h6"><?php echo get_the_title($person->ID); ?> | <?php echo get_field('officials_role', $person->ID); ?></button>
                <div class="tender-detailsin">
                    <div class="tender-detail">
                        <span class="lnk">
                            <img class="icon" src="<?php echo THEME_DIR; ?>/images/phone-icon2.png" width="20" height="20" alt="" />
                            <span class="txt"><?php echo get_field('officials_phone', $person->ID); ?></span>
                            <strong class="clear"></strong>
                        </span>
                    </div>
                    <div class="tender-detail">
                        <span class="lnk">
                            <img class="icon" src="<?php echo THEME_DIR; ?>/images/fax-icon2.png" width="20" height="20" alt="" />
                            <span class="txt"><?php echo get_field('officials_fax', $person->ID); ?></span>
                            <strong class="clear"></strong>
                        </span>
                    </div>
                    <div class="tender-detail">
                        <a href="mailto:<?php echo get_field('officials_email', $person->ID); ?>" class="lnk">
                            <img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon3.png" width="20" height="20" alt="" />
                            <span class="txt"><?php echo get_field('officials_email', $person->ID); ?></span>
                            <strong class="clear"></strong>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <?php } ?>
        <?php
            } 
        ?>
    </div>
</div>