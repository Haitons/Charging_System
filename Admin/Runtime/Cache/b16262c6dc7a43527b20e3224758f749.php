<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/update' method='post' class="elegant-aero">
<h1>编辑管理员信息</h1>
<label>
<span>管理员账号:</span>
<input id="adminname" type="text" name="adminname"  value="<?php echo ($data["adminname"]); ?>"style="width:300"/>
</label>


<label>
<span>所属角色：</span><select name="level" style="width:300">
<option value=1>超级管理员</option>
<option value=2>管理员</option>
<option value=3>一般管理员</option>
<option value=4>操作员</option>
</select>
</label>
<label>
<span>邮箱:</span>
<input id="mail" type="text" name="mail"  value="<?php echo ($data["mail"]); ?>" style="width:300"/>
</label>

<label>
<span>手机号:</span>
<input id="telephone" type="text" name="telephone"  value="<?php echo ($data["telephone"]); ?>"style="width:300"/>
</label>
<label>
<span>证件号:</span>
<input id="credid" type="text" name="credid"  value="<?php echo ($data["credid"]); ?>"style="width:300"/>
</label>
<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
</form>
	
	
	</body>




</html>