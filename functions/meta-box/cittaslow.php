<?
   
$mb[] = array(
    'id' => 'info',
    'title' => __( 'info', 'rwmb' ),
    'pages' => array('cittaslow'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "name",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Virksomhed / Forening', 'rwmb' ),
            'id'    => "company",
            'type' => 'text',
            ),
        
         array(
            'name'  => __( 'Deltager i arr. nr', 'rwmb' ),
            'id'    => "participate",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'email', 'rwmb' ),
            'id'    => "email",
            'type' => 'email',
            ),
    ),
);
