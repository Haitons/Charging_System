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
		var error=new Array();
		$(function(){
			
			$('input[name="adminname"]').blur(function(){
				var adminname=$(this).val();
				$.get('__URL__/checkid',{'adminname':adminname},function(data){
					if(data=="该用户已存在"){
					alert(data);
					error['adminname']=1;
					}
					else{
					error['adminname']=0;
					}
				});
			});
		});
			function CheckAdd()
			{
				if(error['adminname']==1){
					alert("该管理员账号已存在");
					
					return false;
				}
				if($("#adminname").val() == "")
				{
					alert("请输入管理员账号名！ ");
					$("#adminname").focus();
					return false;
				}
				if($("#password").val() == "")
				{
					alert("请输入密码！");
					$("#password").focus();
					return false;
				}
				
				if($("#credid").val() == "")
				{
					alert("请输入证件号");
					$("#credid").focus();
					return false;
				}
				if($("#telephone").val() == "")
				{
					alert("请输入手机号");
					$("#telephone").focus();
					return false;
				}
				
				
			}
		</script>
		
	</head>
	<body>
	<form action='__URL__/doReg' method='post' name='myForm' class="elegant-aero" onSubmit="return CheckAdd()">
<h1>添加管理员
<span style="color:red; font-size:15;position:relative;left:12">带*为必填项</span>
</h1>
<label>
<span><span style="color:red; font-size:15;">*</span>管理员账号:</span>
<input id="adminname" type="text" name="adminname" placeholder="请输入管理员账号" style="width:300"/>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>密码:</span>
<input id="password" type="password" name="password" placeholder="请输入密码" style="width:300;height:30"/>
</label>
<label>
<span>邮箱:</span>
<input id="mail" type="text" name="mail" placeholder="请输入邮箱" style="width:300"/>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>证件号:</span>
<input id="credid" type="text" name="credid" placeholder="请输入身份证号" style="width:300"/>
</label>
<label>
<span><span style="color:red; font-size:15;">*</span>手机号:</span>
<input id="telephone" type="text" name="telephone" placeholder="请输入手机号" style="width:300"/>
</label>

<label>
<span>所属角色：</span><select name="level" style="width:300">
<option value=1>超级管理员</option>
<option value=2>管理员</option>
<option value=3>一般管理员</option>
<option value=4>操作员</option>
</select>
</label>
<span>&nbsp;</span>
<input type="submit" class="button" value="添加" style="position:relative;left:550px"/>
</label>
</form>
	
	
	</body>




</html>