<?php 
	global $mypages;
?>
<div class="news-section">
	<div class="head_h5"><?php echo _e('Read More' , 'kasrin'); ?></div>
    <div class="news-block">
		<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
			<div class="swiper-wrapper">
				<?php						
					foreach( $mypages as $mypage ) {		
						$content = $mypage->post_content;
						if ( ! $content ) // Check for empty page
							continue;
						$content = apply_filters( 'the_content', $content );
						$page_img =  wp_get_attachment_url( get_post_thumbnail_id($mypage->ID) );
					?>
						<a href="<?php echo get_page_link( $mypage->ID ); ?>" class="swiper-slide news-items">
							<span class="sonsImgWrapper">
								<img src="<?php echo $page_img; ?>" alt="" class="sonsImg" />
							</span>
							<h3 class="head_h5"><?php echo get_the_title( $mypage->ID ); ?></h3>
							<div class="pera_p"><?php echo get_the_excerpt( $mypage->ID ); ?></div>
						</a>
					<?php
					}	
				?>
			</div>
		</div>
        <div class="clear"></div>
    </div>
</div> 