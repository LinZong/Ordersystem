<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload and Search the Library [Only for Manager]</title>
</head>

<body>

<?php

header("Content-Type:text/html;charset=utf8");

echo "This is the page that can manage the library.Only manager can use this page";
echo "<br />";
echo "If you don't know how to manage the library or MySQL,please close the page,or you muse afford all the responsibility!.";
echo "<br />";

echo "首先从数据库显示当前库存";




$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$result=mysql_query("SELECT * FROM Library");

while($row = mysql_fetch_array($result))
  {
  echo $row['Kind'] . " " . $row['Object']. " " . $row['Height'];
  echo "<br />";
}

echo "<br /> 然后提供更新库存的接口<br />";


?>


<input name="BackgroundManager.php" type="button" class="btnSousuo" id="BackgroundManager.php" value="进入" onclick="window.location='BackgroundManager.php'"/>








</body>
</html>