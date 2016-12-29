<?php  
	$single_gallery = get_field('single_gallery');
	if($single_gallery){ ?>
	<div class="news-section newsPageGalleryWrapper">
		<div class="head_h5"><?php echo _e('Gallery' , 'kasrin'); ?></div>
	    <div class="news-block">
			<div class="swiper-container" data-items="3" data-arrows="true" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
				<div class="swiper-wrapper">
					<?php if( have_rows('single_gallery') ): ?>
					    <?php while ( have_rows('single_gallery') ) : the_row(); 
					        $gallery_img 	= get_sub_field('gallery_img');
					        $gallery_img_title 	= get_sub_field('gallery_img_title');
					        $single_video 	= get_sub_field('single_video');
					    ?>  
					    <?php if($gallery_img) { ?>
							<a href="<?php echo $gallery_img['url']; ?>" class="swiper-slide news-items fancybox" rel="group">
								<span class="sonsImgWrapper">
									<img src="<?php echo $gallery_img['url']; ?>" alt="" class="sonsImg" />
								</span>
								<h3 class="head_h5"><?php echo $gallery_img_title; ?></h3>
							</a>
					    <?php } else { ?>
							<a href="http://www.youtube.com/embed/<?php echo $single_video; ?>?wmode=transparent&rel=0&autoplay=1" class="swiper-slide news-items videoItem fancybox fancybox.iframe" rel="group">
								<span class="sonsImgWrapper">
									<img src="<?php echo THEME_DIR; ?>/images/more-img3.jpg" alt="" class="sonsImg" />
								</span>
								<h3 class="head_h5"><?php echo $gallery_img_title; ?></h3>
							</a>
					    <?php } ?>              							   
					    <?php endwhile; ?>       
					<?php endif;?>						
				</div>
			</div>
			<button type="button" class="newsPageGalleryNext next"></button>
			<button type="button" class="newsPageGalleryPrev prev"></button>
	        <div class="clear"></div>
	    </div>
	</div> 
	<?php
	}
?>