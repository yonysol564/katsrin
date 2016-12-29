<div class="about-gallery">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
 	<a href="<?php echo $url; ?>" class="about-bigpic fancybox">
		<img class="pic" src="<?php echo $url; ?>" width="379" height="249" alt="" />
	</a>
    <div class="about-thumbs">
    	<div class="head_h5"><?php _e('Gallery','kasrin'); ?></div>
    	<div class="contentGalleryWrapper">	
			<?php if( have_rows('default_gallery') ): ?>
			    <?php while ( have_rows('default_gallery') ) : the_row(); 
			        $gallery_img 	= get_sub_field('default_gallery_img');
			        $gallery_title 	= get_sub_field('default_gallery_title');
			        $gallery_video 	= get_sub_field('default_gallery_video');
			    ?>  
			    <?php if($gallery_img) { ?>
			        	<a href="<?php echo $gallery_img['url']; ?>" class="about-thumb fl_rf fancybox" rel="group">
							<div class="about-pic"><img class="pic" src="<?php echo $gallery_img['url']; ?>" width="179" height="128" alt="" /></div>
							<h4 class="txt"><?php echo $gallery_title; ?></h4>
						</a>
			    <?php } else { ?>
					<a href="http://www.youtube.com/embed/<?php echo $gallery_video; ?>?wmode=transparent&rel=0&autoplay=1" class="about-thumb fl_rf fancybox fancybox.iframe" rel="group">
						<div class="about-pic">
							<img class="pic" src="<?php echo THEME_DIR; ?>/images/img07.jpg" width="179" height="128" alt="" />
							<span class="layer"></span>
							<img class="play-but" src="<?php echo THEME_DIR; ?>/images/play-icon2.png" width="38" height="38" alt="" />
						</div>
						<h4 class="txt"><?php echo $gallery_title; ?></h4>
					</a>
			    <?php } ?>              							   
			    <?php endwhile; ?>       
			<?php endif;?>			
        </div>
    </div>
</div>