<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校园网络计费管理系统</title>
<link href="__PUBLIC__/css/log.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script language="javascript" src="__PUBLIC__/js/checkf.func.js"></script>
</head>

<body class="login_body">
<div class="login_warp">
	<div class="login_area">
		<form name="login" method="post" action="__URL__/doLogin" onSubmit="return CheckForm()">
			<input type="text" name="adminname" id="adminname" class="login_area_input" maxlength="20" />
			<input type="password" name="password" id="password" class="login_area_input mar8" maxlength="16" />
			<div class="check_str">
				<input type="text" name="code" class="login_area_ckstr" id="code" maxlength="4" />
				<span>
					<img id="ckstr" name="ckstr" src="__APP__/Public/code" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> 
					<a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a>
				</span>
			</div>
			<div class="hr_20"></div>
			<input type="submit" class="login_area_btn" value="" style="cursor:pointer;" />
			<input type="hidden" name="dopost" value="login" />
		</form>
	</div>
	<div class="login_area_text">欢迎您使用<span>校园网络</span>计费管理系统</div>
</div>
</body>
</html>