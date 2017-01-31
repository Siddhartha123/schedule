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
th,td{
	text-align:center;
}
.table>tbody>tr>td{
	vertical-align: middle;
}
</style>
<script>
var w = window.innerWidth;
var h = window.innerHeight;
</script>
<body>

<form method="POST" action="schedule_new.php">
<input id="mobile" name="mobile" type="hidden" value="hi">
<div class="row">
	<div class="col-sm-6">
  <div class="white-box">
		<h2 class="box-title">Theory Courses</h2>
<div class="table-responsive">
	<table class="table color-bordered-table success-bordered-table ">
	<thead><tr><th>Slot</th><th>Subject</th><th>Tutorial</th></tr></thead>
	<tbody>
	<tr><td>TA</td><td><input class="form-control" type="text" name ="TA"></td><td><div class="checkbox checkbox-success">
    <input type="checkbox" name="CTA"><label></label></div></td></tr>
	<tr><td>TB</td><td><input class="form-control" type="text" name ="TB"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTB"><label></label></div></td></tr>
	<tr><td>TC</td><td><input class="form-control" type="text" name ="TC"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTC"><label></label></div></td></tr>
	<tr><td>TD</td><td><input class="form-control" type="text" name ="TD"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTD"><label></label></div></td></tr>
	<tr><td>TE</td><td><input class="form-control" type="text" name ="TE"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTE"><label></label></div></td></tr>
	<tr><td>TF</td><td><input class="form-control" type="text" name ="TF"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTF"><label></label></div></td></tr>
	<tr><td>TG</td><td><input class="form-control" type="text" name ="TG"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTG"><label></label></div></td></tr>
	<tr><td>TJ</td><td><input class="form-control" type="text" name ="TJ"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTJ"><label></label></div></td></tr>
	<tr><td>TK</td><td><input class="form-control" type="text" name ="TK"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTK"><label></label></div></td></tr>
	<tr><td>TL</td><td><input class="form-control" type="text" name ="TL"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTL"><label></label></div></td></tr>
	<tr><td>TM</td><td><input class="form-control" type="text" name ="TM"></td><td><div class="checkbox checkbox-success">
		<input type="checkbox" name ="CTM"><label></label></div></td></tr>
</tbody>
</table>
</div></div></div>
<div class="col-sm-6">
                        <div class="white-box">									<h2 class="box-title">Laboratory Courses</h2>
                            <div class="table-responsive">
                                <table class="table color-bordered-table info-bordered-table">
<thead><tr><th>Slot</th><th>Subject</th></tr></thead>
	<tbody>
	<tr><td>PA</td><td><input class="form-control" type="text" name ="PA"></td></tr>
	<tr><td>PB</td><td><input class="form-control" type="text" name ="PB"></td></tr>
	<tr><td>PC</td><td><input class="form-control" type="text" name ="PC"></td></tr>
	<tr><td>PD</td><td><input class="form-control" type="text" name ="PD"></td></tr>
	<tr><td>PE</td><td><input class="form-control" type="text" name ="PE"></td></tr>
	<tr><td>PF</td><td><input class="form-control" type="text" name ="PF"></td></tr>
	<tr><td>PG</td><td><input class="form-control" type="text" name ="PG"></td></tr>
	<tr><td>PH</td><td><input class="form-control" type="text" name ="PH"></td></tr>
	<tr><td>PX</td><td><input class="form-control" type="text" name ="PX"></td></tr>
	<tr><td>PY</td><td><input class="form-control" type="text" name ="PY"></td></tr></tbody>
</table>
</div></div></div></div>
<div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">GO</button>
          </div>
        </div>
</form>

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
