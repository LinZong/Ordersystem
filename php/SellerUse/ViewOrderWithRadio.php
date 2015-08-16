<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search The Order</title>
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
   echo "<form method='post' action='action.php'>";
   while ($rowpeople = mysql_fetch_array($people))
	{
	
	echo 
	 "
	 
    <input type='checkbox' name='Name[]' value='$rowpeople[Name]' />
      $rowpeople[Object] $rowpeople[Height]  $rowpeople[Name] $rowpeople[Tel]     $rowpeople[Finish]
    <input type='text' name='Height[]' value='' placeholder='输入重量以便确认'>
    <input type='text' name = 'Object[]' value='$rowpeople[Object]' style='display: none;'>
	   ";
   
	}

		echo "<input type='submit' name='Submit' value='确认' />";
	echo "</form>";
	
   
   
	
	


?>






</body>
</html>