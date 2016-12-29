<?php $reg_event_form = get_field('reg_event_form', 'option'); ?>
<div class="about-content">
 	<div class="pera_p">
		<p class="eventTime"><?php _e('Opening Hours','kasrin');?> <?php echo get_field('start_hour', $post->ID); ?></p>
		​<?php the_content(); ?>
	</div>
	<button type="button" class="regBtn openPopup"><?php _e('Signup','kasrin'); ?></button>
	
	<button type="button" class="blackOpacityPOP"></button>
	<div class="formPOP">
		<p class="formPOPheadline"><?php _e('Signup','kasrin'); ?></p>

		<?php echo do_shortcode($reg_event_form); ?>

		<button type="button" class="closePOP" title="Close"></button>
	</div>
</div>