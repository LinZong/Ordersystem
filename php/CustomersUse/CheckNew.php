<!DOCTYPE html>
<head>
    <html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://v3.bootcss.com/favicon.ico">
        <title>Checking||Ordering</title>

    </head>

    <body>
<?php

OK:
include "ConnectDatabase.php";
$count = 0;

$height = $_POST['Height'];
$name = $_POST['Name'];
$tel = $_POST['Tel'];

foreach ($_POST['Object'] as $Object)
{
    include "Helpers.php";
    mysql_query("INSERT INTO People (Kind, Object, Height, Name ,Tel)
VALUES ('$_POST[Kind]', '$Object', '$height[$count]','$name[$count]','$tel[$count]')");
    $oldcalc = mysql_query("SELECT * FROM Calc WHERE Object='$Object'");
    $oldcalcheight = mysql_fetch_array($oldcalc);
    $newcalcheight = ($height[$count]+$oldcalcheight['Height']);
    $kind = $_POST['Kind'];
    mysql_query("UPDATE Calc SET Height = '$newcalcheight'
WHERE Kind = '$kind' AND Object = '$Object'");
    $count++;

}

echo "<script type='text/javascript'>
alert('已成功预订.3秒后返回首页.');
</script>";
header("refresh:3;url=index.php");
?>
