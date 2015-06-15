<?php 

$mb[] = array(
    'id' => 'info',
    'title' => __( 'Information', 'rwmb' ),
    'pages' => array('team'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Fornavn', 'rwmb' ),
            'id'    => "fname",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Efternavn', 'rwmb' ),
            'id'    => "lname",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Titel', 'rwmb' ),
            'id'    => "titel",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Undertitler', 'rwmb' ),
            'id'    => "undertitel",
            'type' => 'text',
            'clone' => true,
            ),
        
        array(
            'type' => 'heading',
            'name' => __( 'Kontaktoplysninger', 'smamo' ),
            'id'   => 'fake_id', // Not used but needed for plugin
        ),
        
        array(
            'name'  => __( 'Telefonnummer', 'rwmb' ),
            'id'    => "telefon",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "email",
            'type' => 'text',
            ),
        
        
    ),
);


$mb[] = array(
    'id' => 'postimagediv',
    'title' => __( 'Billeder', 'rwmb' ),
    'pages' => array('team'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Profilbillede', 'rwmb' ),
            'id'    => "profile_img",
            'type' => 'image_advanced',
            'max_file_uploads' => 1,
            ),
        
        array(
				'type' => 'divider',
				'id'   => 'fake_divider_id', // Not used, but needed
			),
        
        array(
            'name'  => __( 'Galleri', 'rwmb' ),
            'id'    => "gallery",
            'type' => 'image_advanced',
            'max_file_uploads' => 4,
            ),
    ),
);

$mb[] = array(
    'id' => 'add_user',
    'title' => __( 'Bruger', 'rwmb' ),
    'pages' => array('team'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj login (ID)', 'rwmb' ),
            'id'    => "add_user",
            'type' => 'text',
            ),
    ),
);

?>