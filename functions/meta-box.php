<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){
    
    $smamo_user_list = array(
        //0 => 'ingen',
    );
    
    $smamo_all_users = get_users();
    
    foreach ($smamo_all_users as $user){
    
        $smamo_user_list[$user->ID] = __($user->display_name); 
        
    }
    

    require 'meta-box/cittaslow.php'; 
    require 'meta-box/hero.php'; 
    require 'meta-box/users.php'; 
    require 'meta-box/klippekort.php'; 
    require 'meta-box/case.php'; 
    require 'meta-box/abonnement.php'; 


return $mb;
}
