<div class="topOpencontactMenu" aria-hidden="true" tabindex="-1">
	<div class="container topOpencontactMenuContainer">
		<ul class="topOpencontactMenu_ul1">
			<?php if( have_rows('header_contact_services1' , 'option') ): ?>
				<?php while ( have_rows('header_contact_services1' , 'option') ) : the_row();
					$con_services1_img = get_sub_field('contact_services1_img');
					$con_services1_text = get_sub_field('contact_services1_text');
					$con_services1_link = get_sub_field('contact_services1_link');
				?>
					 <li class="topOpencontactMenu_ul1_li">
						<a href="<?php echo $con_services1_link; ?>" class="topOpencontactMenu_ul1_a">
							<span class="topOpencontactMenu_ul1_span">
								<img src="<?php echo $con_services1_img['url']; ?>" alt="" class="topOpencontactMenu_ul1_img" />
								&nbsp;
							</span>
							<?php echo $con_services1_text; ?>
							<div class="clear"></div>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif;?>
		</ul>
		<ul class="topOpencontactMenu_ul2">
			<?php if( have_rows('header_contact_services2' , 'option') ): ?>
				<?php while ( have_rows('header_contact_services2' , 'option') ) : the_row();
					$con_services2_text = get_sub_field('contact_services2_text');
					$con_services2_link = get_sub_field('contact_services2_link');
				?>
					<li class="topOpencontactMenu_ul2_li">
						<a href="<?php echo $con_services2_link; ?>" class="topOpencontactMenu_ul2_a"><?php echo $con_services2_text; ?></a>
					</li>
				<?php endwhile; ?>
			<?php endif;?>
		</ul>
		<div class="clear"></div>
	</div>
	<div class="topOpencontactMenu_miniDiv"></div>
</div>
