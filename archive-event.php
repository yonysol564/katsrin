<?php
    //$object = get_queried_object();
    get_header();
    $board_title = get_field('board_title' , 'option');
    $events_banner = get_field('events_banner' , 'option');
    $page_banner = get_field('page_banner');
    ?>
    <div class="banner-section inner-banner">
        <img class="ban-pic" src="<?php echo $events_banner['url']; ?>" width="1600" height="249" alt="" />
        <div class="layer"></div>
        <div class="banner">
            <div class="banner-align">
                <div class="banner-middle">
                    <div class="container">
                        <div class="banner-content">
                            <h2 class="head_h1"><?php echo $board_title; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container">
    	<div class="inner-main">
        	<div class="sidebar">
                <?php wp_nav_menu( array( 'theme_location' => 'news_menu', 'container' => '', 'menu_class' => 'news_menu' ) ); ?>
                <div class="clear"></div>
            </div>
            <div class="inner-content">
            	<div class="inner-head no_border">
                	<?php get_template_part('inc/socials', 'icons'); ?>
                	<h1 class="head"><?php echo $board_title; ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="alfon-council">
                	<div id="calendar"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php
get_sidebar();
get_footer();
