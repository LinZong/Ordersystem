<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DeletePeople</title>
</head>

<body>
<?php

include ('ViewAllOrder.php');


?>
<form id="findorderer" method="post" action="LookforMain.php">
<a>以姓名作为检索条件</a>
<br />

<input type="text" name="Name" value="姓名" onclick="this.value='';focus()"/>
<input type="submit" name="Submit" value="确认" />
<input type="reset" name="Submit2" value="重置" />

</form>






</body>
</html>