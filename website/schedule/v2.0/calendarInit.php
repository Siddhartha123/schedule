<?php
session_start();
$_SESSION["end_date"]=$_POST['end_date'];
$_SESSION["start_date"]=$_POST['start_date'];

include "./db_connect.php";
$table=$_SESSION['table'];
unset($_SESSION['table']);

$k=0;
$events=array();
    for($i=1;$i<6;$i++){
        $events[$i]=array();
    }
foreach($table as $wday){
    $k++;
    for($i=1,$j=0;$i<=9;$i++){
        if($i<9 && $wday[$i]==$wday[$i+1] && !empty($wday[$i])){
            createEvent($k,$wday[$i],$time[$j],$time[$j+3]);//createEvent(eventName,startTime,endTime)
            $j+=3;
            $i+=2;
        }
        else{ 
            createEvent($k,$wday[$i],$time[$j],$time[$j+1]);
            $j+=1;
    }
}
}
function createEvent($day,$name,$start,$end){
    global $events;
    if(!empty($name) && $name!="23"){
        array_push($events[$day],array("event_name"=>$name,"start"=>$start,"end"=>$end));
    }
}
    $_SESSION['events']=$events;

    echo '<html>
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
    <script src="./assets/jquery.min.js"></script>  
    <script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <body>
    <style>
    body{
    font-family:Roboto !important;
    background-image:url(./assets/bg.png);
    background-repeat:repeat-x;
    }
    .table>tbody>tr>td{
    vertical-align:middle !important;
    }
    </style>
    <div class="container-fluid" style="padding-top: 50px;">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <p>The following events will be added to your Google calendar from '.$_SESSION['start_date'].' to '.$_SESSION['end_date'].'</p></div>
    </div>';
    echo '<div class="row"><div class="col-md-6 col-md-offset-3">';
    echo '<table class="table table-bordered">';
    $k=-1;
    foreach($_SESSION["events"] as $wday){
        $k++;
        if(!empty($wday))
            echo '<tr><td rowspan='.(sizeof($wday)+1).'>'.$day[$k].'</td>';
        foreach($wday as $event){
            echo '<tr><td>'.$event["event_name"].": ".$event["start"]." to ".$event["end"]."</td></tr>"; 
        }
        echo '</tr>';
    }
    echo '</table></div></div>';
    echo '<div class="row"><div class="col-md-6 col-md-offset-3">
  <p>Please click <code>CONFIRM</code> button to cotinue.</p> 
    <button class="btn btn-success" id="s" type="submit">CONFIRM</button></div></div></div>
    </body>
</html>
<script src="./assets/jquery.min.js"></script>
<script>
    $("#s").click(function(){
        $("#s").html("Wait for it ...");
        $.getScript("https://apis.google.com/js/api.js").done(function(script,textStatus){
            $.getScript("./calendar_push.php").done(function( script, textStatus ) {
                handleClientLoad();
            $("#s").attr("disabled",true);
            $("#s").html("Done !");
          })
          .fail(function( jqxhr, settings, exception ) {
            alert("Failed to add events.");
        });
    });
    });
</script>';
?>


