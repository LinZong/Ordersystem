
<?php
header("Content-Type:text/html;charset=utf8");


$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("ordersystem",$con);
mysql_query('SET NAMES utf8');
mysql_query("INSERT INTO Order (Kind, Object, Height, Name ,Tel) 
VALUES ('$_POST['Kind']', '$_POST['Object']', '$_POST['Height']','$_POST['Name']','$_POST['Tel']')");
$oldcalc = mysql_query("SELECT * FROM Calc WHERE Kind='$_POST[Kind]'");
$oldcalcheight = mysql_fetch_array($oldcalc);

$newcalcheight = ($_POST['Height']+$oldcalcheight['Height']);

$kind = $_POST['Kind'];
$object = $_POST['Object'];
mysql_query("UPDATE Calc SET Height='$newcalcheight' WHRER Kind='$kind' AND Object='$object'");
echo "Upload Completed";



?>



mysql_query("INSERT INTO Order (Kind, Object, Height, Name ,Tel) 
VALUES ('$_POST[Kind]', '$_POST[Object]', '$_POST[Height]','$_POST[Name]','$_POST[Tel]')");
$oldcalc = mysql_query("SELECT * FROM Calc WHERE Kind='$_POST[Kind]'");
$oldcalcheight = mysql_fetch_array($oldcalc);

$newcalcheight = ($_POST['Height']+$oldcalcheight['Height']);

$kind = $_POST['Kind'];
$object = $_POST['Object'];
mysql_query("UPDATE Calc SET Height='$newcalcheight' WHRER Kind='$kind' AND Object='$object'");
echo "Upload Completed";