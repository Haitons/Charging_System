<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/update' method='post' class="elegant-aero">
<h1>编辑用户信息</h1>
<label>
<span>用户账号:</span>
<input id="workid" type="text" name="workid"  value="<?php echo ($data["workid"]); ?>"style="width:300"/>
</label>
<label>
<span>用户名:</span>
<input id="username" type="text" name="username" value="<?php echo ($data["username"]); ?>"style="width:300"/>
</label>

<label>
<span>用户类型：</span><select name="type" style="width:300">
<option value=0>学生</option>
<option value=1>教职工</option>
<option value=2>家属区</option>
</select>
</label>
<label>
<span>学号/工号:</span>
<input id="workid" type="text" name="workid"  value="<?php echo ($data["workid"]); ?>" style="width:300"/>
</label>
<label>
<span>证件号:</span>
<input id="credid" type="text" name="credid" value="<?php echo ($data["credid"]); ?>"style="width:300"/>
</label>
<label>
<span>手机号:</span>
<input id="telephone" type="text" name="telephone"  value="<?php echo ($data["telephone"]); ?>"style="width:300"/>
</label>

<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
</form>
	
	
	</body>




</html>