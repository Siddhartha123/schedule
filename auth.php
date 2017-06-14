<?php 
$data=array("client_id"=> "GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg","client_secret"=> "WtQKZ6MUjSafU7O0It9h8vQb6lUJ_JPJqYmpvmTxicFWKRfLjfd6dcN5NU76fhAv-cX-7N3etuvzK89bFc5P0A","grant_type"=> "authorization_code","code"=> $_GET['code'],"redirect_uri"=> "https://teratogenic-ballast.000webhostapp.com/auth.php");
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
$ch = curl_init('https://teratogenic-ballast.000webhostapp.com/calendar.php');                                            
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                         
curl_setopt($ch, CURLOPT_POSTFIELDS, $d);                                                    
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                         
                                                                                                        
$result = curl_exec($ch);
$result=json_decode($result,true);
print_r($result);

/*
* for creating event:
url=api.cronofy.com/v1/calendars/{calendar_id}/events
POST api.cronofy.com/v1/calendars/cal_WRvt8TnUCDw7AAIQ_-tI5w9Kc30ru16vrKW1L@g/events HTTP/1.1
Authorization: Bearer hfGKtliItm646nHYJU_2BNXYI011szQh
Content-Type: application/json; charset=utf-8

{
  "event_id": "testing",
  "summary": "Board meeting",
  "description": "Discuss plans for the next quarter.",
  "start": "2017-06-05T15:30:00Z",
  "end": "2017-06-05T17:00:00Z"
}
*/

/*
Array ( [calendars] => Array ( [0] => Array ( [provider_name] => google [profile_id] => pro_WRvt8TnUCDw7AAIQ [profile_name] => iskumar789@gmail.com [calendar_id] => cal_WRvt8TnUCDw7AAIQ_-tI5w9Kc30ru16vrKW1L@g [calendar_name] => iskumar789@gmail.com [calendar_readonly] => [calendar_deleted] => [calendar_primary] => 1 [permission_level] => sandbox ) ) ) */
    
?>