<?php 

// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: application/json');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../../wp-load.php';


// Klargør response array til senere json_encode();
$response = array();

$data = wp_strip_all_tags($_POST['data']);
$content = wp_strip_all_tags($_POST['value']);

if($data === 'name'){
    
    $name = str_ireplace('jeg hedder','',$content);
    $name = str_ireplace('jeg er','',$name);
    $name = str_ireplace('Mit navn er','',$name);
    $name = str_ireplace('Hej','',$name);
    $name = str_ireplace('smartmonkey','',$name);
    $name = str_ireplace('.','',$name);
    $name = str_ireplace('!','',$name);
    $name = str_ireplace(',','',$name);

    $msg = 'Hej '.$name.'. Hvad kan vi hjælpe dig med?';
    
    $response['action'] = 'make';
    $response['data'] = 'help-1';
    $response['content'] = $msg; 
    
    echo json_encode($response);
}

elseif($data === 'help-1'){
    
    $response['action'] = 'make';
    $response['data'] = 'help-2';
    $response['content'] = 'Super spændende. Kan du fortælle mere?'; 
    
    echo json_encode($response);
    
}

elseif($data === 'help-2'){
    
    $response['action'] = 'make';
    $response['data'] = 'email';
    $response['content'] = 'Meget fint. Har du en email?'; 
    
    echo json_encode($response);
    
}

elseif($data === 'email'){
    
    $response['action'] = 'make';
    $response['data'] = 'else';
    $response['content'] = 'Alletiders. Vi kontakter dig på email inden længe. Er der andet vi kan gøre?'; 
    
    
    echo json_encode($response);
    
}


