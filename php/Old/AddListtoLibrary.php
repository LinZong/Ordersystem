<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php


$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  

mysql_select_db("ordersystem",$con);
mysql_query('SET NAMES utf8');
$sql="CREATE TABLE Library(
Name text,
Tel varchar(11)
)
DEFAULT CHARACTER SET=utf8";
mysql_query($sql,$con);
mysql_close($con);
?>