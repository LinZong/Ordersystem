<?php


if ($_POST['Kind']=='请选择')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($Object=='请选择')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($height[$count]=='')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($name[$count]=='')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($name[$count]=='姓名')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($tel[$count]=='')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}else if ($tel[$count]=='联系电话')
{
    echo "信息没有填完，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;

}else if (strlen($tel[$count]) != 11 and strlen($tel[$count]) != 7)
{
    echo "联系电话位数不对，请返回重新填写!";
    header("refresh:3;url=index.php");
    break;
}
else {

    echo "<br />";

}

end:

$i = 1;

?>