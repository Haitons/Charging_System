<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/czllb' method='post' class="elegant-aero" style="position:relative;top:-12">
<h1>添加流量包</h1>
<label>
<span>上网账号:</span>
<input id="workid" type="text" name="workid" value="<?php echo ($data["workid"]); ?>"style="width:300"/>
</label>
<label>
<span>用户名:</span>
<input id="username" type="text" name="username" value="<?php echo ($data["username"]); ?>"style="width:300"/>
</label>
<label>
<span>可选流量包</span><select name="ulid" style="width:300">
<option value=1>50G半年流量包（50元）</option>
<option value=2>40G半年流量包（40元）</option>
<option value=3>30G半年流量包（30元）</option>
<option value=4>20G半年流量包（20元）</option>
<option value=5>10G半年流量包（10元）</option>
<option value=6>1G月流量包（3元）</option>
</select>
</label>
<span>&nbsp;</span>
<input type="submit" class="button" value="添加" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
<input type="hidden" name="workid" value="<?php echo ($data["workid"]); ?>"/>
<input type="hidden" name="lname" value="<?php echo (session('adminname')); ?>"/>
</form>
	
	
	</body>




</html>