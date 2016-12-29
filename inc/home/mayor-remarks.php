<?php
	$mayor_title 		  = get_field('mayor_title');
	$mayo_name 			  = get_field('mayo_name');
	$mayor_content 	 	  = get_field('mayor_content');
	$mayor_img 			  = get_field('mayor_img');
	$mayor_img_content	  = get_field('mayor_img_content');
	$mayor_request 		  = get_field('mayor_request');
	$mayor_request_link   = get_field('mayor_request_link');
	$services_click_title = get_field('services_click_title');
?>
<div class="demi-section" id="skip-mayor-remarks">
    <div class="demi-container">
        <div class="container">
        	<div class="demi-full">
                <div class="demi-block">
                    <div class="demi-content">
						<div class="head_h2">
							<?php echo $mayor_title; ?><br/>
							<div class="sub-head"><?php echo $mayo_name; ?></div>
						</div>
						<div class="pera_p">
							<?php echo $mayor_content; ?>
						</div>
						<div class="mayor-section">
							<img class="pic" src="<?php echo $mayor_img['url']; ?>" width="79" height="79" alt="" />
							<div class="pera_p">
								<?php echo $mayor_img_content; ?>
							</div>
							<div class="clear"></div>
						</div>
						<a href="<?php echo $mayor_request_link; ?>" class="lnk">
							<?php echo $mayor_request; ?>
							<span class="arrow"></span>
						</a>
					</div>
                </div>
                <div class="demi-left">
                	<div class="subject-section">
						<h5 class="head_h3"><?php echo $services_click_title; ?></h5>
						<?php if( have_rows('services_click_rep') ): ?>
						    <?php while ( have_rows('services_click_rep') ) : the_row();
						        $services_click_rep_img = get_sub_field('services_click_rep_img');
						        $services_click_rep_text = get_sub_field('services_click_rep_text');
						        $services_click_rep_link = get_sub_field('services_click_rep_link');
								$new_window = get_sub_field("new_window");
						    ?>
							<div class="subject-items">
								<a href="<?php echo $services_click_rep_link; ?>" class="subject-lnk" <?php echo $new_window ? "target='_blank'" : "";?>>
									<span class="servicesIconsWrap">
										<img src="<?php echo $services_click_rep_img['url']; ?>" alt="" class="icon" />
										&nbsp;
									</span>
									<span class="txt"><?php echo $services_click_rep_text; ?></span>
								</a>
							</div>
						    <?php endwhile; ?>
						<?php endif;?>
						<div class="clear"></div>
					</div>
                </div>
            </div>
        </div>
    </div>
    <div class="demi-view"><img class="view" src="<?php echo THEME_DIR; ?>/images/demi-bg.jpg" width="800" height="747" alt="" /></div>
    <div class="clear"></div>
</div>
