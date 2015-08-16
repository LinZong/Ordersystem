<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel For Seller</title>
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


echo "<a href='../SellerUse/AllOrderer.php'><input type='button' id='button1' name='Viewallbuy' value='查看全部购买'>";
echo "<a href='../SellerUse/FinishedOrderer.php'><input type='button' id='button1' name='ViewAllFinishedBuy' value='查看全部已完成购买'>";
echo "<a href='../SellerUse/Main.php'><input type='button' id='button1' name='EntertotheSeller' value='进入售货员界面操作'>";
echo "<a href='../Print/Print.php'><input type='button' id='button1' name='Print' value='生成表格打印相关'></a>";


echo "<br /><br />销售员界面<br />";
?>

</body>
</html>