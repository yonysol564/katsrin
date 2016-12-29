<?php $op = get_fields('option'); ?>

<a href="#" class="wheelchair-icon" rel="nofollow" id="skip-access-sidebar">
	<img class="icon" src="<?php echo THEME_DIR; ?>/images/wheelchair-icon.png" width="28" height="32" alt="" />
</a>

<div class="wrap_access" aria-hidden="true">
	<div class="inner_access">
		<div class="close_access">
			<a href="#" class="close_access_btn" title="" rel="nofollow">
				<img src="<?php echo THEME_DIR; ?>/images/access_close.png" title="" alt="">
			</a>
		</div>

		<div class="wrap_block">
			<h2 class="main_h2"><?php echo $op['access_main_title']; ?></h2>
			<a href="#" class="zoomin_btn" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_zoom_in.png" title="" alt="">
					<span><?php echo $op['access_zoom_in']; ?></span>
				</div>
			</a>
			<a href="#" class="zoomout_btn" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_zoom_out.png" title="" alt="">
					<span><?php echo $op['access_zoom_out']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block">
			<h2><?php echo $op['access_colos_title']; ?></h2>
			<a class="btn_dark" href="#" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_dark.png" title="" alt="">
					<span><?php echo $op['access_dark']; ?></span>
				</div>
			</a>
			<a class="btn_bright" href="#" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_bright.png" title="" alt="">
					<span><?php echo $op['access_bright']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block">
			<h2><?php echo $op['access_links_title']; ?></h2>
			<a class="btn_bolder" href="#" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_font_size.png" title="" alt="">
					<span><?php echo $op['access_bold']; ?></span>
				</div>
			</a>
			<a class="btn_underline" href="#" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_underline.png" title="" alt="">
					<span><?php echo $op['access_underline']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block">
			<h2><?php echo $op['access_fonts_title']; ?></h2>
			<a href="#" class="fontfamily_btn" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_fontfamily.png" title="" alt="">
					<span><?php echo $op['access_fontfamily']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block">
			<h2><?php echo $op['access_animation_title']; ?></h2>
			<a href="#" class="animation_btn" title="" rel="nofollow">
				<div class="access_div_btn">
					<img src="<?php echo THEME_DIR; ?>/images/access_media.png" title="" alt="">
					<span><?php echo $op['access_animations']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block wrap_block_wheel">
			<a href="#" title="" rel="nofollow">
				<div class="access_div_link">
					<img src="<?php echo THEME_DIR; ?>/images/access_wheelchai.png" title="" alt="">
					<span><?php echo $op['access_claim']; ?></span>
				</div>
			</a>
		</div>

		<div class="wrap_block">
			<a href="#" title="" rel="nofollow">
				<div class="access_div_link">
					<img src="<?php echo THEME_DIR; ?>/images/access_envelop.png" title="" alt="">
					<span><?php echo $op['access_ref']; ?></span>
				</div>
			</a>
		</div>

	</div>
</div>
