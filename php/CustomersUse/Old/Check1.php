<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CheckYourOrder</title>
</head>



<body>
<?php
header("Content-Type:text/html;charset=utf8");
$customKind = $_POST['Kind'];
$customObject = $_POST['Object'];
$custonHeight = $_POST['Height'];
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$library = mysql_query("SELECT * FROM Library
WHERE Object='$customObject'");
$calc = mysql_query("SELECT * FROM Calc
WHERE Object='$customObject'");

    $libraryrest = mysql_fetch_array($library);
	$calcorder = mysql_fetch_array($calc);
	$result = ($libraryrest['Height'])-($calcorder['Height'])-($custonHeight);
	if ($result >= 0)
	{
	
	echo "已成功订单<br />";
	header("refresh:3;url=index.php");	
	goto uploadcalc;
	
	}else{
		echo "库存不足，请返回重新填写。<br />";
		header("refresh:3;url=index.php"); 
		exit;
	}
uploadcalc:
mysql_query("INSERT INTO People (Kind, Object, Height, Name ,Tel) 
VALUES ('$_POST[Kind]', '$_POST[Object]', '$_POST[Height]','$_POST[Name]','$_POST[Tel]')");
$oldcalc = mysql_query("SELECT * FROM Calc WHERE Object='$_POST[Object]'");
$oldcalcheight = mysql_fetch_array($oldcalc);
$newcalcheight = ($_POST['Height']+$oldcalcheight['Height']);
$kind = $_POST['Kind'];
$object = $_POST['Object'];
mysql_query("UPDATE Calc SET Height = '$newcalcheight'
WHERE Kind = '$kind' AND Object = '$object'");
echo "Upload Completed";






?>


</body>
</html>