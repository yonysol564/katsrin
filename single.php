<?php
	get_header(); 
?>
<?php while ( have_posts() ) : the_post(); ?>

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
                	<h1 class="head"><?php the_title(); ?></h1>
                    <div class="clear"></div>                                      
                </div>
                <div class="about-section">
                	<div class="about-top">
                    	 <div class="about-gallery newsPageGallery">
                         	<a href="<?php echo $news_img; ?>" class="about-bigpic fancybox">
								<img class="pic" src="<?php echo $news_img; ?>" width="379" height="249" alt="" />
							</a>
                         </div>
                    	 <div class="newsPage_content">
                         	<div class="pera_p">
                         		<?php the_content(); ?>
                         	</div>
                         </div>
                         <div class="clear"></div>
                    </div>   
                    <?php get_template_part('inc/news/news', 'gallery'); ?>            	     
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php
endwhile; // End of the loop.
get_sidebar();
get_footer();
?>





