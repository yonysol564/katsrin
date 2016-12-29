<?php 	

//--------------------------  E V E N T   P O S T   -----------------------------

	function event_post_type() {

		$labels = array(
			'name'                  => __( 'Events', 'kasrin' ),
			'singular_name'         => __( 'Event', 'kasrin' ),
			'menu_name'             => __( 'Events', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Events', 'kasrin' ),
			'add_new_item'          => __( 'New Event', 'kasrin' ),
			'add_new'               => __( 'New Event', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Event', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'event', $args );

	}
	add_action( 'init', 'event_post_type', 0 );



//--------------------------  C O U N C I L  M E M B E R   P O S T   -----------------------------

	function council_member_post_type() {

		$labels = array(
			'name'                  => __( 'Council Members', 'kasrin' ),
			'singular_name'         => __( 'Council Member', 'kasrin' ),
			'menu_name'             => __( 'Council Members', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Members', 'kasrin' ),
			'add_new_item'          => __( 'New Member', 'kasrin' ),
			'add_new'               => __( 'New Member', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Council Member', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'council_member', $args );

	}
	add_action( 'init', 'council_member_post_type', 0 );

	
//-------------------  O F F I C I A L S    P O S T   ----------------------

	function officials_post_type() {

		$labels = array(
			'name'                  => __( 'Officials','kasrin' ),
			'singular_name'         => __( 'Official', 'kasrin' ),
			'menu_name'             => __( 'Officials', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Officials', 'kasrin' ),
			'add_new_item'          => __( 'New Official', 'kasrin' ),
			'add_new'               => __( 'New Official', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Officials', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'officials', $args );

	}
	add_action( 'init', 'officials_post_type', 0 );

	//-------------------  P R O T O C O L    P O S T   ----------------------

	function protocol_post_type() {

		$labels = array(
			'name'                  => __( 'Protocols', 'kasrin' ),
			'singular_name'         => __( 'Protocol', 'kasrin' ),
			'menu_name'             => __( 'Protocols', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Protocols', 'kasrin' ),
			'add_new_item'          => __( 'New Protocol', 'kasrin' ),
			'add_new'               => __( 'New Protocol', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Officials', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array('protocol_cat'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'protocol', $args );

	}
	add_action( 'init', 'protocol_post_type', 0 );

	//-------------------  T E N D E R   P O S T   ----------------------

	function tender_post_type() {

		$labels = array(
			'name'                  => __( 'Tenders', 'kasrin' ),
			'singular_name'         => __( 'Tender', 'kasrin' ),
			'menu_name'             => __( 'Tenders', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Tenders', 'kasrin' ),
			'add_new_item'          => __( 'New Tender', 'kasrin' ),
			'add_new'               => __( 'New Tender', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Tenders', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'tender', $args );

	}
	add_action( 'init', 'tender_post_type', 0 );

	//-------------------  T E N D E R   P O S T   ----------------------

	function unit_post_type() {

		$labels = array(
			'name'                  => __( 'Units', 'kasrin' ),
			'singular_name'         => __( 'Unit', 'kasrin' ),
			'menu_name'             => __( 'Units', 'kasrin' ),
			'name_admin_bar'        => __( 'Post Type', 'kasrin' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kasrin' ),
			'all_items'             => __( 'All Units', 'kasrin' ),
			'add_new_item'          => __( 'New Unit', 'kasrin' ),
			'add_new'               => __( 'New Unit', 'kasrin' ),
			'new_item'              => __( 'New Item', 'kasrin' ),
			'edit_item'             => __( 'Edit Item', 'kasrin' ),
			'update_item'           => __( 'Update Item', 'kasrin' ),
			'view_item'             => __( 'View Item', 'kasrin' ),
			'search_items'          => __( 'Search Item', 'kasrin' ),
			'not_found'             => __( 'Not found', 'kasrin' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kasrin' ),
			'items_list'            => __( 'Items list', 'kasrin' ),
			'items_list_navigation' => __( 'Items list navigation', 'kasrin' ),
			'filter_items_list'     => __( 'Filter items list', 'kasrin' ),
		);
		$args = array(
			'label'                 => __( 'Units', 'kasrin' ),
			'description'           => __( 'Post Type Description', 'kasrin' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'unit', $args );

	}
	add_action( 'init', 'unit_post_type', 0 );

	//----------------------  N E W  T A X O N O M Y   ---------------------------
		function protocol_taxonomies() {

		$labels = array(
			'name'                       => __( 'Council meetings', 'kasrin' ),
			'singular_name'              => __( 'Council meetings', 'kasrin' ),
			'menu_name'                  => __( 'Council meetings', 'kasrin' ),
			'all_items'                  => __( 'Council meetings', 'kasrin' ),
			'parent_item'                => __( 'Parent Item', 'kasrin' ),
			'parent_item_colon'          => __( 'Parent Item:', 'kasrin' ),
			'new_item_name'              => __( 'New Item Name', 'kasrin' ),
			'add_new_item'               => __( 'Add New Item', 'kasrin' ),
			'edit_item'                  => __( 'Edit Item', 'kasrin' ),
			'update_item'                => __( 'Update Item', 'kasrin' ),
			'view_item'                  => __( 'View Item', 'kasrin' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'kasrin' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'kasrin' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'kasrin' ),
			'popular_items'              => __( 'Popular Items', 'kasrin' ),
			'search_items'               => __( 'Search Items', 'kasrin' ),
			'not_found'                  => __( 'Not Found', 'kasrin' ),
			'items_list'                 => __( 'Items list', 'kasrin' ),
			'items_list_navigation'      => __( 'Items list navigation', 'kasrin' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'protocol_cat', array( 'protocol' ), $args );

	}
	add_action( 'init', 'protocol_taxonomies', 0 );	


// --------- M E N U  -  S H O R T C O D E S --------

	function dropdown_post_type() {
	
		$labels = array(
			'name'                => __( 'תתי תפריטים', 'theme' ),
			'singular_name'       => __( 'תת תפריט', 'theme' ),
			'menu_name'           => __( 'תתי תפריטים', 'theme' ),
			'name_admin_bar'      => __( 'תתי תפריטים', 'theme' ),
			'parent_item_colon'   => __( 'פריט אב:', 'theme' ),
			'all_items'           => __( 'כל הפריטים', 'theme' ),
			'add_new_item'        => __( 'הוסף פריט חדש', 'theme' ),
			'add_new'             => __( 'הוסף חדש', 'theme' ),
			'new_item'            => __( 'פריט חדש', 'theme' ),
			'edit_item'           => __( 'ערוך פריט', 'theme' ),
			'update_item'         => __( 'עדכן פריט', 'theme' ),
			'view_item'           => __( 'צפה בפריט', 'theme' ),
			'search_items'        => __( 'חפש פריט', 'theme' ),
			'not_found'           => __( 'לא נמצא', 'theme' ),
			'not_found_in_trash'  => __( 'לא נמצא באשפה', 'theme' ),
		);
		$args = array(
			'label'               => __( 'תת תפריט', 'theme' ),
			'description'         => __( 'תת תפריט', 'theme' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'taxonomies'          => array(),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,		
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'menu_icon'			  => 'dashicons-welcome-widgets-menus',
			'capability_type'     => 'page',
		);
		register_post_type( 'dropdown', $args );
	
	}
	add_action( 'init', 'dropdown_post_type', 0 );




?>
