<?php

$mb[] = array(
    'id' => 'attach_client',
    'title' => __( 'Kunde', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj kunde', 'rwmb' ),
            'id'    => "attach_client",
            'type' => 'post',
            'post_type' => 'kunde',
            
            ),
    ),
);
