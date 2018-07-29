<?php
session_start();
include('db_connect.php');
if(empty($_SESSION['events']))
    {
        echo "{'error':'Invalid Request'}";
        die();
    }
$g_events=array();
$k=-1;
$num_weeks=ceil((strtotime($_SESSION['end_date'])-strtotime($_SESSION['start_date']))/(86400*7));
foreach($_SESSION['events'] as $week){
    $k++;
    foreach($week as $event){
        $e=array();
        $e['summary']=$event['event_name'];
        $date=date('Y-m-d', strtotime("next ".$day[$k],strtotime("-1 day",strtotime($_SESSION['start_date']))));
        $start=array("dateTime"=>$date.'T'.date('H:i:s',strtotime($event['start'])),"timeZone"=>'Asia/Kolkata');
        $end=array("dateTime"=>$date.'T'.date('H:i:s',strtotime($event['end'])),"timeZone"=>'Asia/Kolkata');
        $e['start']=$start;
        $e['end']=$end;
        $e['recurrence']=array('RRULE:FREQ=WEEKLY;COUNT='.$num_weeks);
        $s='{"useDefault": false,"overrides": [{"method": "popup","minutes": 15}]}';
        $reminder=json_decode($s,true);
        $e['reminders']=$reminder;
        array_push($g_events,$e);
    }
}
?>
      var CLIENT_ID = '<your client id goes here>';
      var API_KEY = '<your api key goes here>';
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];
      var SCOPES = "https://www.googleapis.com/auth/calendar";
      
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          handleAuthClick();
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          var events = <?php echo json_encode($g_events,JSON_UNESCAPED_SLASHES); ?>;
            var count=1;
          events.forEach(addEvent);
            function addEvent(item,index){
var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': item
});
request.execute(function(event) {
    if(event.kind=='calendar#event'){count++;}
});
        }
        } 
      }
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }