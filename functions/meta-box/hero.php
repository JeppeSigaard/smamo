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

?>