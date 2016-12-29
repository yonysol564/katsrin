<?php
	$whats_new_title     = get_field('whats_new_title');
	$whatsnew_posts_show = get_field('whatsnew_posts_show');
	$all_news_text       = get_field('all_news_text');
	$all_news_cat_id     = get_field('news_category','option');
	$all_news_link_url   = get_term_link($all_news_cat_id,"category");
?>
<div class="container hpCityContainer" id="skip-home-city">
	<div class="city-section">
    	<div class="head_h2"><?php echo $whats_new_title; ?></div>
        <div class="city-block">
			<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
				<div class="swiper-wrapper">
				<?php
					if ($whatsnew_posts_show) {
						foreach ($whatsnew_posts_show as $item) {
							$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
					?>
					<div class="city-items swiper-slide">
						<a href="<?php echo get_permalink($item->ID); ?>" class="imgWrapper">
							<img src="<?php echo $url; ?>" alt="" class="pic" />
						</a>
						<div class="content-section">
							<div class="date"><?php echo get_the_date('d.m.Y', $item->ID ); ?></div>
								<h3 class="head_h5">
									<a href="<?php echo get_permalink($item->ID); ?>" class="title_a">
									<?php echo get_the_title($item->ID); ?>
									</a>
								</h3>
							<?php $post_con = wp_trim_words( $item->post_content, $num_words = 30 ); ?>
							<div class="pera_p"><?php echo $post_con; ?></div>
							<a href="<?php echo get_the_permalink($item->ID); ?>" class="lnk"><?php echo _e('Read More' , 'kasrin'); ?></a>
						</div>
						<div class="clear"></div>
					</div>
					<?php
						}
					}
				?>
				</div>
				<?php if($all_news_text && $all_news_cat_id):?>
					<center>
						<a href="<?php echo $all_news_link_url; ?>" class="toAllBtn"><?php echo $all_news_text; ?></a>
					</center>
				<?php endif;?>
			</div>
			<div class="clear"></div>
		</div>
    </div>
</div>
