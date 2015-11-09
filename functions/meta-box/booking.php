<?php 

$mb[] = array(
    'id' => 'booking_info',
    'title' => __( 'Bookinginfo', 'rwmb' ),
    'pages' => array('booking'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "booking_name",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "booking_email",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Telefonnummer', 'rwmb' ),
            'id'    => "booking_phone",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Besked', 'rwmb' ),
            'id'    => "booking_message",
            'type' => 'textarea',
        ),
        
        array(
            'name'  => __( 'Opgave', 'rwmb' ),
            'id'    => "booking_task",
            'type' => 'textarea',
        ),
        
        array(
            'name'  => __( 'Budget', 'rwmb' ),
            'id'    => "booking_budget",
            'type' => 'text',
        ),
    ),
);