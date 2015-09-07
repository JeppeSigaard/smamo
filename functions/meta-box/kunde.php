<?php 

$mb[] = array(
    'id' => 'kundeinfo',
    'title' => __( 'Kundeinformation', 'rwmb' ),
    'pages' => array('kunde'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn (displaynavn)', 'rwmb' ),
            'id'    => "name",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Adresse', 'rwmb' ),
            'id'    => "address",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Postnummer', 'rwmb' ),
            'id'    => "post",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'By', 'rwmb' ),
            'id'    => "by",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'CVR', 'rwmb' ),
            'id'    => "cvr",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Telefon', 'rwmb' ),
            'id'    => "telefon",
            'type' => 'text',
        ),

        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "email",
            'type' => 'text',
        ),

        array(
            'name'  => __( 'Hjemmeside', 'rwmb' ),
            'id'    => "www",
            'type' => 'text',
        ),
    ),
);


$mb[] = array(
    'id' => 'section_tasks',
    'title' => __( 'Opgaver', 'rwmb' ),
    'pages' => array('kunde'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Opgave', 'rwmb' ),
            'id'    => "client_task",
            'type' => 'text',
            'clone' => 'true',
            ),
        
        array(
            'name'  => __( 'Opgaver i minus', 'rwmb' ),
            'id'    => "client_task_minus",
            'type' => 'text',
            'clone' => 'true',
            ),
    ),
);