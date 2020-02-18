<?php 

function educulture_register_my_cpts_section() {


	$labels = [
		"name" => __( "Sliders", "educulture" ),
		"singular_name" => __( "Slider", "educulture" ),
        
	];

	$args = [
		"label" => __( "Sliders", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "sliders", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "slider", $args );

	

    
	$labels = [
		"name" => __( "Testimonials", "educulture" ),
		"singular_name" => __( "Testimonial", "educulture" ),
		"add_new" => __( "Add Testimonial", "educulture" ),
	];

	$args = [
		"label" => __( "Testimonials", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor","thumbnail"],
	];

	register_post_type( "testimonials", $args );	
    
    
   $labels = [
		"name" => __( "Partners", "educulture" ),
		"singular_name" => __( "Partner", "educulture" ),
		"add_new" => __( "Add Image", "educulture" ),
		"featured_image" => __( "Pertner Image", "educulture" ),
		"set_featured_image" => __( "Add Pertner Image", "educulture" ),
	];

	$args = [
		"label" => __( "Partners", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-image",
		"supports" => [ "title","thumbnail"],
	];

	register_post_type( "partners", $args );    
    
  $labels = [
		"name" => __( "FAQ", "educulture" ),
		"singular_name" => __( "FAQ", "educulture" ),
	];

	$args = [
		"label" => __( "FAQ", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-lightbulb",
		"supports" => [ "title", "editor"],
	];

	register_post_type( "faq", $args ); 
    
    
  
    

	
	
	$labels = [
		"name" => __( "Gallery", "educulture" ),
		"singular_name" => __( "Gallery", "educulture" ),
		"add_new" => __( "Add Image", "educulture" ),
		"set_featured_image" => __( "Add Gallery Image", "educulture" ),
        
	];

	$args = [
		"label" => __( "Gallery", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title","thumbnail"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "gallery", $args );	   

	
	
	$labels = [
		"name" => __( "Study Abroad", "educulture" ),
		"singular_name" => __( "Study Abroad", "educulture" ),
        
	];

	$args = [
		"label" => __( "Gallery", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "study-abroads", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title","thumbnail","editor"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "study-abroads", $args );	
	
	
	
	
	
	$labels = [
		"name" => __( "Reservation", "educulture" ),
		"singular_name" => __( "Reservation", "educulture" ),
		
        
	];

	$args = [
		"label" => __( "Reservation", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "reservation", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 10,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "reservation", $args );
	
	
		$labels = [
		"name" => __( "Video", "educulture" ),
		"singular_name" => __( "Video", "educulture" ),
		"add_new"=>__( "Add Video Item", "educulture" ),
		
        
	];

	$args = [
		"label" => __( "Video", "educulture" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "Video", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-format-video",
		"supports" => [ "title", "editor"],
        "taxonomies"=>array('category'),
	];

	register_post_type( "video", $args );
	
	
}
add_action( 'init', 'educulture_register_my_cpts_section' );









function educulture_single_template($file){

	global $post;
	if("study-abroads"== $post->post_type){
		$file_path= plugin_dir_path(__FILE__)."cpt-templates/single-study-abroads.php";
		$file=$file_path;
	}
	return $file;
}

add_filter('single_template','educulture_single_template');