<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PrintAllDidntFinishedBuy</title>
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
$people=mysql_query("SELECT * FROM People WHERE Finish=''");

 echo "<table border='1'>
<tr>
<th>序号</th>
<th>品种</th>
<th>类型</th>
<th>重量</th>
<th>姓名</th>
<th>电话</th>
<th>交易情况</th>
</tr>";
$serial=0;
   while ($rowpeople = mysql_fetch_array($people))
   {
	 $serial++;
	 echo "<tr>";
	 echo "<td>" . $serial . "</td>";
     echo "<td>" . $rowpeople['Kind'] . "</td>";
	 echo "<td>" . $rowpeople['Object'] . "</td>";
	 echo "<td>" . $rowpeople['Height'] . "</td>";
	 echo "<td>" . $rowpeople['Name'] . "</td>";
     echo "<td>" . $rowpeople['Tel'] . "</td>";
	 echo "<td>" . $rowpeople['Finish'] . "</td>";
     echo "</tr>";
	
		
}
?>
</body>
</html>