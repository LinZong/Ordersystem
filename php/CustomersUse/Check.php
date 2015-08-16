<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CheckYourOrder</title>
</head>



</style>

<body>
<?php

if ($_POST['Kind']=='请选择')
{
	echo "信息没有填完，请返回重新填写!";
	header("refresh:3;url=index.php");
	break;
}else if ($_POST['Object']=='请选择')
{
	echo "信息没有填完，请返回重新填写!";
	header("refresh:3;url=index.php");
	break;
}else if ($_POST['Height']=='')
{
	echo "信息没有填完，请返回重新填写!";
	header("refresh:3;url=index.php");
	break;
}else if ($_POST['Height']=='重量(斤/个,限整数)')
{
	echo "信息没有填完，请返回重新填写!";
	header("refresh:3;url=index.php");
	break;
}else if ($_POST['Name']=='')
{
		echo "信息没有填完，请返回重新填写!";
		header("refresh:3;url=index.php");
		break;
}else if ($_POST['Name']=='姓名')
{
		echo "信息没有填完，请返回重新填写!";
		header("refresh:3;url=index.php");
		break;
}else if ($_POST['Tel']=='')	
{
			echo "信息没有填完，请返回重新填写!";
		    header("refresh:3;url=index.php");	
			break;
}else if ($_POST['Tel']=='联系电话')
{
	echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
	break;	
	
}else if (strlen($_POST['Tel']) != 11 and strlen($_POST['Tel']) != 7)
{   
    echo "联系电话位数不对，请返回重新填写!";
    header("refresh:3;url=index.php");
	break;
}
else {
	
	echo "<br />";
	goto OK;
	}
		
OK:


$customKind = $_POST['Kind'];
$customObject = $_POST['Object'];
$custonHeight = $_POST['Height'];
include ("ConnectDatabase.php");
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
foreach ($_POST['Object'] as $Object)
{
    foreach ($_POST['Height'] as $Height)
    {
        foreach ($_POST['Name'] as $Name)
        {
            foreach ($_POST['Tel'] as $Tel)
            {
                mysql_query("INSERT INTO People (Kind, Object, Height, Name ,Tel)
VALUES ('$_POST[Kind]', '$Object', '$Height','$Name','$Tel')");
$oldcalc = mysql_query("SELECT * FROM Calc WHERE Object='$Object'");
$oldcalcheight = mysql_fetch_array($oldcalc);
$newcalcheight = ($Height+$oldcalcheight['Height']);
$kind = $_POST['Kind'];
mysql_query("UPDATE Calc SET Height = '$newcalcheight'
WHERE Kind = '$kind' AND Object = '$Object'");
            }
        }
    }
}

echo "Upload Completed";


?>


</body>
</html>

