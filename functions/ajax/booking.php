<?php

add_action( 'wp_ajax_smamo_booking_form', 'submit_booking_form' );
add_action( 'wp_ajax_nopriv_smamo_booking_form', 'submit_booking_form' );

function submit_booking_form(){
    $response = array();
    
    $action_step = (isset($_POST['action_step'])) ? wp_strip_all_tags($_POST['action_step']) : false;
    $booking_id = (isset($_POST['booking_id'])) ? wp_strip_all_tags($_POST['booking_id']) : false;
    
    $email = (isset($_POST['email'])) ? wp_strip_all_tags($_POST['email']) : '';
    $name = (isset($_POST['name'])) ? wp_strip_all_tags($_POST['name']) : '';
    $phone = (isset($_POST['phone'])) ? wp_strip_all_tags($_POST['phone']) : '';
    $message = (isset($_POST['message'])) ? esc_textarea($_POST['message']) : '';
    
    $task  = (isset($_POST['task_0'])) ? wp_strip_all_tags($_POST['task_0']) . ', ' : '';
    $task .= (isset($_POST['task_1'])) ? wp_strip_all_tags($_POST['task_1']) . ', ' : '';
    $task .= (isset($_POST['task_2'])) ? wp_strip_all_tags($_POST['task_2']) . ', ' : '';
    $task .= (isset($_POST['task_3'])) ? wp_strip_all_tags($_POST['task_3']) . ', ' : '';
    $task .= (isset($_POST['task_4'])) ? wp_strip_all_tags($_POST['task_4']) . ', ' : '';
    $task .= (isset($_POST['task_5'])) ? wp_strip_all_tags($_POST['task_5']) . ', ' : '';
    $task .= (isset($_POST['task_6'])) ? wp_strip_all_tags($_POST['task_6']) . ', ' : '';
    
    $budget = (isset($_POST['budget'])) ? wp_strip_all_tags($_POST['budget']) : '';
    
    // Dø hvis inkongruens mellem step og id
    if ($action_step === 'modify' && $booking_id === false){
        $response['error'] = 'action step set to modify, but missing ID '.$booking_id;
        wp_die(json_encode($response));
    }
    
    
    // Opret en ny booking
    if($email && $action_step === 'create'){
        
        $booking_id = wp_insert_post(array(
        
            'post_type' => 'booking',
            'post_status' => 'publish',
            'post_title' => $email . ' ' . date('d. f Y h:i:s'),
        
        ),true);
        
        if(is_wp_error($booking_id)){
            
            $response['error'] = $booking_id->get_error_message();
            wp_die(json_encode($response));
        }
        
        else{
            
            $response['success'] = 'created new booking';
            
        }
    }
    
    elseif($action_step === 'modify' && $booking_id){
        $response['success'] = 'updated old booking';
    }
    
    update_post_meta($booking_id,'booking_name',$name);
    update_post_meta($booking_id,'booking_email',$email);
    update_post_meta($booking_id,'booking_phone',$phone);
    update_post_meta($booking_id,'booking_message',$message);
    update_post_meta($booking_id,'booking_task',$task);
    update_post_meta($booking_id,'booking_budget',$budget);
    
    $response['booking_id'] = $booking_id;
    
    wp_die(json_encode($response));
}