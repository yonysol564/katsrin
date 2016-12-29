<?php
    $home_pages_link_title = get_field('home_pages_link_title');
    $home_pages_link_subtitle = get_field('home_pages_link_subtitle');
?>
<div class="container" id="skip-links-pages">
	<div class="katzrin-section">
    	<h1 class="head_h3"><?php echo $home_pages_link_title; ?></h1>
        <div class="pera_p"><?php echo $home_pages_link_subtitle; ?></div>
    	<div class="katzrin-block">
            <?php if( have_rows('home_pages_link_rep') ): ?>
                <?php while ( have_rows('home_pages_link_rep') ) : the_row();
                    $home_pages_link_img = get_sub_field('home_pages_link_img');
                    $home_pages_link_text = get_sub_field('home_pages_link_text');
                    $home_pages_link_url = get_sub_field('home_pages_link_url');
                ?>
                    <a href="<?php echo$home_pages_link_url; ?>" class="katzrin-items">
                        <span class="hpBoxesUnderBanner_imgWrap">
                            <img class="pic" src="<?php echo $home_pages_link_img['url']; ?>" width="379" height="206" alt="" />
                        </span>
                        <h3 class="lnk"><?php echo $home_pages_link_text; ?><span class="arrow"></span></h3>
                    </a>
                <?php endwhile; ?>
            <?php endif;?>
            <div class="clear"></div>
        </div>
    </div>
</div>
