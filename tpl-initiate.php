<?php
/* Template Name: Default Page */
//$object = get_queried_object();
get_header();
$page_social_link = get_field('page_social_link');
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container" id="skip-main-content">
    	<div class="inner-main">
        	<div class="sidebar">
	        	<?php $args = array(
					'sort_order' => 'asc',
					'child_of' => $post->ID,
					'post_type' => 'page',
					'post_status' => 'publish'
				);
				$mypages = get_pages($args);
				?>
				<ul>
					 <?php
					 foreach( $mypages as $mypage ) {
							$content = $mypage->post_content;
							if ( ! $content ) // Check for empty page
								continue;
							$content = apply_filters( 'the_content', $content );
						?>
							<li><a href="<?php echo get_page_link( $mypage->ID ); ?>"><?php echo $mypage->post_title; ?></a></li>
						<?php
						}
					?>
                </ul>
                <div class="clear"></div>
            </div>
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

						<?php get_template_part('inc/default/default', 'gallery'); ?>

                         <div class="clear"></div>
                    </div>

                    <div class="news-section">
                    	<div class="head_h5"><?php echo _e('Read More' , 'katsrin'); ?></div>
                        <div class="news-block">
							<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
								<div class="swiper-wrapper">
									<?php
										foreach( $mypages as $mypage ) {
												$content = $mypage->post_content;
												if ( ! $content ) // Check for empty page
													continue;
												$content = apply_filters( 'the_content', $content );
												$page_img =  wp_get_attachment_url( get_post_thumbnail_id($mypage->ID) );
											?>
												<a href="<?php echo get_page_link( $mypage->ID ); ?>" class="swiper-slide news-items">
													<span class="sonsImgWrapper">
														<img src="<?php echo $page_img; ?>" alt="" class="sonsImg" />
													</span>
													<h3 class="head_h5"><?php echo get_the_title( $mypage->ID ); ?></h3>
													<div class="pera_p"><?php echo get_the_excerpt( $mypage->ID ); ?></div>
												</a>
											<?php
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
