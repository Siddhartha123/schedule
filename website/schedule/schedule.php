<html>
<?php
session_start();
include "./db_connect.php";
$table=$_SESSION['table'];
unset($_SESSION['table']);

$k=0;
$events=array();
    for($i=1;$i<6;$i++){
        $events[$i]=array();
    }
foreach($table as $wday){
    echo "<br><br>".$day[$k].": ";
    $k++;
    for($i=1,$j=0;$i<=10;$i++){
        if($i<10 && $wday[$i]==$wday[$i+1] && !empty($wday[$i])){
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
        echo '<br>'.$name.":Start time-".$start.":End time-".$end."\n";
        array_push($events[$day],array("event_name"=>$name,"start"=>$start,"end"=>$end));
    }
}
    $_SESSION['events']=$events;
    header("Location:./calendar_push.php");
?>
</html>