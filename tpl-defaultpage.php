<?php
	/* Template Name: General Page */
	get_header();
	$enjoy_kasrin_sign= get_field('enjoy_kasrin_sign');
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('inc/page', 'banner'); ?>

	<?php get_template_part('inc/breadcrumbs'); ?>

    <div class="container" id="skip-main-content">
    	<div class="inner-main">
        	<div class="sidebar">
				<?php if($enjoy_kasrin_sign){ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'enjoy_menu', 'container' => '', 'menu_class' => 'enjoy_menu' ) ); ?>
				<?php } else { ?>
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
				<?php } ?>

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
					<?php if(!$enjoy_kasrin_sign){ ?>
                    <?php get_template_part('inc/default/more', 'pagelinks'); ?>
					<?php } ?>
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
