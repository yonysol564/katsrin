<?php
/* Template Name: Thanks */
get_header();
$page_banner = get_field('page_banner');?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="banner-section inner-banner">
			<img class="ban-pic" src="<?php echo $page_banner['url']; ?>" width="1600" height="249" alt="" />
		    <div class="layer"></div>
			<div class="banner">
		    	<div class="banner-align">
		        	<div class="banner-middle">
		                <div class="container">
		                    <div class="banner-content">
		                        <h2 class="head_h1"><?php the_title(); ?></h2>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<?php get_template_part('inc/breadcrumbs'); ?>

		<div class="container" id="skip-main-content">
		    <div class="inner-main">
		        <div class="thanks_content">
		            <div class="inner-head no_border">
		                <?php get_template_part('inc/socials', 'icons'); ?>
		                <h1 class="head"><?php the_title(); ?></h1>
		                <div class="clear"></div>
		            </div>
					<div class="content_col">
					    <div class="pera_p">
							<p>
								<?php the_content(); ?>
							</p>
                        </div>
					</div>
					<div class="img_col">
						<img src="<?php echo THEME_DIR; ?>/images/katzrin-img2.jpg" title="" alt="">
					</div>
		        </div>
		        <div class="clear"></div>
		    </div>
		</div>
	<?php endwhile; // End of the loop.?>
<?php
get_sidebar();
get_footer();
?>
