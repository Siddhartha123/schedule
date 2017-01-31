<?php
require 'db_connect.php';
session_start();
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$handle=fopen('schedule.csv','w');
fwrite($handle,'Subject,Start Date,Start Time,End Date,End Time'."\n");
if(!empty($_POST['TJ']) or !empty($_POST['TK']) or !empty($_POST['TL']) or !empty($_POST['TM']))
$sequence="P-T";
elseif (!empty($_POST['TA']) or !empty($_POST['TB']) or !empty($_POST['TC']) or !empty($_POST['TD']))
$sequence="T-P";
echo date('d.m.y')." ";
print_r(getdate());
//today+8-wday=>mon

$table=$_SESSION['table'];
$subject=$_SESSION['subject'];
for($i=0;$i<5;$i=$i+1)
{
  for($j=1;$j<10;$j=$j+1)
    {
      if(!empty($table[$i][$j]) && $table[$i][$j]!=23)
        {
          $date=getdate()['mday']+8+$i-getdate()['wday']."/";
          $mon=getdate()['mon'];
          if($mon<10)
            $date=$date."0".$mon;
          else
            $date=$date.$mon;
          $date=$date."/".getdate()['year'];
          if($j<8 && $table[$i][$j+1]==$table[$i][$j])
          {
            $string=$table[$i][$j].",".$date.",".$time[$j-1].",".$date.",".$time[$j+2]."\n";
            $j=$j+2;
          }
          else
          $string=$table[$i][$j].",".$date.",".$time[$j-1].",".$date.",".$time[$j]."\n";
    	    fwrite($handle,$string);
        }
    }
}
header("Location:./schedule.csv");
?>
