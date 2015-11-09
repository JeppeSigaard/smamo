<?php 

add_action( 'init', 'smamo_add_booking' );

function smamo_add_booking() {
	register_post_type( 'booking', array(
		
        'menu_icon' 		 => 'dashicons-calendar-alt',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'booking' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Booking', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Booking', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Booking', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Booking', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'booking', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny booking', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se booking', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find booking', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny booking.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}