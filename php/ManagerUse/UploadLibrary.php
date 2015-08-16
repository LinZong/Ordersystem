<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UploadDataAction</title>
</head>

<body>
<?php
header("Content-Type:text/html;charset=utf8");


$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("ordersystem",$con);

$str="INSERT INTO Library (Kind,Object) VALUES ('$_POST[Kind]','$_POST[Object]')";
mysql_query('SET NAMES utf8');
mysql_query($str,$con);
$st1="INSERT INTO Calc (Kind,Object) VALUES ('$_POST[Kind]','$_POST[Object]')";
mysql_query('SET NAMES utf8');
mysql_query($st1,$con);
mysql_close($con);

echo "Upload Completed";



?>
<a href="AddObjectToLibrary.php">Back to Add Library</a>
</body>
</html>