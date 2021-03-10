<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Titlet</title>
</head>
<?php
require('connect.inc.php');
session_start();
?>
<?php 
if(isset($_POST["district"])){
	$state = $_POST["district"];
	if($state !== 'Select'){
		echo "<label>City:</label>";
		echo "<select>";
		$query="select hotel from hotel where district='".$district."'";
		if(($query_run=mysql_query($query))>0)
		{
			while($rows=mysql_fetch_row($query_run))
			{
				echo "<option>". $rows[0] ."</option>";
			}}
			echo "</select>";
	}
}
?>
<body>
</body>
</html>