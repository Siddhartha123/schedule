<?php 
session_start();
    $data=array("client_id"=> "GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg","client_secret"=> "WtQKZ6MUjSafU7O0It9h8vQb6lUJ_JPJqYmpvmTxicFWKRfLjfd6dcN5NU76fhAv-cX-7N3etuvzK89bFc5P0A","grant_type"=> "authorization_code","code"=> $_GET['code'],"redirect_uri"=> "http://tech-stuff.me/schedule/beta/auth.php");
    $data_string = json_encode($data);  
    $ch = curl_init('https://api.cronofy.com/oauth/token');                                            
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                         
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                         
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                             
    'Content-Type: application/json',                                                                   
    'Content-Length: ' . strlen($data_string))                                                           
);                                                                                                         
$result = curl_exec($ch);
$data=json_decode($result,true);
$d=array("access_token"=>$data["access_token"]);
$ch = curl_init('http://tech-stuff.me/schedule/beta/calendar.php');                                            
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                         
curl_setopt($ch, CURLOPT_POSTFIELDS, $d);                                                    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                         
                                                                                                        
$result = curl_exec($ch);
$result=json_decode($result,true);
print_r($result);
$_SESSION["access_token"]=$d["access_token"];
$_SESSION['calendar']=$result["calendars"];
header("Location:./schedule.php");
        ?>