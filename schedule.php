<?php
require 'db_connect.php';
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$handle=fopen('schedule.csv','w');
fwrite($handle,'Subject,Start Date,Start Time,End Date,End Time'."\n");
if(!empty($_POST['TJ']) or !empty($_POST['TK']) or !empty($_POST['TL']) or !empty($_POST['TM']))
$sequence="P-T";
elseif (!empty($_POST['TA']) or !empty($_POST['TB']) or !empty($_POST['TC']) or !empty($_POST['TD']))
$sequence="T-P";
print_r($_POST);
foreach ($_POST as $slot=>$subject)
{
  if(!empty($subject))
  {
    switch($slot)
    {
      case "startdate":
      $date=$subject;
      break;
      case "startmonth":
      $month=$subject;
      break;
      case "startyear":
      $year=$subject;
      break;
      case "TA":
      fwrite($handle,"$subject,$date/$month/$year,8:00:00 AM,$date/$month/$year,9:00:00 AM"."\n");
      $date=$_POST['startdate']+3;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,10:00:00 AM,$date/$month/$year,11:00:00 AM"."\n");
      $date=$_POST['startdate']+4;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,9:00:00 AM,$date/$month/$year,10:00:00 AM"."\n");
      break;
      case "TB":
      fwrite($handle,"$subject,$date/$month/$year,8:00:00 AM,$date/$month/$year,9:00:00 AM"."\n");
      $date=$_POST['startdate']+3;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,10:00:00 AM,$date/$month/$year,11:00:00 AM"."\n");
      $date=$_POST['startdate']+4;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,9:00:00 AM,$date/$month/$year,10:00:00 AM"."\n");
      break;
      case "TC":
      fwrite($handle,"$subject,$date/$month/$year,8:00:00 AM,$date/$month/$year,9:00:00 AM"."\n");
      $date=$_POST['startdate']+3;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,10:00:00 AM,$date/$month/$year,11:00:00 AM"."\n");
      $date=$_POST['startdate']+4;
      if($date<10)
      $date="0".$date;
      fwrite($handle,"$subject,$date/$month/$year,9:00:00 AM,$date/$month/$year,10:00:00 AM"."\n");
      break;
      case "TD":
      break;
      case "TE":
      break;
      case "TF":
      break;
      case "TG":
      break;
      case "TJ":
      break;
      case "TK":
      break;
      case "TL":
      break;
      case "TM":
      break;
      case "PA":
      break;
      case "PB":
      break;
      case "PC":
      break;
      case "PD":
      break;
      case "PE":
      break;
      case "PF":
      break;
      case "PG":
      break;
      case "PH":
      break;
      case "PX":
      break;
      case "PY":
      break;
    }

  }
}
?>
<!doctype html>
<title>
NITR Central Time Table
</title>
<body>
<?php echo "Your sequence is : ".$sequence."<br>";?>
</body>
</html>
