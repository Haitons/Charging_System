<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action="__URL__/search" method='post' class="elegant-aero">
		<h1>用户账号密码修改</h1>

<label>
<span>上网账号:</span>
<input id="workid" type="text" name="workid" value="<?php echo ($data["workid"]); ?>"style="width:300"/>
<input type="submit" class="button" value="搜索" style="position:relative;left:8px"/>
</label>
		</form>
	<form action='__URL__/zhanghaoxg' method='post' class="elegant-aero" style="position:relative;top:-12">

<label>
<span>用户名:</span>
<input id="username" type="text" name="username" value="<?php echo ($data["username"]); ?>"style="width:300"/>
</label>
<label>
<span>证件号:</span>
<input id="credid" type="text" name="credid" value="<?php echo ($data["credid"]); ?>"style="width:300"/>
</label>
<label>
<span>新密码:</span>
<input id="username" type="password" name="password"style="width:300;height:30"/>
</label>

<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
<input type="hidden" name="workid" value="<?php echo ($data["workid"]); ?>"/>
</form>
	
	
	</body>




</html>