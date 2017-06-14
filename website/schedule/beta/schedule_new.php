<?php
require 'db_connect.php';
session_start();

if(!empty($_POST['TJ']) or !empty($_POST['TK']) or !empty($_POST['TL']) or !empty($_POST['TM']))
    $sequence="pt";
elseif (!empty($_POST['TA']) or !empty($_POST['TB']) or !empty($_POST['TC']) or !empty($_POST['TD']))
    $sequence="tp";
else
    header("Location:./");

if(empty($_POST['PX']) && !empty($_POST['PY']))
    $var="PY";
else if(!empty($_POST['PX']) && empty($_POST['PY']))
    $var="PX";
else
    $var=123;
    $table=array();
foreach($timetable_pt as $row)
{
    if(in_array("PX",$row) && $sequence=="tp")
        array_push($table,$row);
    else if(in_array("PY",$row) && $sequence=="pt")
        array_push($table,$row);
    else if(!in_array("PX",$row) && !in_array("PY",$row))
        array_push($table,$row);
}
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
            $table[$i][$j]=$subject." (Tutorial)";
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
$_SESSION['table']=$table;
$_SESSION['subject']=$subject;


?>
<html>

<link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css">
<script src="./assets/jquery.min.js"></script>  
<script src="./assets/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./assets/table-style.css">

<!doctype html>
<title>
NITR Central Time Table
</title>
<style>
    .modal-content {
  border-radius: 0px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
    .modal{
        font-family: Roboto !important;
    }
    </style>
<body>
  <div class="col-sm-12">

              <h3 class="box-title m-b-0">Time Table</h3>
              <p class="text-muted m-b-20">Your sequence is <?php echo strtoupper($sequence) ?></p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <?php
                    echo "<td></td>";
                    for($i=0;$i<10;$i=$i+1)
                    {
                      $j=$i+1;
                      echo "<th>$time[$i]"."-"."$time[$j]</th>";
                    } ?>
                  </tr>
                </thead>
                <tbody>
<?php
$f=0;
for($i=0;$i<5;$i=$i+1)
{
  echo "<tr>";
  echo "<td>$day[$i]</td>";
  for($j=1;$j<11;$j=$j+1)
  {
    if($table[$i][$j]==23 && $f==0)
    {
      echo "<td class=\"wrap\" rowspan=5 col width=\"50px\">";
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
 </tbody>
</table>
</div>
</div>

<h5 class="box-title">To add this time table to your favourite calendar, <button data-toggle="modal" data-target="#myModal">click here</button>.</h5>
<!--    href="https://app.cronofy.com/oauth/authorize?response_type=code&client_id=GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg&redirect_uri=https://teratogenic-ballast.000webhostapp.com/auth.php&scope=create_event" target="_blank"-->
    

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter details</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="./calendarInit.php">
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Date</label>
                    <input id="date_cal" data-toggle="tooltip" title="Enter the date till which you want to add events to your calendar" type="text" class="form-control" name="date" placeholder="YYYY-MM-DD">
                </div>
            </div>
            </div>
          
          <button type="submit" class="btn btn-default">Submit</button>
            </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
        
    </div>

  </div>
</div>
</body>
    <script>
    
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
  
</html>
