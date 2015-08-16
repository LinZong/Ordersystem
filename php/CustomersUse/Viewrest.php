<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View the rest of the Library</title>
</head>
<?php

include "ConnectDatabase.php";

$library=mysql_query("SELECT * FROM Library");
$calc=mysql_query("SELECT * FROM Calc");

echo "

<table class='table table-striped'>
<tr>
<th>种类</th>
<th>库存量</th>
</tr>
";

while ($rowlibrary = mysql_fetch_array($library))
{
	$rowcalc = mysql_fetch_array($calc);
	$rest = ($rowlibrary['Height'])-($rowcalc['Height']);
	$unit = '斤';
	if ($rowlibrary['Object']=='猪手')
	{
		$unit = '个';
	}
	if ($rowlibrary['Object']=='猪脚')
	{
		$unit = '个';
	}
	echo "<tr>";
    echo "<td>".$rowlibrary['Object']."</td>";
    echo "<td>".$rest.$unit."</td>";
    echo "</tr>";
}

echo "</table>";
?>
<body>
</body>
</html>