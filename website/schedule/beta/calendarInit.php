<?php
session_start();
$_SESSION["end_date"]=$_POST['date'];
header("Location:https://app.cronofy.com/oauth/authorize?response_type=code&client_id=GyhJvCQ1_bww5Cz84H2fwP8WUdQeiCWg&redirect_uri=https://tech-stuff.me/auth.php&scope=create_event");
?>