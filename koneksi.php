<?php
	$host = "us-cdbr-east-04.cleardb.com";
	$user = "bef7eb8e540614";
	$password = "701f5dd0";
	$database = "heroku_b62687d6962d44c";
	
	$connect = mysqli_connect($host,$user,$password,$database) or die (mysqli_error($connect));
	//mysql_select_db($database) or die (mysql_error());
?>
