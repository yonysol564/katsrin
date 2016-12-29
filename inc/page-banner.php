<?php 
	$page_banner = get_field('page_banner');
    $title = get_the_title();
    $titlelen = mb_strlen($title);
    if($titlelen >= 35 ){
        $fontsize = 'smaller';
    }
?>
<div class="banner-section inner-banner">
	<img class="ban-pic" src="<?php echo $page_banner['url']; ?>" width="1600" height="249" alt="" />
    <div class="layer"></div>
	<div class="banner">
    	<div class="banner-align">
        	<div class="banner-middle">
                <div class="container">
                    <div class="banner-content">
                        <h2 class="head_h1 <?php echo $fontsize; ?>"><?php the_title(); ?></h2>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>