<!DOCTYPE html>

<html lang="zh-CN" xmlns="http://www.w3.org/1999/html"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">
    <title>农场猪销售预订系统</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/navbar-fixed-top.css" rel="stylesheet">
    <script src="../../js/jquery-1.8.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function CreateSelect() {
            var p = $("<br>").appendTo($("#Obj"));
            var select = $("<select name='Object[]' class='form-control'/>").appendTo($("#Obj"));
            var option1 = $("<option value='腩肉'>腩肉</option>").appendTo(select);
            var option2 = $("<option value='瘦肉'>瘦肉</option>").appendTo(select);
            var option3 = $("<option value='排骨'>排骨</option>").appendTo(select);
            var option1 = $("<option value='扇骨'>扇骨</option>").appendTo(select);
            var option2 = $("<option value='筒骨'>筒骨</option>").appendTo(select);
            var option3 = $("<option value='猪手'>猪手</option>").appendTo(select);
            var option3 = $("<option value='猪脚'>猪脚</option>").appendTo(select);


        }
        function CreateHeight()
        {
            var p = $("<br>").appendTo($("#Hei"));
            var heig = $("<input type='text' class='form-control' name='Height[]' placeholder='斤/个,限整数'>").appendTo($("#Hei"));
        }
        function CreateName()
        {
            var p = $("<br>").appendTo($("#Nam"));
            var heig = $("<input type='text' class='form-control' name='Name[]' placeholder='姓名,必填'>").appendTo($("#Nam"));
        }
        function CreateTel()
        {
            var p = $("<br>").appendTo($("#Te"));
            var heig = $("<input type='text' class='form-control' name='Tel[]' placeholder='联系电话,必填'>").appendTo($("#Te"));
        }

    </script>
</head>
<style>
    body
    {
        overflow-x: hidden;
        overflow-y: hidden;
    }
</style>

<body>


<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="cursor:pointer">湛江海关机关服务中心</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a>预订</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="https://github.com">© 2015 Zjazure</a></li>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php
include ("ConnectDatabase.php");
$library=mysql_query("SELECT * FROM Library");
echo "<div class='container'>
    <div class='jumbotron'>
        <div class='row'>
            <form class='form-inline' method='post' action='CheckNew.php'>";

       echo "         <div class='form-group'>
                    <select name='Kind' class='form-control' style='display: none'>
                        <option value='猪肉'>猪肉</option>
                    </select>
                </div>";

         echo " <div class='form-group' id='Obj'>
                    <select name='Object[]' class='form-control'>";
                        while ($rowlibrary = mysql_fetch_array($library))
                        {
                            echo "<option value='$rowlibrary[Object]'>$rowlibrary[Object]</option>";
                            echo "<br />";
                        }
echo "
                    </select>
                </div>";

?>
                <div class='form-group' id="Hei">

                    <input type='text' class='form-control' id='Height' name='Height[]' placeholder="斤/个,限整数">
                </div>
                <div class='form-group' id="Nam">

                    <input type='text' class='form-control' id='Name' name='Name[]' placeholder='姓名,必填'>
                </div>

                <div class='form-group' id="Te">

                    <input type='text' class='form-control' id='Tel' name='Tel[]' placeholder='联系电话,必填'>
                </div>

                <button type='submit' class='btn btn-default'>提交</button>
                <button type='reset' class='btn btn-default'>重填</button>
                <button type='button' class='btn btn-default' onclick="CreateSelect();CreateHeight();CreateName();CreateTel();">+</button>

            </form>
</div>


<?php
include "Viewrest.php";
?>

    </div>
</div>






