<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
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
$result=mysql_query("SELECT * FROM Calc");

while($row = mysql_fetch_array($result))
  {
  echo $row['Kind'] . " " . $row['Object']. " " . $row['Height'];
  echo "<br />";
  }

?>




</body>
</html>