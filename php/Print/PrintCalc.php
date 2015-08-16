<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PrintCalc</title>
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
$library=mysql_query("SELECT * FROM Calc");
$serial=0;
 echo "<table border='1'>
<tr>
<th>序号</th>
<th>品种</th>
<th>类型</th>
<th>重量</th>
</tr>";
   while ($rowlibrary = mysql_fetch_array($library))
   {
	 $serial++;
	 echo "<tr>";
	 echo "<td>" . $serial . "</td>";
     echo "<td>" . $rowlibrary['Kind'] . "</td>";
	 echo "<td>" . $rowlibrary['Object'] . "</td>";
	 echo "<td>" . $rowlibrary['Height'] . "</td>";
     echo "</tr>";
	
		
}
?>
</body>
</html>