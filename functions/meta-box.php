<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'meta-box/cittaslow.php'; 
    require 'meta-box/hero.php'; 
    require 'meta-box/users.php'; 
    require 'meta-box/klippekort.php'; 
    require 'meta-box/case.php'; 
    require 'meta-box/abonnement.php'; 


return $mb;
}
?>