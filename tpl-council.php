<?php
	/* Template Name: Council  */
	//$object = get_queried_object();
	get_header();
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
                	<h1 class="head">אודות קצרין</h1>
                    <div class="clear"></div>
                </div>
                <div class="about-section">
                	<div class="about-top">
                    	 <div class="about-content">
  							<?php the_content(); ?>
                         </div>
                    	 <div class="about-gallery">
                         	<a href="images/gallery-pic1.jpg" class="about-bigpic fancybox">
								<img class="pic" src="images/gallery-pic1.jpg" width="379" height="249" alt="" />
							</a>
                            <div class="about-thumbs">
                            	<div class="head_h5">גלריה</div>
                            	<div class="contentGalleryWrapper">
                            		<a href="images/gallery-pic3.jpg" class="about-thumb fl_rf fancybox" rel="g">
										<div class="about-pic"><img class="pic" src="images/gallery-pic3.jpg" width="179" height="128" alt="" /></div>
										<h4 class="txt">כותרת התמונה</h4>
									</a>
									<a href="images/gallery-pic3.jpg" class="about-thumb fl_lf fancybox" rel="g">
										<div class="about-pic"><img class="pic" src="images/gallery-pic2.jpg" width="179" height="128" alt="" /></div>
										<h4 class="txt">כותרת התמונה</h4>
									</a>
									<a href="http://www.youtube.com/embed/EjKGFLbSFBw?wmode=transparent&rel=0&autoplay=1" class="about-thumb fl_rf fancybox fancybox.iframe" rel="g">
										<div class="about-pic">
											<img class="pic" src="images/gallery-pic5.jpg" width="179" height="128" alt="" />
											<span class="layer"></span>
											<img class="play-but" src="images/play-icon2.png" width="38" height="38" alt="" />
										</div>
										<h4 class="txt">כותרת הסרטון</h4>
									</a>
									<a href="images/gallery-pic3.jpg" class="about-thumb fl_lf fancybox" rel="g">
										<div class="about-pic"><img class="pic" src="images/gallery-pic4.jpg" width="179" height="128" alt="" /></div>
										<h4 class="txt">כותרת התמונה</h4>
									</a>
                            	</div>
                            </div>
                         </div>
                         <div class="clear"></div>
                    </div>
                    <div class="news-section">
                    	<div class="head_h5"><?php echo _e('Read More' , 'kasrin'); ?></div>
                        <div class="news-block">
							<div class="swiper-container" data-items="3" data-center-slides="true" data-breakpoints-767="2" data-breakpoints-599="2">
								<div class="swiper-wrapper">
									<a href="#" class="swiper-slide news-items">
										<span class="sonsImgWrapper">
											<img src="images/more-img3.jpg" alt="" class="sonsImg" />
										</span>
										<h3 class="head_h5">דבר ראש העיר</h3>
										<div class="pera_p">מועצה מקומית קצרין זוכה 14 פעמים ברציפות בקריטריונים קפדניים של ניהול כספי.</div>
									</a>
									<a href="#" class="swiper-slide news-items">
										<span class="sonsImgWrapper">
											<img src="images/more-img2.jpg" alt="" class="sonsImg" />
										</span>
										<h3 class="head_h5">חברי המועצה</h3>
										<div class="pera_p">מועצה מקומית קצרין זוכה 14 פעמים ברציפות בקריטריונים קפדניים של ניהול כספי.</div>
									</a>
									<a href="#" class="swiper-slide news-items">
										<span class="sonsImgWrapper">
											<img src="images/more-img1.jpg" alt="" class="sonsImg" />
										</span>
										<h3 class="head_h5">שקיפות</h3>
										<div class="pera_p">מועצה מקומית קצרין זוכה 14 פעמים ברציפות בקריטריונים קפדניים של ניהול כספי.</div>
									</a>
									<a href="#" class="swiper-slide news-items">
										<span class="sonsImgWrapper">
											<img src="images/more-img1.jpg" alt="" class="sonsImg" />
										</span>
										<h3 class="head_h5">שקיפות</h3>
										<div class="pera_p">מועצה מקומית קצרין זוכה 14 פעמים ברציפות בקריטריונים קפדניים של ניהול כספי.</div>
									</a>
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
