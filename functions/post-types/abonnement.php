<?php 


add_action( 'init', 'smamo_add_abonnement' );

function smamo_add_abonnement() {
	register_post_type( 'abonnement', array(
		
        'menu_icon' 		 => 'dashicons-tickets-alt',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'abonnement' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title','thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Abonnementer', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Abonnement', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Abonnementer', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Abonnementer', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'abonnement', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny abonnement', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se abonnement', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find abonnement', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt abonnement.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}
