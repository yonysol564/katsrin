jQuery(document).ready(function(){

	jQuery('.openPopup').click(function() {

		// var hours = [];
		// var hour;
		// var wrap_hours = jQuery(this).parent('.schedule-item').find('.wrap_hours');
		// //console.log(wrap_hours);
		
  //       // jQuery.each(wrap_hours, function(key, value) {
  //       //     hour = jQuery(this).find('.head_hours').data('hours');
  //       //     console.log('ssdds');
  //       // });

  //       jQuery(wrap_hours).each(function(index) {
		//   hours.push(jQuery( this ).find('.head_hours').text());
		// });
		// console.log(hours);

		


		
	jQuery(".wpcf7-select option").remove();

	    var day 		= jQuery(this).data('day');
		var dayname 	= jQuery(this).data('dayname');
		var linux_date  = jQuery(this).data('linuxdate');
		var check_hours = jQuery(this).data('hours');
		var manager 	= jQuery(this).data('manager');

		jQuery("#dayname").val(dayname);
		//console.log(dayname);
		
		jQuery('.formPOP form').append('<input type="hidden" name="manager_id" value="'+manager+'" />');
		jQuery('.formPOP form').append('<input type="hidden" name="linux_date" value="'+linux_date+'" />');
		jQuery('.formPOP form').append('<input type="hidden" name="check_hours" value="'+check_hours+'" />');
		jQuery('.formPOP form').append('<input type="hidden" name="day" value="'+day+'" />');

		var manager_id = jQuery(this).parents('.schedule-section').data('managerid');

	    var data     = {
	        type: "POST",
	        action: "get_all_hours_by_day",
	        day : day,
	        manager_id: manager_id,
	        data_type : "json" 
	    };

	   if (day) {
	         jQuery.post( ajaxurl, data, function(response) {
	   
	            hours = jQuery.parseJSON(response);
	           // console.log(hours);
                if(hours){
                  jQuery.each(hours, function(key, value) {
                        var option = '<option value='+value+'>'+value+'</option>';
                        jQuery('.wpcf7-select').append(option);
                    });
                }	   

	        });
	   }
	});

 });




