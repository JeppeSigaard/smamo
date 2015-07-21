<?php
    

$mb[] = array(
    'id' => 'attach_client',
    'title' => __( 'Kunde', 'rwmb' ),
    'pages' => array('kort'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Tilkyttet kunde', 'rwmb' ),
            'id'    => "attach_client",
            'type' => 'select_advanced',
            'placeholder'   => 'vælg en eksisterende bruger',
            'options'   => $smamo_user_list,
            'desc'   => __('<br/><a href="'.get_bloginfo('url').'/wp-admin/user-new.php">Klik her for at tilføje en ny kunde</a>'),
            ),
    ),
);
    

$mb[] = array(
    'id' => 'tasks',
    'title' => __( 'Opgaver', 'rwmb' ),
    'pages' => array('kort'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'type'  => 'group',
            'id' => 'task',
            'clone' => 'true',
            'fields' => array(
                
                array(
                    'name' => 'Opgavetitel',
                    'id' => 'task_text',
                    'type' => 'text',
                ),
                
                array(
                    'name' => 'Beskrivelse',
                    'id' => 'task_desc',
                    'type' => 'textarea',
                ),
                
                array(
                    'name' => 'Registreret dato',
                    'id' => 'task_start',
                    'type' => 'datetime',
                ),
                
                array(
                    'name' => 'Udført dato',
                    'id' => 'task_end',
                    'type' => 'datetime',
                ),
                
                array(
                    'name' => 'Status',
                    'id' => 'task_status',
                    'type' => 'select_advanced',
                    'options' => array(
                        '0' => 'Inaktiv',
                        '1' => 'Afventer godkendelse',
                        '2' => 'I gang',
                        '3' => 'Udført',
                    ),
                    'std'   => '0',
                ),
                
                array(
                    'name' => 'Udføres af',
                    'id' => 'task_team',
                    'type' => 'post',
                    'post_type' => 'team',
                    'placeholder'   => __('Vælg kontaktperson'),
                ),
                
                array(
                    'name' => 'Timetal',
                    'id' => 'task_hours',
                    'type' => 'number',
                ),
                
            ),
        ),
    ),
);