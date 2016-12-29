<?php  
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => -1,
        'orderby'   => 'title',
        'order'     => 'ASC'
    );
    $events = new WP_Query($args);
?>
<div class="news-section">
	<div class="head_h5"><?php _e('Read More','kasrin');?></div>
    <div class="news-block">
		<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
			<div class="swiper-wrapper">
				<?php while ($events->have_posts()) : $events->the_post(); 
				    $event_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>
					<a href="<?php the_permalink(); ?>" class="swiper-slide news-items">
						<span class="sonsImgWrapper">
							<img src="<?php echo $event_img; ?>" alt="" class="sonsImg" />
						</span>
						<?php 
							$start_date = get_field('start_date',$post->ID);
							$start_date_totime = strtotime($start_date);
							$new_start_date = date('d.m.Y',$start_date_totime);
						?>
						<div class="sonsDate"><?php echo $new_start_date; ?></div>
						<h3 class="head_h5"><?php the_title(); ?></h3>
					</a>
				<?php endwhile; ?>
			</div>
		</div>
        <div class="clear"></div>
    </div>
</div>