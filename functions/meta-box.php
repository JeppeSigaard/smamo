<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'meta-box/cittaslow.php'; 
    require 'meta-box/hero.php'; 
    require 'meta-box/users.php'; 

return $mb;
}
?>