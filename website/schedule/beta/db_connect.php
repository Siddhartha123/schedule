 <?php
$time=array("08:00:00 AM","09:00:00 AM","10:00:00 AM","11:00:00 AM","12:00:00 PM","01:15:00 PM","02:15:00 PM","03:15:00 PM","04:15:00 PM","05:15:00 PM","06:15:00 PM");
$day=array("Monday","Tuesday","Wednesday","Thursday","Friday");
$tutorial=array("TA"=>"SA","TB"=>"SB","TC"=>"SC","TD"=>"TG1","TE"=>"TG2","TF"=>"TG3","TJ"=>"SJ","TK"=>"SK","TL"=>"SL","TM"=>"SM","TG"=>1);
//timetable array for PT sequence
$timetable_pt = array(
  array('1' => 'PE','2' => 'PE','3' => 'PE','4' => 'TE','5' => '23','6' => 'TJ','7' => 'TK','8' => 'TL','9' => 'TF','10' => 'A1'),
  array('1' => 'PF','2' => 'PF','3' => 'PF','4' => 'TE','5' => '23','6' => 'TK','7' => 'TL','8' => 'TM','9' => 'TF','10' => 'B1'),
  array('1' => NULL,'2' => 'PX','3' => 'PX','4' => 'PX','5' => '23','6' => 'TG','7' => 'SA','8' => 'SB','9' => 'SC','10' => 'A2'),
  array('1' => 'SM','2' => 'SJ','3' => 'SK','4' => 'SL','5' => '23','6' => NULL,'7' => 'PY','8' => 'PY','9' => 'PY','10' => ''),
  array('1' => 'PG','2' => 'PG','3' => 'PG','4' => 'TG','5' => '23','6' => 'TL','7' => 'TM','8' => 'TJ','9' => 'TF','10' => 'C1'),
  array('1' => 'PH','2' => 'PH','3' => 'PH','4' => 'TE','5' => '23','6' => 'TM','7' => 'TJ','8' => 'TK','9' => 'TG','10' => 'A3')
);
//timetable array for TP sequence
$timetable_tp = array(
  array('1' => 'TA','2' => 'TB','3' => 'TC','4' => 'TE','5' => '23','6' => 'PA','7' => 'PA','8' => 'PA','9' => 'TF','10' => 'A1'),
  array('1' => 'TB','2' => 'TC','3' => 'TD','4' => 'TE','5' => '23','6' => 'PB','7' => 'PB','8' => 'PB','9' => 'TF','10' => 'B1'),
  array('1' => '','2' => 'PX','3' => 'PX','4' => 'PX','5' => '23','6' => 'TG','7' => 'SA','8' => 'SB','9' => 'SC','10' => 'A2'),
  array('1' => 'SM','2' => 'SJ','3' => 'SK','4' => 'SL','5' => '23','6' => '','7' => 'PY','8' => 'PY','9' => 'PY','10' => ''),
  array('1' => 'TC','2' => 'TD','3' => 'TA','4' => 'TG','5' => '23','6' => 'PC','7' => 'PC','8' => 'PC','9' => 'TF','10' => 'C1'),
  array('1' => 'TD','2' => 'TA','3' => 'TB','4' => 'TE','5' => '23','6' => 'PD','7' => 'PD','8' => 'PD','9' => 'TG','10' => 'A3')
);

$data=array("client_id"=> "GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg","client_secret"=> "WtQKZ6MUjSafU7O0It9h8vQb6lUJ_JPJqYmpvmTxicFWKRfLjfd6dcN5NU76fhAv-cX-7N3etuvzK89bFc5P0A","grant_type"=> "authorization_code","redirect_uri"=> "https://teratogenic-ballast.000webhostapp.com/auth.php");
?>
