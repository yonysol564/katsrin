<?php
	$logo_img            = get_field('logo_img','option');
	$header_search_text  = get_field('header_search_text','option');
	$header_login_text   = get_field('header_login_text','option');
	$header_contact_text = get_field('header_contact_text','option');
?>
<!doctype html>
<!--[if lt IE 10]><html lang="he" class="lt10"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="google-site-verification" content="vmLkLfOZkrvfS7PaWDu47YnJ_4nI_utLgLidkFmOXcg" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<title><?php echo the_title(); ?></title>
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favicons/safari-pinned-tab.svg" color="#000000">
<meta name="theme-color" content="#ffffff">
<!--[if lt IE 10]>
	<script type='text/javascript'>
		$(document).ready(function(){
			$.get('browsers.html' , function(data){
				$('body').html(data);
			});
		});
	</script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part("inc/skiplinks"); ?>

<div class="wrapper">
    <header>
		<!-- top was here -->
		<div class="clear"></div>
		<div class="container topInfoContainer">
			<div class="more-info">
				<div class="info-but">
					<a href="#topSearch" class="info-lnk fancybox">
						<img class="icon" src="<?php echo THEME_DIR; ?>/images/search-icon.png" width="17" height="16" alt="<?php echo $header_search_text; ?>" />
						<span class="txt"><?php echo $header_search_text; ?></span>
						<div class="clear"></div>
					</a>
					<?php get_search_form();?>
				</div>
				<div class="info-but">
					<a href="#" class="info-lnk">
						<img class="icon" src="<?php echo THEME_DIR; ?>/images/lock-icon.png" width="17" height="16" alt="<?php echo $header_login_text; ?>" />
						<span class="txt"><?php echo $header_login_text; ?></span>
						<strong class="clear"></strong>
					</a>
				</div>
				<div class="info-but">
					<button type="button" class="info-lnk openTopContact">
						<img class="icon" src="<?php echo THEME_DIR; ?>/images/message-icon.png" width="17" height="16" alt="<?php echo $header_contact_text; ?>" />
						<span class="txt"><?php echo $header_contact_text; ?></span>
						<strong class="clear"></strong>
					</button>
				</div>
				<?php icl_post_languages(); ?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
        <div class="container headerContainer">
            <div id="logo">
            	<a href="<?php echo home_url(); ?>">
            		<img class="logoin" src="<?php echo $logo_img['url']; ?>"
					width="112" height="93" alt="<?php echo $logo_img['alt'] ? $logo_img['alt'] : get_bloginfo('name'); ?>" />
            	</a>
            </div>
            <a href="#topSearch" class="mobile-search fancybox">
            	<img src="<?php echo THEME_DIR; ?>/images/search-icon2.png" width="17" height="17" alt="search" />
            </a>
            <button type="button" class="menu_icon">
				<span class="menuIconSpans menuIconSpan1"></span>
				<span class="menuIconSpans menuIconSpan2"></span>
				<span class="menuIconSpans menuIconSpan3"></span>
			</button>
            <div class="header-info">
                <nav id="skip-navigation">
                    <?php
                     wp_nav_menu(
                    	array(  'theme_location'   => 'top_menu',
                     		 	'container' 	   => '',
                      			'container_class'  => 'wrap_top_menu',
                       			'menu_class' 	   => 'top_menu' ) );
                     ?>
                    <div class="clear"></div>
                </nav>
            </div>
            <div class="clear"></div>
        </div>
		<div class="clear"></div>
    </header>
	<div class="clear"></div>
