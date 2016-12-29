<?php
    $home_partners = get_field('home_partners');
?>
<div class="partners-section" id="skip-home-partners">
	<div class="container">
    	<ul class="bottomLogos_ul">
            <?php foreach ($home_partners as $partner) { ?>
        		<li class="bottomLogos_li">
        			<a href="<?php echo $partner['home_partners_link']; ?>" title="">
                        <img src="<?php echo  $partner['home_partners_logo']['url'];  ?>" alt="" class="bottomLogos_img" />
                    </a>
        		</li>
            <?php } ?>
    	</ul>
        <div class="clear"></div>
    </div>
</div>
