<?php
	get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>
    <div class="container">
    	<div class="inner-main">
        	<div class="sidebar">
        		<?php wp_nav_menu( array( 'theme_location' => 'news_menu', 'container' => '', 'menu_class' => 'news_menu' ) ); ?>
                <div class="clear"></div>
            </div>
            <div class="inner-content eventPageInnerContent">
            	<div class="inner-head no_border">
                	<?php get_template_part('inc/socials', 'icons'); ?>
                	<h1 class="head"><?php the_title(); ?> | <?php echo date("d/m/Y",strtotime(get_field('start_date', $post->ID))); ?></h1>
                    <div class="clear"></div>
                </div>
                <div class="about-section">
                	<div class="about-top">

						<?php get_template_part('inc/events/about', 'content'); ?>

						<?php get_template_part('inc/events/about', 'gallery'); ?>

                        <div class="clear"></div>
                    </div>
                    <?php get_template_part('inc/events/more', 'events'); ?>
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
