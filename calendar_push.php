<?php
session_start();
$_SESSION['calendar']=array(array("provider_name"=>"google"));
include './db_connect.php';
//print_r($_SESSION["events"]);
if(empty($_POST['d'])){
    echo '<html>
    <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
    <script src="./assets/jquery.min.js"></script>  
    <script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <body>
    <style>
    body{
    font-family:Roboto;
    }
    .table>tbody>tr>td{
    vertical-align:middle !important;
    }
    </style>
    <div class="container-fluid">
    <div class="row">
    <p>The following events will be added to your '.$_SESSION['calendar'][0]['provider_name'].' calendar till '.$_SESSION['end_date'].'</p>
    </div>';
    echo '<div class="row"><div class="col-md-6 col-md-offset-3">';
    echo '<table class="table table-bordered">';
    $k=-1;
    foreach($_SESSION["events"] as $wday){
        $k++;
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
        $.post("./calendar_push.php",{
            d:"b326b5062b2f0e69046810717534cb09"
        },function(data, status){
            console.log(data);
        });
    });
</script>';
}
    elseif($_POST["d"]==md5("true")){
        echo "done";//add calendar event addition code here;
        $k=-1;
        //$_SESSION["end_date"]="2017-06-30";
    foreach($_SESSION["events"] as $wday){
        $k++;
        foreach($wday as $event){
            $i=0;
            $start_date=date('Y-m-d', strtotime("next ".$day[$k]));
            $date=$start_date;
            while((strtotime($_SESSION['end_date'])-strtotime($date))>0)
                  {
            addEvent($event["event_name"],$date."T".date('H:i:s',strtotime("-5 hours -30 minutes",strtotime($event["start"])))."Z",$date."T".date('H:i:s',strtotime("-5 hours -30 minutes",strtotime($event["end"])))."Z");
                      $i++;
                      $date=date('Y-m-d', strtotime("+".$i." week",strtotime($start_date)));
                  }
        }
    }
    }
function addEvent($name,$start,$end){
    //echo nl2br("One line.\nAnother line.");
    echo nl2br($name.": ".$start."  to ".$end."\n");
}
    ?>