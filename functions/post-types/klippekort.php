<?php

add_action( 'init', 'smamo_add_klippekort' );

function smamo_add_klippekort() {
	register_post_type( 'kort', array(
		
        'menu_icon' 		 => 'dashicons-list-view',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kort' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Klippekort', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Klipperkort', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Klippekort', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Klippekort', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'klippekort', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny klippekort', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se klippekort', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find klippekort', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt klippekort.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>