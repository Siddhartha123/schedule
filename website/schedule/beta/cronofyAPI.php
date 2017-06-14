<?php
include './db_connect.php';

function getAccessToken($code){
    $data["code"]=$code;
    $data_string = json_encode($data);  
    $ch = curl_init('https://api.cronofy.com/oauth/token');                                            
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: '. strlen($data_string)));
    $result = curl_exec($ch);
    $data=json_decode($result,true);
    return $data["access_token"];
}

function getCalendar($access_token){
    $curl = curl_init('https://api.cronofy.com/v1/calendars');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer ".$access_token));
    $result = curl_exec($curl);
    return $result;
}

function createEvent($event,$desc,$start,$end){
    $data=array("event_id"=> substr($event,0,3).$start,"summary"=> $event,"description"=> $desc,"start"=> $start,"end"=> $end);
    $d=json_encode($data);
    $ch = curl_init('https://api.cronofy.com/v1/calendars/'.$_SESSION['cal_id'].'/events');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $d);                                                    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
    'Authorization: Bearer '.$_SESSION['access_token'],
    'Content-Type: application/json',                                                                   
    'Content-Length: ' . strlen($d))                                                           
    );
    curl_exec($ch);
    if(curl_getinfo($ch ,CURLINFO_HTTP_CODE)=="202")
        return true;
    return false;
}

function deleteAllEvents(){
    $data=array("calendar_ids"=>$_SESSION['cal_id']);
    $d=json_encode($data);
    $ch = curl_init('https://api.cronofy.com/v1/events');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $d);                                                    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
    'Authorization: Bearer '.$_SESSION['access_token'],
    'Content-Type: application/json',                                                                   
    'Content-Length: ' . strlen($d))                                                           
    );
    curl_exec($ch);
    if(curl_getinfo($ch ,CURLINFO_HTTP_CODE)=="202")
        return true;
    return false;
}

?>