<?php
	$object = get_queried_object();
	get_header(); 
?>
<?php // while ( have_posts() ) : the_post(); ?>

	<?php $news_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

	<?php get_template_part('inc/page', 'banner'); ?> 

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
                	<h1 class="head"><?php echo get_cat_name($object->term_id); ?></h1>
                    <div class="clear"></div>                                      
                </div>
                <div class="alfon-council">
                	<div class="alfon-top">
                    	<div class="pera_p">
                    		<?php echo category_description($object->term_id); ?>
                    	</div> 
                    </div>
					<ul class="newsSons_ul">
						<?php while ( have_posts() ) : the_post(); 
							$post_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
							<li class="newsSons_li">
								<a href="<?php the_permalink(); ?>" class="newsSons_a">
									<span class="sonsImgWrapper">
										<img src="<?php echo $post_img; ?>" alt="" class="sonsImg" />
									</span>
									<div class="sonsDate"><?php echo get_the_date('d.m.Y'); ?></div>
									<h3 class="head_h5"><?php the_title(); ?></h3>
									<div class="pera_p"><?php dynamic_excerpt(100); ?></div>
									<span class="readMore"><?php _e('Read More ','kasrin');?></span>
								</a>
							</li>
						<?php endwhile; // End of the loop.	?>


						<?php
/*
						$args = array( 'posts_per_page' => 9, 'category' => $object->term_id );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); 
						$post_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
							<li class="newsSons_li">
								<a href="<?php the_permalink(); ?>" class="newsSons_a">
									<span class="sonsImgWrapper">
										<img src="<?php echo $post_img; ?>" alt="" class="sonsImg" />
									</span>
									<div class="sonsDate"><?php echo get_the_date('d.m.Y'); ?></div>
									<h3 class="head_h5"><?php the_title(); ?></h3>
									<div class="pera_p"><?php dynamic_excerpt(100); ?></div>
									<span class="readMore"><?php _e('Read More ','kasrin');?></span>
								</a>
							</li>
						<?php endforeach; 
						wp_reset_postdata(); */?>

					</ul>

					<?php //my_pagination(); ?>

					<div class="pager">
						<?php my_pagination();?>
					</div> 

                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>  
<?php
// endwhile; // End of the loop.
get_sidebar();
get_footer();
?>




 