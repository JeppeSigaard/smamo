<?php 

$mb[] = array(
    'id' => 'abn_features',
    'title' => __( 'Features', 'rwmb' ),
    'pages' => array('abonnement'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj features', 'rwmb' ),
            'id'    => "abn_feature",
            'type' => 'text',
            'clone' => 'true',
        ),
    ),
);

$mb[] = array(
    'id' => 'abm_price',
    'title' => __( 'Pris', 'rwmb' ),
    'pages' => array('abonnement'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Pris i kr eks. moms', 'rwmb' ),
            'id'    => "abn_price",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Vilkår', 'rwmb' ),
            'id'    => "abn_type",
            'type' => 'select',
            'options'   => array(
                'total' => 'Totalpris',
                'month' => 'Månedligt',
                'year' => 'Årligt',
            ),
        ),
        
        array(
            'name'  => __( 'Løbetid', 'rwmb' ),
            'id'    => "abn_binding",
            'type' => 'select',
            'placeholder'   => 'Vælg løbetid',
            'options'   => array(
                'null' => 'ingen',
                '3 måneder' => '3 måneder',
                '6 måneder' => '6 måneder',
                '9 måneder' => '9 måneder',
                '12 måneder' => '12 måneder',
            ),
        ),
    ),
);
