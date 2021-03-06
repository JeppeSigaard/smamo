<?php 

add_action( 'init', 'smamo_add_users' );

function smamo_add_users() {
	register_post_type( 'team', array(
		
        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 22,
		'supports'           => array( 'title','page-attributes'),
        'labels'             => array(
            
            'name'               => _x( 'Team', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Team', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Team', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'bruger', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny bruger', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se bruger', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find bruger', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny bruger.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}