<?php 

add_action( 'wp_enqueue_scripts', 'smartmonkey_load_scripts' );
function smartmonkey_load_scripts()
{
	// Stylesheets
	// wp_enqueue_style( 'dashicons');
    wp_enqueue_style('lato', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900',false,false,'all');
    wp_enqueue_style( 'main', get_template_directory_uri().'/style/main.css', false, false, 'all' );
    wp_enqueue_style( 'dynamic', get_template_directory_uri().'/style/dynamic/main.php', false, false, 'all' );

	// Scripts
    wp_enqueue_script('jq','//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),'1',true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array('jq'), '1.0.0', true );
}


add_action( 'admin_enqueue_scripts', 'smamo_admin_script' );
function smamo_admin_script(){
    wp_enqueue_script( 'smamo_admin_script', get_template_directory_uri() . '/js/admin/main.js');
    wp_enqueue_style( 'smamo_admin_style', get_template_directory_uri().'/style/admin/main.css', false, false, 'all' );
    
}



// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );


// Tilføj lato til backend editor
function my_theme_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    add_editor_style( $font_url );
}

function smamo_add_editor_stylesheet(){
    add_editor_style(get_template_directory_uri().'/style/admin/main.css');

}

add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
add_action('admin_init','smamo_add_editor_stylesheet');
