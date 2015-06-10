<?php 

add_action( 'init', 'smamo_add_kunde' );

function smamo_add_kunde() {
	register_post_type( 'kunde', array(
		
        'menu_icon' 		 => 'dashicons-heart',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kunde' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail'),
        'labels'             => array(
            
            'name'               => _x( 'Kunder', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kunde', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kunder', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kunder', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'kunde', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny kunde', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se kunde', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find kunde', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny kunde.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>