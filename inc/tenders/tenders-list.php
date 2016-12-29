<div class="alphone-table tendersPageTableWrapper">
    <div class="alphone-head">
        <div class="head"><?php _e('Tender Number', 'kasrin'); ?></div>
        <div class="head"><?php _e('Tender Name', 'kasrin'); ?></div>
        <div class="head"><?php _e('Submission Deadline', 'kasrin'); ?>
            <img class="arrow" src="<?php echo THEME_DIR; ?>/images/arrow9.png" width="11" height="6" alt="" />
        </div>
        <div class="clear"></div>
    </div>
    <?php  
        $args = array(
            'post_type' => 'tender',
            'posts_per_page' => -1,
            'orderby'   => 'title',
            'order'     => 'ASC'
        );
        $allTenders = new WP_Query($args);
    ?>
    <?php while ($allTenders->have_posts()) : $allTenders->the_post(); 
        $member_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <div class="alphone-data">
            <div class="head tableItemHeadline"><?php _e('Tender Number:', 'kasrin'); ?></div>
            <div class="data"><?php echo get_field('tender_single_number',$post->ID); ?></div>
            <div class="head tableItemHeadline"><?php _e('Tender Name:', 'kasrin'); ?></div>
            <div class="data"><?php echo get_the_title($post->ID); ?></div>
            <div class="head tableItemHeadline"><?php _e('Submission Deadline:', 'kasrin'); ?></div>
            <div class="data">
                <?php echo get_field('tender_single_last',$post->ID); ?> &nbsp; <?php echo get_field('tender_hour',$post->ID);  ?>      
            </div>
            <div class="clear"></div>
        </div>
    </a>
    <?php endwhile; ?>
</div> 