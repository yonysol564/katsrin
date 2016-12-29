jQuery(window).load(function(){

	jQuery('body').addClass('pageLoaded');
	//council members - כניסת אלמנטים
	var membersTime = 0;
	jQuery('.council-items').each(function(){
		var self = jQuery(this);
		setTimeout(function(){
			self.addClass('active');
		},membersTime);
		membersTime += 200;
	});
	//jQuery(".council_sidebar").find('ul li.current-menu-item').parents('.haveSons').find("a button.openSideMenuSons ").click();
	jQuery(".council_sidebar").find('ul li.current-menu-item').parents('.haveSons').addClass('active');
});


jQuery(document).ready(function($) {
	//Calendar_of_events.html - Calendar
	var today = new Date();
	var dd    = today.getDate();
	var mm    = today.getMonth()+1; //January is 0!
	var yyyy  = today.getFullYear();

	jQuery('#calendar').length && (function(){
		jQuery('#calendar').fullCalendar({
			defaultDate: yyyy+'-'+mm+'-'+dd,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: allPostsObject,
			eventClick: function(calEvent, jsEvent, view) {
			}
		});
	}());
	//contact_council_units.html - Table scroll
	jQuery(window).load(function(){
		jQuery(".scrollME").each(function(){
			var scrollMEinner = jQuery('.scrollMEinner',this);
			jQuery(this).niceScroll(scrollMEinner,{
				autohidemode		: false,		//מעלים את הסקרולר
				cursorcolor			: '#1999E6',	//צבע רקע
				cursorwidth			: 6,			//רוחב סקרולר
				cursorborder		: 0,			//מסגרת
				cursorborderradius	: 5				//פינות מעוגלות
			});
		});
	});
	// MULTI swiper


	jQuery('.swiper-container').length && (function(){
		var swiper = [];
		jQuery('.swiper-container').each(function(index){
			var self			= jQuery(this);
			var itemNum			= parseInt(self.attr('data-items'));
			var itemArrows		= self.attr('data-arrows') || false;
			var itemPagination	= self.attr('data-pagination') || false;
			var breakpoints_767	= parseInt(self.attr('data-breakpoints-767'));
			var breakpoints_599	= parseInt(self.attr('data-breakpoints-599'));
			var breakpoints_479	= parseInt(self.attr('data-breakpoints-479'));
			var centeredSlides	= self.attr('data-center-slides') || false;
			var breakpoints = {};
			if(breakpoints_767){
				breakpoints['767'] = {
					slidesPerView	: breakpoints_767,
					centeredSlides	: false,
					loop			: false
				};
			}
			if(breakpoints_599){
				breakpoints['599'] = {
								slidesPerView 	: breakpoints_599,
								centeredSlides	: centeredSlides,
								loop			: centeredSlides
							};
			}
			if(breakpoints_479){
				breakpoints['479'] = {
								slidesPerView 	: breakpoints_479,
								centeredSlides	: centeredSlides,
								loop			: centeredSlides
							};
			}
			swiper[index] = self.swiper({
				autoplay			: false,
				slidesPerView		: itemNum,
				calculateHeight		: true,
				updateOnImagesReady	: true,
				preventClicks		: false,
				grabCursor			: true,
				keyboardControl		: true,
				pagination			: itemPagination ? jQuery('.pagination',this) : null,
				paginationClickable	: true,
				nextButton			: itemArrows ? jQuery(this).parent().find('.prev') : null,
				prevButton			: itemArrows ? jQuery(this).parent().find('.next') : null,
				breakpoints			: breakpoints
			});
		});
	}());
	//fancybox
	jQuery('.fancybox').length && (function(){
		jQuery('.fancybox').fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic',
			padding		: 5,
			helpers: {
				overlay: {
				  locked: false
				}
			},
			afterClose: function(){
				jQuery(".topSearch_main_wrapper").attr("aria-hidden","true");
			}
		});
	}());
	//מובייל - תפריט ראשי
	jQuery('.menu_icon').click(function(){
		jQuery('html').toggleClass('mobileMenuIsOpen');
	});
	//מובייל - פתיחת קישורים בפוטר
	jQuery('.footer button.head').click(function(e){
		e.preventDefault();
		var self = jQuery(this);
		if(self.hasClass('active')){
			jQuery('.footer .head').removeClass('active');
		}else{
			jQuery('.footer .head').removeClass('active');
			self.addClass('active');
		}
		jQuery('.open33').not(self.siblings('ul')).slideUp().removeClass('open33');
		self.siblings('ul').addClass('open33').slideToggle();
	});
	//טבלה protocols דף
	jQuery('.protocols-head').click(function(e){
		e.preventDefault();
		var self = jQuery(this);
		if(self.hasClass('active')){
			jQuery('.protocols-head').removeClass('active');
		}else{
			jQuery('.protocols-head').removeClass('active');
			self.addClass('active');
		}
		jQuery('.open33').not(self.siblings('.protocols-con')).slideUp().removeClass('open33');
		self.siblings('.protocols-con').addClass('open33').slideToggle();
	});

	//תפריט צד - לחיצה על החץ פותחת את הבנים
	jQuery('.sidebar .openSideMenuSons').click(function(e){
		e.preventDefault();
		jQuery('.sidebar li.active').not(jQuery(this).closest('li')).find('ul').slideUp(function(){
			jQuery(this).parent().removeClass('active');
		});
		jQuery(this).closest('li').find('ul').slideToggle(function(){
			jQuery(this).parent().toggleClass('active');
		});
	});

	//department - פרטי התקשרות - אקורדיון
	jQuery('.department-acco .head_h6').click(function(e){
		e.preventDefault();
		var self = jQuery(this);
		if(self.parent().hasClass('active')){
			jQuery('.department-acco.active').removeClass('active');
		}else{
			jQuery('.department-acco.active').removeClass('active');
			self.parent().addClass('active');
		}
		jQuery('.open33').not(self.siblings('.tender-detailsin')).slideUp().removeClass('open33');
		self.siblings('.tender-detailsin').addClass('open33').slideToggle();
	});
	//פתיחת תפריט עליון בלחיצה על הצור קשר
	jQuery('.openTopContact').click(function(){
		jQuery('body').toggleClass('contactMenuIsOpen');
		if( jQuery(".topOpencontactMenu").attr("aria-hidden") == 'true' ){
			jQuery(".topOpencontactMenu").attr("aria-hidden","false");
		} else {
			jQuery(".topOpencontactMenu").attr("aria-hidden","true");
		}
	});

	jQuery('.megaMenu_sub_ulWrap').length && (function(){
		jQuery('.megaMenu_btn').each(function(i){
			var self = jQuery(this);
			self.click(function(e){
				jQuery('.megaMenu_btn.active').removeClass('active');
				self.addClass('active');
				jQuery('.megaMenu_sub_ulWrap').removeClass('active').eq(i).addClass('active');
				e.preventDefault();
			});
		}).first().click();
	}());


	jQuery('.header-info nav > ul > li').mouseenter(function(i){
		jQuery(this).find(".megaMenu").addClass("active");
		jQuery(this).find(".megaMenuTable div.megaMenu_sub_ulWrap").first().addClass("active");
		jQuery(this).find("ul.megaMenu_ul li").first().find("button").addClass("active");
	});


	//mobile - open sub menu
	jQuery('.mobileOpenMegaMenu_arrow').click(function(e){
		e.preventDefault();
		jQuery(this).toggleClass('active').closest('li').find('.megaMenu').slideToggle().toggleClass('active');
	});
	//top language btn
	jQuery('.info-lnk').click(function(){
		jQuery(this).parent().toggleClass('active');
		jQuery(".topSearch_main_wrapper").attr("aria-hidden","false");
	});

	//פופאפ קביעת לו"ז לפגישה
	//popup
	jQuery('body').on('click','.openPopup',function(e){
		e.preventDefault();
		jQuery('.formPOP').addClass('active');
		jQuery('.blackOpacityPOP').fadeIn();
	});

	//Close
	jQuery('body').on('click','.closePOP, .blackOpacityPOP',function(){
		jQuery('.formPOP').removeClass('active');
		jQuery('.blackOpacityPOP').fadeOut(function(){
			jQuery('.formPOP .insertAjaxHere').html('');
		});
	});

	jQuery('.sub-but').on('click',function(){
		jQuery('.wpcf7-file').click();
	});

	jQuery( ".wpcf7-file" ).change(function() {
	  	var filename = this.value;
	    var lastIndex = filename.lastIndexOf("\\");
	    if (lastIndex >= 0) {
	        filename = filename.substring(lastIndex + 1);
	    }
	    jQuery('.filename_text').val(filename);
	});


	jQuery('.wheelchair-icon').on('click',function(e){
		e.preventDefault();
		jQuery('.wrap_access').toggle();
		if( jQuery('.wrap_access').attr("aria-hidden") == 'true' ) {
			jQuery('.wrap_access').attr("aria-hidden","false");
		} else {
			jQuery('.wrap_access').attr("aria-hidden","true");
		}
	});

	jQuery('.close_access_btn').on('click',function(e){
		e.preventDefault();
		jQuery('.wrap_access').fadeOut(250);
		jQuery('.wrap_access').attr("aria-hidden","true");
	});

	jQuery('.btn_underline').on('click',function(e){
		e.preventDefault();
		jQuery('body').toggleClass('is_underline');
	});

	jQuery('.btn_bolder').on('click',function(e){
		e.preventDefault();
		jQuery('body').toggleClass('is_bolder');
	});


	jQuery('.btn_dark').on('click',function(e){
		e.preventDefault();
		jQuery('body').removeClass('is_brightness');
		jQuery('body').toggleClass('is_darkness');
	});


	jQuery('.btn_bright').on('click',function(e){
		e.preventDefault();
		jQuery('body').removeClass('is_darkness');
		jQuery('body').toggleClass('is_brightness');
	});

	jQuery('.fontfamily_btn').on('click',function(e){
		e.preventDefault();
		jQuery('body').toggleClass('is_readable');
	});

	jQuery(document).on("keyup", "input", function(){
	    jQuery(this).removeClass("wpcf7-not-valid");
	    jQuery(this).next("span").hide();
	    jQuery(this).parents(".wpcf7-form").find('.wpcf7-response-output').hide();

	});

});
