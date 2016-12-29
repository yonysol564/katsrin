<?php
function enqueue_ajax(){
	wp_enqueue_script( 'my-ajax-request', THEME_DIR . '/admin/ajax.js', array( 'jquery' ) );
	wp_localize_script( 'my-ajax-request', 'ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	wp_localize_script( 'my-ajax-request', 'ajaxurl', admin_url( 'admin-ajax.php' ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_ajax' );

add_action( 'wp_ajax_get_all_hours_by_day', 'get_all_hours_by_day' );
add_action( 'wp_ajax_nopriv_get_all_hours_by_day', 'get_all_hours_by_day' );

function get_all_hours_by_day() {
	$day 		= isset($_POST['day']) ? sanitize_text_field($_POST['day']) : '';
	$day_name   = get_day_name($day);

	$manager_id = isset($_POST['manager_id']) ? sanitize_text_field($_POST['manager_id']) : '';
	$hours 		= array();
      while ( have_rows('manager_schedule' ,$manager_id) ) : the_row(); 
 
       	$schedule_day 	= get_sub_field('manager_day');
       	$next_day_date  = strtotime('next ' . $schedule_day);

       	if($schedule_day == $day_name){
			 if( have_rows('manager_hours' ,$manager_id) ){     
	            while ( have_rows('manager_hours' ,$manager_id) ) : the_row(); 
					$from_hour 		= get_sub_field('manager_from_hour');
					$until_hour 	= get_sub_field('manager_until_hour');
		            $taken_appo 	= is_take_appointment($manager_id,$from_hour,$until_hour,$next_day_date);

		            if(!$taken_appo){	  
		             	array_push($hours, $from_hour . '-' . $until_hour);      		          	
		            }

		            
	        	endwhile; 
	        }  
		};  
      endwhile;  
	echo json_encode($hours);
	die();
}

