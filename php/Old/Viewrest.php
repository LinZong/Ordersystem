<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View the rest of the Library</title>
</head>
<?php
header("Content-Type:text/html;charset=utf8");
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$library=mysql_query("SELECT * FROM Library");
$calc=mysql_query("SELECT * FROM Calc");

while ($rowlibrary = mysql_fetch_array($library))
{
	$rowcalc = mysql_fetch_array($calc);
	$rest = ($rowlibrary['Height'])-($rowcalc['Height']);
	
	echo $rowlibrary['Kind']. " " . $rowlibrary['Object'] . "  ". $rest;
	echo "<br />";
}






?>
<body>
</body>
</html>