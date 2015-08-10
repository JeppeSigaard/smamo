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
    $name = str_ireplace('goddag','',$name);
    $name = str_ireplace('god dag','',$name);
    $name = str_ireplace('samtrmonkey','',$name);
    $name = str_ireplace('smartmoney','',$name);
    $name = str_ireplace('monkeys','',$name);
    $name = str_ireplace('.','',$name);
    $name = str_ireplace('!','',$name);
    $name = str_ireplace(',','',$name);

    $msg = 'Hej '.$name.'. Vi laver moderne digital markedsføring til mellemstore og store virksomheder. Hvad laver du?';
    
    $response['action'] = 'make';
    $response['data'] = 'story-1';
    $response['content'] = $msg; 
    $response['name'] = $name;
    
    echo json_encode($response);
}

elseif($data === 'story-1'){
    
    $response['action'] = 'make';
    $response['data'] = 'story-2';
    $response['content'] = 'Super spændende! Kan du fortælle mere?';
    
    echo json_encode($response);
    
}

elseif($data === 'story-2'){
    
    $response['action'] = 'make';
    $response['data'] = 'info-1';
    $response['content'] = 'Interessant. Kunne du tænke dig at få tilsendt information om vi kan tilbyde din virksomhed?'; 
    $response['placeholder'] = 'Ja/Nej';
    $response['fieldType'] = 'y-n';
    
    echo json_encode($response);
    
}

elseif($data === 'info-1'){
    
    $is_yes = 'none';
    
    $sporg = array(
        0 => 'information',
        1 => 'hvad er det',
        2 => '?',
        3 => 'mere',
    );
    
    $nej = array(
        0 => 'nej',
        1 => 'nej tak',
        2 => 'næh',
        3 => 'nope',
        4 => 'ikke rigtig',
        5 => 'ellers tak',
        6 => 'helst ikke',
        7 => 'nødigt',
        8 => 'glemme',
    );
    
    $ja = array(
        0 => 'ja',
        1 => 'gerne',
        2 => 'tjo',
        4 => 'hvorfor ikke',
        5 => 'sure',
        6 => 'tjoh',
        7 => 'jo',
        8 => 'helt sikkert',
        9 => 'absolut',
        10 => 'ok',
        11 => 'o.k.',
        12 => 'sker der vel ikke',
    );
    
    foreach ($sporg as $sporg){
        if (strpos(strtolower($content), strtolower($sporg)) !== FALSE){
            $is_yes = 'sporg';
        }
    }
    
    foreach ($ja as $ja){
        if (strpos(strtolower($content), strtolower($ja)) !== FALSE){
            $is_yes = 'true';
        }
    }
    
    foreach ($nej as $nej){
        if (strpos(strtolower($content), strtolower($nej)) !== FALSE){
            $is_yes = 'false';
        }
    }
    
    if($is_yes === 'none'){
    
        $response['action'] = 'make';
        $response['data'] = 'info-1';
        $response['content'] = 'Bum, det fik jeg ikke fat i, jeg er bare en dum hjemmeside. Kunne du tænke dig at vide mere?'; 
        $response['placeholder'] = 'Ja/Nej';
        $response['fieldType'] = 'y-n';
    }
    
    elseif($is_yes === 'sporg'){
        
        $response['action'] = 'make';
        $response['data'] = 'info-1';
        $response['content'] = 'Jo altså, vi tror på at vi kan løfte enhver virksomhed med vores kompetencer. Som reglen vil vi allerhelst mødes med vores samarbejdspartnere, men til en start kan jeg bede én af mine kolleger give en uforpligtende vurdering af din virksomheds potentiale, eventuelle udfordringer og forslag til en forbedret markedsføringsstrategi. Kunne du tænke dig det?'; 
        $response['placeholder'] = 'Ja/Nej';
        $response['fieldType'] = 'y-n';
        
    }
    
    elseif($is_yes === 'true'){
        
        $response['action'] = 'make';
        $response['data'] = 'email';
        $response['content'] = 'Alletiders. Har du en email-adresse?'; 
        $response['placeholder'] = 'Skriv din email';
        $response['fieldType'] = 'email';
    
    }
    
    elseif($is_yes === 'false'){
        
        $response['action'] = 'make';
        $response['data'] = 'help-1';
        $response['content'] = 'Ok, er der noget andet vi kan hjælpe med?'; 
        $response['placeholder'] = '';
    
    }
    
    echo json_encode($response);
    
}

elseif($data === 'email'){
    
    function validate_email($email) {
        return (preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;
    }
    
    if (validate_email($content)){
        
        $response['action'] = 'make';
        $response['data'] = 'end';
        $response['content'] = 'Tak for det. Jeg sender vores samtale videre til en medarbejder, som kontakter dig inden længe.'; 
        
        
        
    }
    
    else{
        
        $response['action'] = 'make';
        $response['data'] = 'email';
        $response['content'] = 'Det fangede jeg ikke. Har du en email?'; 
        $response['placeholder'] = 'Skriv din email';
        $response['fieldType'] = 'email';
    
    }
    
    echo json_encode($response);
}

elseif($data === 'help-1'){
    
    $response['action'] = 'make';
    $response['data'] = 'help-2';
    $response['content'] = 'Alletiders. Vi arbejder hovedsageligt Business 2 Business. Repræsenterer du en virksomhed?'; 
    $response['placeholder'] = 'Skriv gerne et CVR-nummer';
    
    echo json_encode($response);
}

elseif($data === 'help-2'){
    
    $response['action'] = 'make';
    $response['data'] = 'email';
    $response['content'] = 'Super duper. Må jeg få en emailadresse, så vi kan vende tilbage til dig?'; 
    $response['placeholder'] = 'Skriv din emailadresse';
    
    echo json_encode($response);
}