<?php
	$events_title = get_field('events_title');
	$all_events = get_field('all_events');
	$events_posts_show = get_field('events_posts_show');
?>
<div class="events-section" id="skip-events-board">
	<div class="container">
    	<div class="head_h2"><?php echo $events_title; ?></div>
        <div class="events-block">
			<div class="swiper-container" data-items="3" data-arrows="true" data-breakpoints-767="2" data-breakpoints-479="1">
				<div class="swiper-wrapper">
				<?php
					if ($events_posts_show) {
						foreach ($events_posts_show as $item) {
							$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
					?>
						<div class="events-items swiper-slide">
							<div class="events-date">
								<div class="day"><?php echo get_the_date('d', $item->ID ); ?></div>
								<?php echo get_the_date('M', $item->ID ); ?>
							</div>
							<div class="content-section">
								<div class="head_h5"><?php echo get_the_title($item->ID); ?></div>
								<div class="pera_p"><?php echo get_the_excerpt($item->ID); ?></div>
								<a href="<?php echo get_permalink($item->ID); ?>" class="lnk"><?php echo _e('Read More' , 'kasrin'); ?></a>
							</div>
							<div class="clear"></div>
						</div>
					<?php
						}
					}
				?>
				</div>
			</div>
            <button type="button" class="lft-arrow prev">
            	<img src="<?php echo THEME_DIR; ?>/images/lft-arrow.png" width="12" height="20" alt="" />
            </button>
            <button type="button" class="rgt-arrow next">
            	<img src="<?php echo THEME_DIR; ?>/images/rgt-arrow.png" width="12" height="20" alt="" />
            </button>
        </div>
        <center>
			<a href="<?php echo get_post_type_archive_link('event'); ?>" class="toAllBtn"><?php echo $all_events; ?></a>
		</center>
    </div>
</div>
