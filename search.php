<?php
    get_header(); 
   // $page_banner = get_field('page_banner');
?>
<div class="banner-section inner-banner">
	<img class="ban-pic" src="<?php echo THEME_DIR; //echo $page_banner['url']; ?>/images/mayor-banner.jpg" width="1600" height="249" alt="" />
    <div class="layer"></div>
	<div class="banner">
    	<div class="banner-align">
        	<div class="banner-middle">
                <div class="container">
                    <div class="banner-content">
                        <h2 class="head_h1"><?php _e('Search','kasrin');?></h2>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="inner-main">
		<div class="before_after_top way">
			<section class="search_sec">
				<div class="container">
					<div class="top_div">
						<h1><?php _e('Search Results','kasrin');?></h1>
						<?php get_template_part('inc/socials', 'icons'); ?> 
					</div>
				</div>

				<form role="search" method="get" action="<?php echo home_url(); ?>">  
					<div class="container">
						<div class="input_div">
					      <input class="form-control input_search" type="search" name="s" id="search" placeholder="<?php _e('Click To Search','kasrin');?>">
					    </div>
			
					    <div class="input_button">
					      <button class="search-submit" type="submit" role="button"><?php _e('Search','kasrin');?></button>
					    </div>
					    <div class="clear"></div>
					</div>
				</form>
			</section>
		</div>	
		<section class="search_results">	
			<div role="main" class="container">
				<div class="">
					<h4>
					<?php 
						echo sprintf( __( '%s Results For ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
					</h4>
				</div>
				<div class="">
					<div class="border_con">
						
					</div>
				</div>
				<div class="results_div">
				  <ul>
					<?php while(have_posts()): the_post(); ?>
						    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>	
					<?php endwhile; ?>
				  </ul>
				</div>	  
				<?php get_template_part('pagination'); ?>

				<div class="">	
					<div class="pagination_div media_icons1">
						<?php 
						if ($wp_query->found_posts <= 10) 
						{ 
						?> 
							<div class="pagination">
						     	<span class="current">1</span>
						    </div>	
						<?php 
						}else{
							my_pagination();
						}
						?>
					</div>
				</div>
			</div>
		</section>
    </div>
</div>



<?php
get_sidebar();
get_footer();
?>