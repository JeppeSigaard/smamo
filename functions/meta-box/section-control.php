<?php 

$type_array = array('case','post','page','team','kunde');

$mb[] = array(
    'id' => 'section-control',
    'title' => __( 'Sektioner', 'rwmb' ),
    'pages' => $type_array,
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
                'parent' => 'Dette er forældren',
                'main' => 'Headersektion',
                'description' => 'Beskrivelse',
                'slider' => 'Slideshow',
                'snippet' => 'Kodeblok',
                'single_image' => 'Enkelt billede',
                'case_grid' => 'Case grid',
                'person_gallery' => 'Persongalleri, medarbejdere',
                'plx_hero'  => 'Hero banner(e)',
                'article' => 'Centreret artikel',
            ),
        ),
    ),
);

/* Code block */
$mb[] = array(
    'id' => 'section_snippet',
    'title' => __( 'Kodeblok', 'rwmb' ),
    'pages' => $type_array,
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
    'pages' => $type_array,
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
    'pages' => $type_array,
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
    'pages' => $type_array,
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
    'pages' => $type_array,
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
    'pages' => $type_array,
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


/* case grid */
$mb[] = array(
    'id' => 'section_case_grid',
    'title' => __( 'Case grid', 'rwmb' ),
    'pages' => $type_array,
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Vis antal cases', 'rwmb' ),
            'id'    => "case_grid_num",
            'type' => 'number'
            ),
    ),
);


/* case grid */
$mb[] = array(
    'id' => 'section_plx_hero',
    'title' => __( 'Hero bannere', 'rwmb' ),
    'pages' => $type_array,
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Max antal bannere', 'rwmb' ),
            'id'    => "hero_banner_num",
            'type' => 'number',
            'std'   => 12,
            ),
        
        array(
            'name'  => __( 'Max antal bannere', 'rwmb' ),
            'id'    => "hero_banner_group",
            'type' => 'taxonomy_advanced',
            
            'options' => array(
                'taxonomy' => 'hero_gruppe',
                'type'  => 'list',
            ),
        ),
    ),
);