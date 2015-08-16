<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../../js/jquery-1.8.1.min.js"></script>
<title>湛江海关机关服务中心  农场猪销售预订系统</title>
<script type="text/javascript">
  $(document).ready(function(){
  $("#viewrest").hide();
  });
  
 function showrest() {
        $("#viewrest").fadeToggle();
    };
	
 function check(){
	 alert("请确认无误!");
	 formSubmit();
 }
 function formSubmit(){
	 document.getElementById("order").submit();
	 }
 
</script>
<style>
body{
 background:url(../../pic/bg.gif);
 background-size:100% 100%;
	}
div#customuse{
position:relative; 
width:auto; 
height:auto; 
left:0%; 
z-index:1; 
margin-left:0%; 
margin-top:17%;
text-align:center;
font-size:30px;
}
#custom
{
font-size:30px;
}

#viewrest{
color:#FFF;
}
#headtitle{
    font-family:"Microsoft YaHei UI";
	font-size:60px;
	text-align:center;
	color:#FFF;
	}
</style>
</head>


<h2 id="headtitle">湛江海关机关服务中心 农场猪销售预订系统</h2>
<body>
<!------------得到库存的方法，先读Library，再读Calc，然后相减即可。-------->
<div id="customuse">



<?php

echo "<form method='post' action='Check.php' id='order'>";

echo "<select name='Kind' id='custom'>
    <option selected='selected' value='猪肉'>猪肉</option>
</select>

<select name='Object' id='custom'>
    <option selected='selected'>请选择</option>
    ";
	

header("Content-Type:text/html;charset=utf8");
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_query('SET NAMES utf8');
mysql_select_db("ordersystem",$con);
$library=mysql_query("SELECT * FROM Library");

   
   while ($rowlibrary = mysql_fetch_array($library))
{
	echo "<option value='$rowlibrary[Object]'>$rowlibrary[Object]</option>";
	echo "<br />";
}
echo "
</option>
<input type='text' id='custom' name='Height' value='重量(斤/个,限整数)' onclick=this.value='';focus()>
<input type='text' id='custom' name='Name' value='姓名' onclick=this.value='';focus()>
<input type='text' id='custom' name='Tel' maxlength='11' value='联系电话' onclick=this.value='';focus()>

<input type='button' id='custom' value='OK!' onclick='check();'/>
<input type='reset' id='custom' name='Submit2' value='Reset!' />

</form>";
echo "<br />";
echo "<input type='button' id='custom' value='显示/隐藏今日库存' onClick='showrest();' />";

echo "
<br />
<div id='viewrest'>";
include ('Viewrest.php');
echo "</div>";
?>


</div>
<?php 
include ('../../build.php');
?>
</body>

</html>