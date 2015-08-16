<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Data</title>
</head>

<body>

<?php
header("Content-Type:text/html;charset=utf8");
$con = mysql_connect("localhost","root","");

if (!$con)

{
	die('Could not connect: ' . mysql_error());
	
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$str="UPDATE Library SET Height = '$_POST[Height]'
WHERE Kind = '$_POST[Kind]' AND Object = '$_POST[Object]'";
$back = mysql_query($str,$con);


if ($back)

{
	
	echo "Database is updated successfully!<br />";
	echo "Now let me see the newest database!<br /><br />";
	$result = mysql_query("SELECT * FROM Library");
	while ($row = mysql_fetch_array($result))
	{
		echo $row['Kind'] ." " . $row['Object'] . " " . $row['Height'];
		echo "<br />";
	}
}



?>





</body>
</html>