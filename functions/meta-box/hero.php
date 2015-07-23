<?php 

$mb[] = array(
    'id' => 'layers',
    'title' => __( 'Parallax multilayer hero banner', 'rwmb' ),
    'pages' => array('hero'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __('Aktiver parallax','rwmb'),
            'id'    => 'plx_active',
            'type'  => 'checkbox',
            'std'   => '0',
        ),
        
        
        array(
            'name'  => __('Tekst','rwmb'),
            'id'    => 'plx_layer_text',
            'type'  => 'wysiwyg',
            'options' => array(
                'teeny'         => true,
                'media_buttons' => false,
            ),
        ),

        array(
            'name'  => __('Billeder','rwmb'),
            'id'    => 'plx_layer_img',
            'type'  => 'image_advanced',
        ),
    ),
);


$mb[] = array(
    'id' => 'weekday',
    'title' => __( 'Begrænsning vsining til en ugedag', 'rwmb' ),
    'pages' => array('hero'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Vis kun på en ugedag', 'rwmb' ),
            'id'    => "weekday_limit",
            'type' => 'select_advanced',
            'options'   => array(
                '0' => "mandag",
                '1' => "tirsdag",
                '2' => "onsdag",
                '3' => "torsdag",
                '4' => "fredag",
                '5' => "lørdag",
                '6' => "søndag",
            ),
            'placeholder'   => __('Vælg en dag','rwmb'),
            'std'   => '',
        ),
    ),
);