<?php
require 'db_connect.php';
$con=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(!empty($_POST['TJ']) or !empty($_POST['TK']) or !empty($_POST['TL']) or !empty($_POST['TM']))
$sequence="pt";
elseif (!empty($_POST['TA']) or !empty($_POST['TB']) or !empty($_POST['TC']) or !empty($_POST['TD']))
$sequence="tp";
$query = mysql_query("SELECT * FROM timetable_$sequence") or die(mysql_error());
if(empty($_POST['PX']) && !empty($_POST['PY']))
    $var="PY";
else if(!empty($_POST['PX']) && empty($_POST['PY']))
    $var="PX";
else
    $var=123;
    $table=array();
while($row=mysql_fetch_assoc($query))
{
  /*if(sizeof($table)==2 ||)
  {
    if(in_array($var,$row) || $var==123)
      array_push($table,$row);
  }
  else
    array_push($table,$row);
*/
    if(in_array("PX",$row) && $sequence=="tp")
        array_push($table,$row);
    else if(in_array("PY",$row) && $sequence=="pt")
        array_push($table,$row);
    else if(!in_array("PX",$row) && !in_array("PY",$row))
        array_push($table,$row);

}
$tutorial=array("TA"=>"SA","TB"=>"SB","TC"=>"SC","TD"=>"TG1","TE"=>"TG2","TF"=>"TG3","TJ"=>"SJ","TK"=>"SK","TL"=>"SL","TM"=>"SM","TG"=>1);
foreach ($_POST as $slot=>$subject)
{
  if(!empty($subject))
  {
    for($i=0;$i<5;$i=$i+1)
    {
      for($j=1;$j<10;$j=$j+1)
      {
        if($table[$i][$j]==$slot)
          $table[$i][$j]=$subject;
        elseif($slot[0]=="T" && $table[$i][$j]==$tutorial[$slot])
        {
          if(isset($_POST["C".$slot]))
            $table[$i][$j]=$subject."(Tutorial)";
          else
            $table[$i][$j]="";
        }
      }
    }
  }

  else {
    for($i=0;$i<5;$i=$i+1)
    {
      for($j=1;$j<10;$j=$j+1)
      {
        if($table[$i][$j]==$slot || $slot[0]=="T" && $table[$i][$j]==$tutorial[$slot])
          $table[$i][$j]="";
      }
    }
  }
}
?>
<!-- Font Awesome CSS -->
<link href="./assets/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" />
<!-- Bootstrap Core CSS -->
<link href="./assets/style/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Editable CSS -->
<link rel="stylesheet" href="./assets/jquery-datatables-editable/datatables.css" />
<!-- animation CSS -->
<link href="./assets/style/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="./assets/style/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="./assets/style/css/colors/default.css" id="theme"  rel="stylesheet">

<!doctype html>
<title>
NITR Central Time Table
</title>
<style>
.wrap{
     white-space: pre;
}
</style>
<body>
  <div class="col-sm-12">
            <div class="white-box">
              <h3 class="box-title m-b-0">Time Table</h3>
              <p class="text-muted m-b-20">Your sequence is <?php echo strtoupper($sequence) ?></p>
              <div class="table-responsive">
                <table class="table table-bordered">
<?php
$f=0;
for($i=0;$i<5;$i=$i+1)
{
  echo "<tr>";
  for($j=1;$j<10;$j=$j+1)
  {
    if($table[$i][$j]==23 && $f==0)
    {
      echo "<td class=\"wrap\" rowspan=5>";
echo "
  L


  U


  N


  C


  H
      ";
      echo "</td>";
      $f=1;
    }
    else if($j<8 && $table[$i][$j+1]==$table[$i][$j] && !empty($table[$i][$j]))
    {
      echo "<td colspan=3>".$table[$i][$j]."</td>";
      $j=$j+2;
    }
    else if($table[$i][$j]!=23)
    echo "<td>".$table[$i][$j]."</td>";
  }
  echo "</tr>\n";
}
 ?>
</table>
</div>
</div>
</div>
<!-- jQuery -->
<script src="./assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="./assets/style/bootstrap/dist/js/bootstrap.min.js"></script>

<!--slimscroll JavaScript -->
<script src="./assets/style/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="./assets/style/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="./assets/style/js/custom.min.js"></script>
<!-- Editable -->
<script src="./assets/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="./assets/datatables/dataTables.bootstrap.js"></script>
<script src="./assets/tiny-editable/mindmup-editabletable.js"></script>
<script src="./assets/tiny-editable/numeric-input-example.js"></script>
<script>
$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
$('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
  $(document).ready(function(){
      $('#editable-datatable').DataTable();
  });

</script>
<!--Style Switcher -->
<script src="./assets/styleswitcher/jQuery.style.switcher.js"></script>
<!-- jQuery peity -->
    <script src="./assets/peity/jquery.peity.min.js"></script>
    <script src="./assets/peity/jquery.peity.init.js"></script>

</body>
</html>
