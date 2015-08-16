<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Background Manager</title>
</head>

<body>



<a>请注意  这里的选项并不同于Homepage的Order，这里的数据将会用于更新数据库！</a>

<form method="post" action="Updatedata.php">

<select name="Kind">
    <option value="水果">水果</option>
    <option value="肉">肉</option>
    <option value="蔬菜">蔬菜</option>
</select>

<select name="Object">
    <option value="苹果">苹果</option>
    <option value="猪肉">猪肉</option>
    <option value="青菜">青菜</option>
</select>
<input type="text" name="Height" />
<input type="submit" name="Submit" value="OK!" />
<input type="reset" name="Submit2" value="Reset!" />

</form>


</body>
</html>