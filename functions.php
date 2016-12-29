<?php
	define("THEME_DIR",get_template_directory_uri());
	//define("LANG", ICL_LANGUAGE_CODE);
	define("CURRENT_YEAR",date('Y'));
	$lang = TEMPLATEPATH . '/lang';
	load_theme_textdomain('title', $lang);

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Accessibility Settings',
			'menu_title'	=> 'Accessibility',
			'parent_slug'	=> 'theme-general-settings',
		));

	}


	get_template_part('admin/shortcodes');
	get_template_part("admin/ajax");
	get_template_part("admin/types");


	// Add body classes
	if ( ! function_exists( 'add_body_class' ) ){
	    function add_body_class( $classes ) {
	        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	        if( $is_lynx ) $classes[] = 'lynx';
	        elseif( $is_gecko ) $classes[] = 'gecko';
	        elseif( $is_opera ) $classes[] = 'opera';
	        elseif( $is_NS4 ) $classes[] = 'ns4';
	        elseif( $is_safari ) $classes[] = 'safari';
	        elseif( $is_chrome ) $classes[] = 'chrome';
	        elseif( $is_IE ) {
	            $classes[] = 'ie';
	            if( preg_match( '/MSIE ( [0-11]+ )( [a-zA-Z0-9.]+ )/', $_SERVER['HTTP_USER_AGENT'], $browser_version ) )
	            $classes[] = 'ie' . $browser_version[1];
	        } else $classes[] = 'unknown';
	        if( $is_iphone ) $classes[] = 'iphone';

	        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
	                 $classes[] = 'osx';
	        } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
	                 $classes[] = 'linux';
	        } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
	                 $classes[] = 'windows';
	        }

	        return $classes;
	    }
	    add_filter( 'body_class','add_body_class' );
	}

	// function lang_class($output) {
	//     return $output . ' class="no-js '.LANG.'"';
	// }
	// add_filter('language_attributes', 'lang_class');

	remove_action('wp_head', 'wp_generator');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails' );

/******************************************************************************************
							A D D    I M A G E    S I Z E S
******************************************************************************************/

add_image_size( 'project_image', 465, 360, true );
add_image_size( 'gallery_small_cube', 115, 80, true );


/******************************************************************************************
							S T Y L E S    R E G I S T E R
******************************************************************************************/

	function enqueue_my_styles() {
	    $magnific           = THEME_DIR . '/css/magnific-popup.css';
	    $rtlres         	= THEME_DIR . '/css/rtl-responsive.css';

	    $fonts 				= THEME_DIR . '/fonts/stylesheet.css';

	    $font_awesome       = THEME_DIR . '/css/font-awesome.min.css';
	    $swiper         	= THEME_DIR . '/css/swiper.min.css';
	    $mainStyle          = THEME_DIR . '/css/style.css';
	    $rtl 				= THEME_DIR . '/css/rtl.css';
	    $responsive 		= THEME_DIR . '/css/responsive.css';
	    $rtlresponsive 		= THEME_DIR . '/css/rtl-responsive.css';

	    $fancyboxcss 		= THEME_DIR . '/js/fancybox/jquery.fancybox.css';
	    $calendar 			= THEME_DIR . '/css/fullcalendar.min.css';
	    $calendar_print 	= THEME_DIR . '/css/fullcalendar.print.css';
		$joined_style       = THEME_DIR . '/style.css';
		$accessiblity_style = THEME_DIR . '/css/accessibility.css';

	    wp_enqueue_style( 'swiper', $swiper, array(), 'v1', 'all' );
	    wp_enqueue_style( 'fancyboxcss', $fancyboxcss, array(), 'v1', 'all' );

	   	wp_enqueue_style( 'calendar', $calendar, array(), 'v1', 'all' );
	    wp_enqueue_style( 'calendar_print', $calendar_print, array(), 'v1', 'all' );



		if( is_rtl() ) {
			wp_enqueue_style( 'rtl', $rtl, array(), 'v1', 'all' );
			wp_enqueue_style( 'rtlresponsive', $rtlresponsive, array(), 'v1', 'all' );
		} else {
			wp_enqueue_style( 'mainStyle', $mainStyle, array(), 'v1', 'all' );
			wp_enqueue_style( 'responsive', $responsive, array(), 'v1', 'all' );
		}

		wp_enqueue_style( 'style', $joined_style, array(), 'v1', 'all' );
		wp_enqueue_style( 'accessiblity', $accessiblity_style, array(), NULL, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );



/******************************************************************************************
						S C R I P T S 	 R E G I S T E R
******************************************************************************************/

	function register_my_jscripts() {

   	   wp_register_script( 'googleapi', 'https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyA21ZwPY6xqz4gvkdil2wGGBRWSGEayq78', array( 'jquery' ), NULL, false );wp_enqueue_script( 'googleapi' );


	   wp_register_script( 'niceScroll', THEME_DIR .'/js/jquery.nicescroll.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'niceScroll' );
   	   wp_register_script( 'fancyboxm', THEME_DIR .'/js/fancybox/jquery.mousewheel-3.0.6.pack.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'fancyboxm' );
   	   wp_register_script( 'fancybox', THEME_DIR .'/js/fancybox/jquery.fancybox.pack.js?v=2.1.5', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'fancybox' );
   	   wp_register_script( 'moment', THEME_DIR .'/js/moment.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'moment' );
   	   wp_register_script( 'calendar', THEME_DIR .'/js/fullcalendar.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'calendar' );
   	   if(is_rtl()){
   	   		wp_register_script( 'hecalendar', THEME_DIR .'/js/he.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'hecalendar' );
   	   }
	   wp_register_script( 'swiper', THEME_DIR .'/js/swiper.min.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'swiper' );

		wp_register_script("addthis","//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57e21979bdebcfe3",array('jquery'),NULL,true);
		wp_enqueue_script( 'addthis' );

	   wp_register_script( 'functions', THEME_DIR .'/js/functions.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'functions' );
	   wp_register_script( 'accessibility', THEME_DIR .'/js/accessibility.js', array( 'jquery' ), NULL, true ); wp_enqueue_script( 'accessibility' );

	   if( is_archive('event') )
	   		wp_localize_script( 'functions', 'allPostsObject', get_all_events() );

	}
	add_action('wp_enqueue_scripts', 'register_my_jscripts');


/******************************************************************************************
						N A V I G A T I O N S  -  M E N U
******************************************************************************************/

// Menu
function register_my_menu() {
    register_nav_menus(array(
    	'top_menu' 	  		=>  'Top Menu',
    	'council_first_menu'=>  'Council First Menu',
    	'council_sec_menu' 	=>  'Council Second Menu',
    	'council_third_menu'=>  'Council Third Menu',
    	'contact_menu_one'	=>  'Contact First Menu',
    	'contact_menu_two'	=>  'Contact Second Menu',
    	'enjoy_menu'		=>  'Enjoy Kasrin Menu',
    	'news_menu'			=>  'News Menu',
    	'initate_menu' 	  	=>  'Initate Menu',
    	'footer_menu_one'   =>  'Footer Menu 1',
		'footer_menu_tow'   =>  'Footer Menu 2',
		'footer_menu_three' =>  'Footer Menu 3',
		'footer_menu_four'  =>  'Footer Menu 4',
		'footer_menu_five'  =>  'Footer Menu 5'
    ));
}
add_action( 'init', 'register_my_menu' );



// 2. dropdown admin columns - functions.php

add_action( 'manage_dropdown_posts_custom_column', 'my_manage_dropdown_columns', 10, 2 );

function my_manage_dropdown_columns( $column, $post_id ) {
    global $post;
    printf( __( '<span class="shortcode"><input type="text" value="[submenu id=&quot;%d&quot; title=&quot;%s&quot;]" class="large-text code" readonly="readonly"></span>' ), $post_id, get_the_title()  );
}

add_filter( 'manage_edit-dropdown_columns', 'my_edit_dropdown_columns' ) ;

function my_edit_dropdown_columns( $columns ) {

    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'כותרת' ),
        'shortcode_id' => __( 'שורטקוד' ),
        'date' => __( 'Date' )
    );



    return $columns;
}




/******************************************************************************************
								S  I  D  E  B  A  R  S
******************************************************************************************/
	// register_sidebar(array(
	//     'name' => __('Home Sidebar', 'sagive'),
	//     'id' => 'home-sidebar',
	//     'description' => __('Main Home Sidebar', 'sagive')
	// ));






/******************************************************************************************
								F 	 U 	 N 	C   T 	I 	O 	N 	S
******************************************************************************************/

	// Language
	function icl_post_languages(){
	$languages = icl_get_languages('skip_missing=0');
	  if(1 < count($languages)){
		  	$langs[] = '<div class="language-but">
					<button type="button" class="info-lnk">
						<img class="icon" src="' . THEME_DIR .'/images/arrow1.png" width="17" height="16" alt="" />
						<span class="txt">'  . ICL_LANGUAGE_NAME .'</span>
						<strong class="clear"></strong>
					</button>';
		    foreach($languages as $l){
		    	//print_r($l);
		    	$class= '';
		    	if($l['active'] == 1) {
		    		$class = 'active';
		    	}
		      $langs[] = '<a href="'.$l['url'].'" class="langsBtns">'.  ucfirst($l['native_name']) .'</a>';
		    }


		    $langs[] = '</div>';
	    echo join('', $langs);
	  }
	}

	// Toutube
	function getYoutubeThumbUrl($id , $size="0") {
	    $data = "http://img.youtube.com/vi/".$id."/".$size.".jpg";
	    return $data;
	}

	// Background color
	function hex2rgba($color, $opacity = false) {

		$default = 'rgb(0,0,0)';

		//Return default if no color provided
		if(empty($color))
	          return $default;

		//Sanitize $color if "#" is provided
	        if ($color[0] == '#' ) {
	        	$color = substr( $color, 1 );
	        }

	        //Check if color has 6 or 3 characters and get values
	        if (strlen($color) == 6) {
	                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	        } elseif ( strlen( $color ) == 3 ) {
	                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	        } else {
	                return $default;
	        }

	        //Convert hexadec to rgb
	        $rgb =  array_map('hexdec', $hex);

	        //Check if opacity is set(rgba or rgb)
	        if($opacity){
	        	if(abs($opacity) > 1)
	        		$opacity = 1.0;
	        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
	        } else {
	        	$output = 'rgb('.implode(",",$rgb).')';
	        }

	        //Return rgb(a) color string
	        return $output;
	}

	//D Y N A M I C    E X C E R P T
	function dynamic_excerpt($length) { // Variable excerpt length. Length is set in characters
	    global $post;
	    $text = $post->post_excerpt;
	    if ( '' == $text ) {
	    $text = get_the_content('');
	    $text = apply_filters('the_content', $text);
	    $text = str_replace(']]>', ']]>', $text);
	    }
	    $text = strip_shortcodes($text); // optional, recommended
	    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags
	    $text = mb_substr($text,0,$length).'';
	    echo $text;
	}



	// Pagination
	function my_pagination($query = ""){
	    global $wp_query;
		if(!$query){
			$query = $wp_query;
		}
	    $big = 999999999;
	    echo paginate_links(array(
	        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
	        'format' => '<a class="btns">?paged=%#%</a>',
	        'current' => max(1, get_query_var('paged')),
	        'total' => $query->max_num_pages,
	        'prev_text'          => __('<a href="#" class="btns prev"></a>'),
			'next_text'          => __('<a href="#" class="btns next"></a>')
	    ));
	}
	//add_action('init', 'my_pagination'); // Add our Pagination



	// function posts_per_councilmember($query) {
	//     if(is_page_template('tpl-councilMembers.php') ) {
	//         $query->set('posts_per_page', 4);
	//     }
	//     return;
	// }

	// add_action('pre_get_posts', 'posts_per_councilmember');







	function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
			return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');




function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyA21ZwPY6xqz4gvkdil2wGGBRWSGEayq78');
}

add_action('acf/init', 'my_acf_init');


add_filter( 'wp_mail_content_type', 'set_content_type' );

function set_content_type( $content_type ) {
	return 'text/html';
}



function get_all_events(){
	global $post;
		$pargs = array(
			'post_type' => 'event',
			'posts_per_page' => -1
		);
		$pquery = new WP_Query($pargs);
		$allPostsObject = array();
		$index = 0;
		while($pquery->have_posts()){ $pquery->the_post();

			$allPostsObject[$index]['title'] = get_the_title();
			if( get_field('start_date' ,$post->ID) )
				$allPostsObject[$index]['start'] = get_field('start_date' ,$post->ID);
			if( get_field('end_date' ,$post->ID) )
				$allPostsObject[$index]['end'] = get_field('end_date' ,$post->ID);
			$allPostsObject[$index]['url'] = get_the_permalink();

			$index ++;
		}
		wp_reset_query();
		return $allPostsObject;
}


function get_translated_ids($post_id,$post_type){
	$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');
	$ids = array();
	foreach($langs as $lang){
		$id = icl_object_id($post_id,$post_type,false,$lang['language_code']);
		$ids[] = $id;
	}
	return $ids;
}

add_action("wpcf7_before_send_mail", "fetch_contact_form_data");
function fetch_contact_form_data($cf7) {

	$wpcf = WPCF7_ContactForm::get_current();

    //send mail to council member from contact page
	$memberid = isset($_GET["memberid"]) ? sanitize_text_field($_GET["memberid"]) : ' ';

	// send mail to any email choose from options. set appointment pop up
	$recipient_email = get_field('recipient_email', 'option');


    $submission = WPCF7_Submission::get_instance();

    $mail         = $cf7->prop('mail');

    $post_data	= $submission->get_posted_data();

    if(isset($post_data['hidden-createappointment'])){
	    $posted_name 	=   $post_data['appo_fullname'];
	    $posted_email 	= 	$post_data['appo_email'];
	    $posted_phone 	= 	$post_data['appo_phone'];
	    $posted_address = 	$post_data['appo_address'];
	    $posted_hours 	= 	$post_data['hours'];
	    $posted_day 	= 	$post_data['day'];

	    $posted_day 	= get_day_name($posted_day);
	    $next_day_date  = strtotime('next ' . $posted_day);
	    $next_day_date  = date('Ymd' ,$next_day_date);

	    $manager_id		= 	trim($post_data['manager_id']);
	    $manager_ids 	= 	get_translated_ids($manager_id,'officials');

    	foreach($manager_ids as $id) {
    		$rep = get_field('scheduled_meetings', $id );
	    	$rep[] = array(
	    		'scheduled_meetings_name' 	 => $posted_name,
	    		'scheduled_meetings_email' 	 => $posted_email,
	    		'scheduled_meetings_phone' 	 => $posted_phone,
	    		'scheduled_meetings_address' => $posted_address,
	    		'scheduled_meetings_date' 	 => $next_day_date,
	    		'scheduled_meetings_time' 	 => $posted_hours
	    		);
	    	update_field('scheduled_meetings' , $rep , $id );
    	}
    }

    if($submission && $memberid){
    	$mail['recipient'] = get_field('cmember_email',$memberid);
    }

    if($submission && $recipient_email){
    	$mail['recipient'] = $recipient_email;
    }
}


function is_take_appointment($manager_id,$from_hour,$to_hour,$linux_date){
	$appointments = get_field("scheduled_meetings",$manager_id);
	foreach($appointments as $appointment){
		$appointment_linux_date = strtotime($appointment["scheduled_meetings_date"]);
		$time_range = $appointment["scheduled_meetings_time"];
		$time_range_checked = "{$from_hour}-{$to_hour}";
		if($linux_date == $appointment_linux_date && $time_range == $time_range_checked){
			return true;
		}
	}
	return false;
}

function get_day_name($day_of_the_week_number){
	$days = array(
		1 => _("Sunday"),
		2 => _("Monday"),
		3 => _("Tuesday"),
		4 => _("Wednesday"),
		5 => _("Thursday"),
		6 => _("Friday"),
	);

	return $days[$day_of_the_week_number];
}
