<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新库存</title>
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
   
   
   
   while ($rowlibrary = mysql_fetch_array($library))
   {
	echo "<form method='post' action='UpdateLibrary.php'>";
	$rowcalc = mysql_fetch_array($calc);
	$rest = ($rowlibrary['Height'])-($rowcalc['Height']);
	echo "<br />";
	echo "<input type='text' name='Kind' value='$rowlibrary[Kind]'>";
	echo "<input type='text' name='Object' value='$rowlibrary[Object]'>";
	echo "<input type='text' name='Height' value='$rest'>";
	echo "<input type='submit' name='Submit' value='确认更新'>";
	echo "</form>";
	
		
}    
    
	
    
	
	echo "以下是更新库存的用法，以上是原Library的存量减去客户购买总量得出的结果。<br />需要更新库存的话，请在最右边一栏填上需要更新的存量，这个操作将会更新Library的值并且清空客户购买的总量。不过呢客户订单的话是不会消掉的，所以呢更新库存之前请务必再次确认交易量是否一致!";
?>
</body>
</html>
