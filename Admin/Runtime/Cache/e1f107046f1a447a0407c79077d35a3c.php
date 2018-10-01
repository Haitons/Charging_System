<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/tcupdate' method='post' class="elegant-aero">
<h1>套餐变更</h1>
<label>
<span>用户账号:</span>
<input id="workid" type="text" name="workid"  value="<?php echo ($data["workid"]); ?>"style="width:300"/>
</label>
<label>
<span>用户名:</span>
<input id="username" type="text" name="username" value="<?php echo ($data["username"]); ?>"style="width:300"/>
</label>

<label>
<span>可选套餐：</span>
<select name="ntid" style="width:300">
<?php if($data["type"] == 0): ?><option value=10>学生/教职工流量1G（默认/免费)</option>
<option value=4>学生流量8G_10元每月</option>
<option value=3>学生流量20G_20元每月</option>
<option value=2>学生流量35G_30元每月</option>
<option value=1>学生流量50G_40元每月</option>
<?php elseif($data["type"] == 1): ?>
<option value=10>学生/教职工流量1G（默认/免费)</option>
<option value=7>教职工流量8G_15元每月</option>
<option value=5>教职工流量20G_25元每月</option>
<option value=6>教职工流量30G_30元每月</option>
<?php else: ?>
<option value=9>家属区10M带宽包年_400元/年</option>
<option value=8>家属区20M带宽包年_600元/年</option><?php endif; ?>
</select>
</label>

<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
</form>
	
	
	</body>




</html>