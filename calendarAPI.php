<?php
    require "cronofy.php";
   /* 
    $redirect_uri = "http://yoursite.dev/oauth2/callback";

    $cronofy = new Cronofy(array("client_id" => "clientId"));
    
$params = array(
        'redirect_uri' => $redirect_uri,
        'scope' => array('read_account','list_calendars','read_events','create_event','delete_event')
    );
    
    $auth = $cronofy->getAuthorizationURL($params);
*/
    $cronofy=new Cronofy(array("access_token"=>"MEI1S9JhEQj7H7rcp_7NpwFiRgr2nv4a"));
    $calendars=$cronofy->list_calendars();

   
    print_r($calendars);
/*
    $data=array("provider_name" => "google", "profile_id" => "pro_WRvt8TnUCDw7AAIQ","profile_name" => "iskumar789@gmail.com","calendar_id" => "cal_WRvt8TnUCDw7AAIQ_-tI5w9Kc30ru16vrKW1L@g");

*/
$params = array(
	'calendar_id' => 'cal_WRvt8TnUCDw7AAIQ_-tI5w9Kc30ru16vrKW1L@g',
	'event_id' => 'event_test_12345679',
	'summary' => 'test event 2',
	'description' => 'some event data here',
	'start' => '2017-05-17T09:00:00Z',
	'end' => '2017-05-17T10:00:00Z'

);

$new_event = $cronofy->upsert_event($params);


?>