<?php
	/* Template Name: About Council  */
	//$object = get_queried_object();
	get_header();
	$parent_page_id = wp_get_post_parent_id( $post->ID );
?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container" id="skip-main-content">
    	<div class="inner-main">

        	<?php get_template_part('inc/council', 'menu'); ?>

            <div class="inner-content">
            	<div class="inner-head no_border">
                	<?php get_template_part('inc/socials', 'icons'); ?>
                	<h1 class="head"><?php the_title(); ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="about-section">
                	<div class="about-top">
                    	<div class="about-content">
                         	<div class="pera_p">
								<?php the_content(); ?>
                            </div>
                        </div>

						<?php get_template_part('inc/about/gallery', 'about'); ?>

                        <div class="clear"></div>
                    </div>
                    <div class="news-section">
                    	<div class="head_h5"><?php echo _e('Read More' , 'kasrin'); ?></div>
                        <div class="news-block">
							<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
								<div class="swiper-wrapper">
								<?php
									$link_pages = get_field('link_pages');
									if ($link_pages) {
										foreach ($link_pages as $item) {
											$url = wp_get_attachment_url( get_post_thumbnail_id($item->ID) );
									?>
									<a href="<?php echo get_permalink($item->ID); ?>" class="swiper-slide news-items">
										<span class="sonsImgWrapper">
											<img src="<?php echo $url; ?>" alt="" class="sonsImg" />
										</span>
										<h3 class="head_h5">
											<?php echo get_the_title($item->ID); ?>
										</h3>
										<div class="pera_p">
											<?php dynamic_excerpt(75); ?>
										</div>
									</a>
									<?php
										}
									}
								?>
								</div>
							</div>
                            <div class="clear"></div>
                        </div>
                    </div>
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
