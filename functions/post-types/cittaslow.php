<?php 

add_action( 'init', 'smamo_add_cittaslow' );

function smamo_add_cittaslow() {
	register_post_type( 'cittaslow', array(
		
        'menu_icon' 		 => 'dashicons-images-alt',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cittaslow' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Cittaslow', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'cittaslow', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Cittaslow', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Cittaslow', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'cittaslow', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny cittaslow', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se cittaslow', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find cittaslow', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny post.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}
