<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>add</title>
		<style>
		.elegant-aero {


background: #D2E9FF;
padding: 20px 20px 20px 20px;
font: 12px Arial, Helvetica, sans-serif;
color: #666;
}
.elegant-aero h1 {
font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
padding: 10px 10px 10px 20px;
display: block;
background: #C0E1FF;
border-bottom: 1px solid #B8DDFF;
margin: -20px -20px 15px;
}
.elegant-aero h1>span {
display: block;
font-size: 11px;
}
.elegant-aero label>span {
float: left;
margin-top: 10px;
color: #5E5E5E;
}
.elegant-aero label {
display: block;
margin: 0px 0px 5px;
}
.elegant-aero label>span {
float: left;
width: 20%;
text-align: right;
padding-right: 15px;
margin-top: 10px;
font-weight: bold;
}
.elegant-aero input[type="text"], .elegant-aero input[type="email"], .elegant-aero textarea, .elegant-aero select {
color: #888;
width: 70%;
padding: 0px 0px 0px 5px;
border: 1px solid #C5E2FF;
background: #FBFBFB;
outline: 0;
-webkit-box-shadow:inset 0px 1px 6px #ECF3F5;
box-shadow: inset 0px 1px 6px #ECF3F5;
font: 200 12px/25px Arial, Helvetica, sans-serif;
height: 30px;
line-height:15px;
margin: 2px 6px 16px 0px;
}
.elegant-aero textarea{
height:100px;
padding: 5px 0px 0px 5px;
width: 70%;
}
.elegant-aero select {

background: #fbfbfb url('down-arrow.png') no-repeat right;
background: #fbfbfb url('down-arrow.png') no-repeat right;
appearance:none;
-webkit-appearance:none;
-moz-appearance: none;
text-indent: 0.01px;
text-overflow: '';
width: 70%;
}
.elegant-aero .button{
padding: 10px 30px 10px 30px;
background: #66C1E4;
border: none;
color: #FFF;
box-shadow: 1px 1px 1px #4C6E91;
-webkit-box-shadow: 1px 1px 1px #4C6E91;
-moz-box-shadow: 1px 1px 1px #4C6E91;
text-shadow: 1px 1px 1px #5079A3;
}
.elegant-aero .button:hover{
background: #3EB1DD;
}
		
		
		
		</style>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
		<script>
			function CheckAdd()
			{
				if($("#llname").val() == "")
				{
					alert("请输入流量包名称！");
					$("#llname").focus();
					return false;
				}
				if($("#money").val() == "")
				{
					alert("请输入流量包金额！");
					$("#money").focus();
					return false;
				}
				if($("#lldata").val() == "")
				{
					alert("请输入流量包大小!");
					$("#lldata").focus();
					return false;
				}
				if($("#date").val() == "")
				{
					alert("请输入流量包有效期");
					$("#date").focus();
					return false;
				}
			
				
				
			}
		</script>
		
	</head>
	<body>
	<form action='__URL__/doLadd' method='post' name='myForm' class="elegant-aero" onSubmit="return CheckAdd()">
<h1>添加流量包
</h1>
<label>
<span><span style="color:red; font-size:15;">*</span>流量包名称:</span>
<input id="llname" type="text" name="llname" placeholder="请输入流量包名称" style="width:300"/>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>流量包金额（元）:</span>
<input id="money" type="text" name="money" placeholder="请输入流量包金额" style="width:300"/>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>流量包大小（M）:</span>
<input id="lldata" type="text" name="lldata" placeholder="请输入流量包大小" style="width:300"/>
</label>
<label>
<span>流量包类型：</span><select name="type" style="width:300">
<option value=1>普通</option>
<option value=0>特殊</option>
</select>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>有效期（个月）:</span>
<input id="date" type="text" name="date" placeholder="请输入流量包有效期" style="width:300"/>
</label>
<label>
<span>是否立即生效：</span><select name="effect" style="width:300">
<option value=1>是</option>
<option value=0>否</option>
</select>
</label>

<span>&nbsp;</span>
<input type="submit" class="button" value="添加" style="position:relative;left:550px"/>
</label>
</form>
	
	
	</body>




</html>