 <?php
	/* Template Name: Business  */
	$object = get_queried_object();
	get_header();
	$parent_id = wp_get_post_parent_id($post->ID)
?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php $news_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>

	<div class="container" id="skip-main-content">
    	<div class="inner-main">

        	<div class="sidebar">
	        	<?php $args = array(
					'sort_order' => 'asc',
					'child_of' => $parent_id,
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
                <div class="alfon-council">
                	<div class="alfon-top">
                    	<div class="pera_p">
							<?php the_content(); ?>
                    	</div>
                    </div>
					<div class="city-block">
						<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
							<div class="swiper-wrapper">
								<?php
								$args = array( 'posts_per_page' => 3, 'category' => $object->term_id );
								$myposts = new WP_Query( $args );
								while($myposts->have_posts()): $myposts->the_post();
								    $post_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								?>
									<div class="city-items swiper-slide">
										<a href="<?php the_permalink(); ?>" class="imgWrapper">
											<img src="<?php echo $post_img; ?>" alt="" class="pic" />
										</a>
										<div class="content-section">
											<div class="date"><?php echo get_the_date('d.m.Y'); ?></div>
											<h3 class="head_h5"><a href="#" class="title_a"><?php the_title(); ?></a></h3>
											<div class="pera_p"><?php dynamic_excerpt(100); ?></div>
											<a href="<?php the_permalink(); ?>" class="lnk"><?php _e('Read More ','kasrin');?></a>
										</div>
										<div class="clear"></div>
									</div>

								<?php endwhile; wp_reset_query(); ?>

								<?php my_pagination(); ?>
                                
							</div>
						</div>
						<div class="clear"></div>
					</div>
                </div>
            </div>

            <div class="clear"></div>
        </div>

    </div>
<?php endwhile; // End of the loop.
get_sidebar();
get_footer();
?>
