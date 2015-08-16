<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
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
margin-top:22%;
text-align:center;
font-size:36px;
color:#FFF;
}
#button1{font-size:36px;}

</style>
<body>
<?php


echo "<a href='PrintAllBuy.php'><input type='button' id='button1' name='Printallbuy' value='打印全部购买'>";
echo "<a href='PrintAllFinishedBuy.php'><input type='button' id='button1' name='Printallfinishedbuy' value='打印全部已完成购买'>";
echo "<a href='PrintAllDidntFinishedBuy.php'><input type='button' id='button1' name='Printalldidnfinishedbuy' value='打印全部成功预订'>";
echo "<a href='PrintLibrary.php'><input type='button' id='button1' name='Printlibrary' value='打印库存'>";
echo "<a href='PrintCalc.php'><input type='button' id='button1' name='Printcalc' value='打印已购买总数'></a><br />
";

echo "<br />以下操作将会新开一个网页并生成出一个表格，然后打印整个网页就好";

?>




</body>
</html>