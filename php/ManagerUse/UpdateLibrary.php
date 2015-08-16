<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UpdateLibrary</title>
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
$library=mysql_query("SELECT * FROM Library");
$calc=mysql_query("SELECT * FROM Calc");

mysql_query("UPDATE Library SET Height='$_POST[Height]'
WHERE Kind='$_POST[Kind]' AND Object='$_POST[Object]'");
mysql_query("UPDATE Calc SET Height='0'
WHERE Kind='$_POST[Kind]' AND Object='$_POST[Object]'");

echo "更新成功";

header("refresh:3;url=SearchLibrary.php");

?>

</body>
</html>