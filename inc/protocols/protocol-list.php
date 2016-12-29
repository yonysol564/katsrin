<?php 
    $terms = get_terms( array( 'taxonomy' => 'protocol_cat','hide_empty' => false) );
?>
<div class="protocols-accordion">                
    <?php foreach ($terms as $term) {
            $args = array(
                'post_type' => 'protocol',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'protocol_cat',
                        'field'    => 'term_id',
                        'terms'    => $term->term_id,
                    ),
                ),
            );
            $protocols = new WP_Query( $args ); ?>
            <div class="protocols-list">
                <div class="protocols-head">
                    <a href="#" rel="nofollow" class="head_h5"><?php echo $term->name; ?></a>
                </div>
                <div class="protocols-con">
                    <?php while ($protocols->have_posts()) : $protocols->the_post(); 
                        $post_excerpt = get_the_excerpt($post->ID); 
                        $youtube_id = get_field('protocol_video' ,$post->ID); 
                    ?>
                        <div class="protocols-data">
                            <div class="head_h6">
                                <img class="icon" src="<?php echo THEME_DIR; ?>/images/menu-icon2.png" width="20" height="21" alt="" />
                                <span class="txt"><?php echo get_the_title($post->ID); ?>, <?php echo get_the_date('d.m.Y', $post->ID ); ?></span>
                                <strong class="clear"></strong>
                            </div>
                            <div class="protocols-info">
                                <div class="protocols-point">
                                    <div class="txt"><?php echo dynamic_excerpt('60') ?></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="protocols-video">
                                    <a href="http://www.youtube.com/embed/<?php echo $youtube_id; ?>?wmode=transparent&rel=0&autoplay=1" class="lnk fancybox fancybox.iframe">
                                        <img class="icon" src="<?php echo THEME_DIR; ?>/images/play-icon.png" width="21" height="21" alt="" />
                                        <span class="txt"><?php _e('View video ','kasrin');?></span>
                                        <strong class="clear"></strong>
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>                                    
                            <div class="clear"></div>
                        </div>
                    <?php endwhile; ?>
                </div>                                  
            </div>  
    <?php } ?>
</div>