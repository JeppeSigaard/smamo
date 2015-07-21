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
