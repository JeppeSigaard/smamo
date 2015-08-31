<?php 

add_action( 'init', 'smamo_add_hero' );

function smamo_add_hero() {
	register_post_type( 'hero', array(
		
        'menu_icon' 		 => 'dashicons-video-alt3',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'hero' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','excerpt'),
        'labels'             => array(
            
            'name'               => _x( 'Hero banner(e)', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Banner', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Hero banner', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Hero', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'banner', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny banner', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se banner', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find banner', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt banner.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
    
}


add_action( 'init', 'register_hero_tax', 0 );

function register_hero_tax() {
	$labels = array(
		'name'              => _x( 'Grupper', 'taxonomy general name' ),
		'singular_name'     => _x( 'Gruppe', 'taxonomy singular name' ),
		'search_items'      => __( 'Søg i Grupper' ),
		'all_items'         => __( 'Alle Grupper' ),
		'parent_item'       => __( 'Forælder' ),
		'parent_item_colon' => __( 'Forælder:' ),
		'edit_item'         => __( 'Rediger gruppe' ),
		'update_item'       => __( 'Opdater gruppe' ),
		'add_new_item'      => __( 'Tilføj ny gruppe' ),
		'new_item_name'     => __( 'Nygruppe' ),
		'menu_name'         => __( 'Grupper' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'hero_gruppe' ),
	);

	register_taxonomy( 'hero_gruppe', array( 'hero' ), $args );

}

