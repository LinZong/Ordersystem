<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../../js/jquery-1.8.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
  $("#allorderer").hide();
  $("#finish").hide();
	      
});

  function toggleorder(){
  $("#allorderer").fadeToggle();
  
  }
  function togglefinish(){
  $("#finish").fadeToggle();
  
  }
</script>
<title>Look For the orderers didnt finish</title>
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

 
   while ($rowpeople = mysql_fetch_array($people))
   {
	
	echo $rowpeople['Kind']. " " . $rowpeople['Object'] . "  ". $rowpeople['Height'] . "  " . $rowpeople['Name'] .  "  "  .$rowpeople['Tel']  .  "  "  .$rowpeople['Finish'];
	
	echo "<br />";

}
?>

<form method="post" action="Search.php">
<a>以姓名作为检索条件</a>
<br />

<input type="text" name="Name" value="姓名" onclick="this.value='';focus()"/>
<input type="submit" name="Submit" value="确认" />
<input type="reset" name="Submit2" value="重置" />

</form>
<br />
<br />
<br />
<input type="button" name="togglefinish"  value="显示/隐藏已完成订单" onclick="togglefinish();"/>
<div id="finish">
<?php
 include('FinishedOrderer.php');
?>
</div>
<br />
<input type="button" name="toggleallorder"  value="显示/隐藏全部订单" onclick="toggleorder();"/>
<div id="allorderer">
<?php
 include ('AllOrderer.php');
?>
<br />
</div>
<br />

<a>结算用</a>
<br />
<br />

<?php
 include ('ViewOrderWithRadio.php');
?>
</body>
</html>