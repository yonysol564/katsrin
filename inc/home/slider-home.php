<?php
	$home_slider = get_field('home_main_slider');
?>
<div class="banner-section" id="skip-homeslider">
	<div class="swiper-container" data-items="1" data-arrows="true" data-pagination="true">
		<div class="swiper-wrapper">
			<?php foreach ($home_slider as $slide) { ?>
				<div class="swiper-slide">
					<img class="ban-pic" src="<?php echo $slide['home_main_slider_img']['url']; ?>" width="1600" height="652" alt="" />
					<div class="layer"></div>
					<div class="banner">
						<div class="banner-align">
							<div class="banner-middle">
								<div class="container">
									<div class="banner-content">
										<h2 class="head_h1"><?php echo $slide['home_main_slider_title']; ?></h2>
										<div class="pera_p"><?php echo $slide['home_main_slider_subtitle']; ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="pagenation">
			<div class="pagenationin pagination"></div>
		</div>
	</div>
    <a href="#" rel="nofollow" class="lft-arrow prev"><img src="<?php echo THEME_DIR; ?>/images/rgt-arrow2.png" width="18" height="32" alt="" /></a>
    <a href="#" rel="nofollow" class="rgt-arrow next"><img src="<?php echo THEME_DIR; ?>/images/lft-arrow2.png" width="18" height="32" alt="" /></a>
</div>
