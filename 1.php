

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<title>求一个简单的jquery 显示隐藏div的html例子</title>
<script src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript">
    function showDiv() {
        //显示所有div
        $("div").show();
    }
    function showDiv1() {
        $("#div1").show();
    }
    function hideDiv() {
        //隐藏所有div
        $("div").hide();
    }
</script>
</head>
<body>
<div id="div1" style="display:none; border:1px solid red">这是隐藏的层div1</div>
<div id="div2" style="display:none; border:1px solid blue">这是隐藏的层div2</div>
<input type="button" value="显示div1" onClick="showDiv1();" />
<input type="button" value="显示所有div" onClick="showDiv();" />
<input type="button" value="隐藏所有div" onClick="hideDiv();" />
</body>
</html>
<body>
</body>
</html>