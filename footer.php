<?php
	$f_options = get_fields('option');
?>
<div class="push"></div>
</div> <!-- end wrapper -->
<div class="footer-section" id="skip-footer">
    <div class="information-section">
		<div class="container">
			<div class="mail-section">
				<div class="head_h5"><?php echo $f_options['footer_updated_text']; ?></div>
				<div class="search-block">
					<?php echo do_shortcode( $f_options['footer_updated_form'] ); ?>
				</div>
			</div>
			<div class="social-section">
				<div class="social-sectionin">
					<div class="head_h5"><?php echo $f_options['footer_follow_us_text']; ?><span class="followUsMinus"> -</span></div>
					<div class="social-block">

						<?php if($f_options['footer_googleplus_url']):?>
							<a href="<?php echo $f_options['footer_googleplus_url']; ?>" rel="nofollow" class="lnk google"
							 target="_blank" style="background-image: url(<?php echo $f_options['footer_googleplus_img']['url']; ?>);"></a>
						<?php endif;?>

						<?php if($f_options['footer_twitter_url']):?>
							<a href="<?php echo $f_options['footer_twitter_url']; ?>" rel="nofollow" class="lnk twitter"
								style="background-image: url(<?php echo $f_options['footer_twitter_img']['url']; ?>);" target="_blank"></a>
						<?php endif;?>

						<?php if($f_options['footer_facebook_url']):?>
							<a href="<?php echo $f_options['footer_facebook_url']; ?>" rel="nofollow" class="lnk facebook"
							style="background-image: url(<?php echo $f_options['footer_facebook_img']['url']; ?>);" target="_blank"></a>
						<?php endif;?>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
    <footer>
        <div class="container">
            <div class="footer">
				<div class="footerColumn">
					<h5 class="head big-mobile"><?php echo $f_options['footer_first_title']; ?></h5>
					<button type="button" class="head showInMobile"><?php echo $f_options['footer_first_title']; ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_one', 'container' => '', 'menu_class' => 'footer_menu_one' ) ); ?>
				</div>
				<div class="footerColumn">
					<h5 class="head big-mobile"><?php echo $f_options['footer_sec_title']; ?></h5>
					<button type="button" class="head showInMobile"><?php echo $f_options['footer_sec_title']; ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_tow', 'container' => '', 'menu_class' => 'footer_menu_tow' ) ); ?>
				</div>
				<div class="footerColumn">
					<h5 class="head big-mobile"><?php echo $f_options['footer_third_title']; ?></h5>
					<button type="button" class="head showInMobile"><?php echo $f_options['footer_third_title']; ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_three', 'container' => '', 'menu_class' => 'footer_menu_three' ) ); ?>
				</div>
				<div class="footerColumn">
					<h5 class="head big-mobile"><?php echo $f_options['footer_four_title']; ?></h5>
					<button type="button" class="head showInMobile"><?php echo $f_options['footer_four_title']; ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_four', 'container' => '', 'menu_class' => 'footer_menu_four' ) ); ?>
				</div>
				<div class="footerColumn">
					<h5 class="head big-mobile"><?php echo $f_options['footer_fiive_title']; ?></h5>
					<button type="button" class="head showInMobile"><?php echo $f_options['footer_fiive_title']; ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_five', 'container' => '', 'menu_class' => 'footer_menu_five' ) ); ?>
				</div>
                 <div class="clear"></div>
            </div>
        </div>
		<a href="<?php echo $f_options['footer_copyright_url']; ?>" target="dooble" class="dooble">
			<?php echo $f_options['footer_copyright']; ?>
		</a>
    </footer>
</div>

<?php get_template_part("inc/hidden","header"); ?>

<?php get_template_part('inc/accessibility'); ?>

<?php wp_footer(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57e21979bdebcfe3"></script> -->

</body>
</html>
