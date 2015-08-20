<?php 

$mb[] = array(
    'id' => 'section-control',
    'title' => __( 'Sektioner', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        array(
            'name'  => __( 'Sektonstype', 'rwmb' ),
            'id'    => "section_type",
            'type' => 'select',
            'placeholder' => __('Vælg sektionstype','smamo'),
            'options' => array(
                'main' => 'Hovedsektion',
                'description' => 'Beskrivelse',
                'slider' => 'Slideshow',
                'snippet' => 'Kodeblok',
                'single_image' => 'Enkelt billede',
            ),
        ),
    ),
);

/* Code block */
$mb[] = array(
    'id' => 'section_snippet',
    'title' => __( 'Kodeblok', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Link til iframe', 'rwmb' ),
            'id'    => "snippet_iframe",
            'type' => 'url',
            ),
        
        array(
            'name'  => __( 'Eller indsæt (html)', 'rwmb' ),
            'id'    => "snippet_raw",
            'type' => 'textarea',
            ),
    ),
);


/* Main page */
$mb[] = array(
    'id' => 'section_main',
    'title' => __( 'Hovedsektion', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Titel', 'rwmb' ),
            'id'    => "main_title",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Undertitel', 'rwmb' ),
            'id'    => "main_subtitle",
            'type' => 'text',
            ),
    ),
);

$mb[] = array(
    'id' => 'section_color',
    'title' => __( 'Indstil farve', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Kontrastfarve', 'rwmb' ),
            'id'    => "section_contrast",
            'type' => 'color',
            ),
    ),
);

/* Description */
$mb[] = array(
    'id' => 'section_description',
    'title' => __( 'Beskrivelse', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Smamo og kunden', 'rwmb' ),
            'id'    => "text_relation",
            'type' => 'textarea',
            ),
        
        array(
            'name'  => __( 'Opgaven', 'rwmb' ),
            'id'    => "text_task",
            'type' => 'textarea',
            ),
    ),
);




/* Slideshow */
$mb[] = array(
    'id' => 'section_slideshow',
    'title' => __( 'Slides', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj billeder', 'rwmb' ),
            'id'    => "slide_img",
            'type' => 'image_advanced',
            'max_file_uploads' => 6,
            ),
    ),
);



/* Single image */
$mb[] = array(
    'id' => 'section_image',
    'title' => __( 'Enkelt Billede', 'rwmb' ),
    'pages' => array('case'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Vælg billede', 'rwmb' ),
            'id'    => "single_image",
            'type' => 'image_advanced',
            'max_file_uploads' => 1,
            ),
    ),
);