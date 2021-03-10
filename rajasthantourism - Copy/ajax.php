<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    +
require('connect.inc.php');
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Title</title>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("select.district").change(function(){
		var selecteddistrict = $(".district option:selected").val();
		$.ajax({
		type: "POST",
		url: "process_request.php",
		data: { district : selecteddistrict }
		}).done(function(data){
			$("#response").html(data);
	});
});
});
</script>
</head>
<form><table>
<tr><td><select>
<?php 
$query="select State from hotel";
if(($query_run=mysql_query($query))>0)
{
	while($rows=mysql_fetch_row($query_run))
	{
    echo "<option>". $rows[1]. "</option>";
  }
}
?>
</select></td><td>
<select class="district">
<option>Select</option>
<?php 
$query="select DISTINCT district from hotel";
if(($query_run=mysql_query($query))>0)
{
	while($rows=mysql_fetch_row($query_run))
	{
		echo "<option>". $rows[2] . "</option>";
	}
}
?>
</select></td>
<td id="response"></td></tr></table>
</form>
<body>
</body>
</html>