<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
body{
background:url(../../pic/bg.gif);
background-size:100% 100%;
position:relative; 
width:auto; 
height:auto; 
left:0%; 
z-index:1; 
margin-left:0%; 
margin-top:10%;
text-align:center;
font-size:36px;
color:#FFF;
}

</style>
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
$people=mysql_query("SELECT * FROM People WHERE Finish='Yes'");

 
   while ($rowpeople = mysql_fetch_array($people))
   {
	
	echo $rowpeople['Kind']. " " . $rowpeople['Object'] . "  ". $rowpeople['Height'] . "  " . $rowpeople['Name'] .  "  "  .$rowpeople['Tel']  .  "  "  .$rowpeople['Finish'];
	
	echo "<br />";
	
		
}
?>

</body>
</html>