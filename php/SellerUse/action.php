<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ActionPHP</title>
</head>

<body>

<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$count = 0;
$height = $_POST['Height'];
$name = $_POST['Name'];
foreach ($_POST['Object'] as $Object)
{

    mysql_query("UPDATE People SET Finish='Yes'
WHERE Name='$name[$count]' AND Height='$height[$count]' AND Object='$Object'");
    $count++;

}

echo "已结算完成!";
header("refresh:3;url=Main.php");

?>




</body>
</html>