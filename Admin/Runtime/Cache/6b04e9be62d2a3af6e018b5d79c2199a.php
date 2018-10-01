<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>首页</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/home.css" />
	</head>
	<body>
		<h3 style="background:#F5FFFA ;height:30;">校园网络计费系统</h3>
		
		<div class="title" style="width:200;text-align:center;">
		      活动用户数
		</div>
		<div class="title" style="font-weight:bold ;width:200;text-align:center;">
			<?php echo ($data); ?>
		</div>
	</body>
</html>