<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/update' method='post' class="elegant-aero">
<h1>编辑套餐</h1>
<label>
<span>套餐名称:</span>
<input id="tcname" type="text" name="tcname"  value="<?php echo ($data["tcname"]); ?>"style="width:300"/>
</label>
<label>
<span>套餐类型：</span><select name="type" style="width:300">
<option value=1>流量</option>
<option value=0>宽带</option>
</select>
</label>
<label>
<span>总流量（M）:</span>
<input id="tcmuch" type="text" name="tcmuch"  value="<?php echo ($data["tcmuch"]); ?>" style="width:300"/>
</label>
<label>
<span>缴费周期（个月）:</span>
<input id="week" type="text" name="week" value="<?php echo ($data["week"]); ?>"style="width:300"/>
</label>
<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
</form>
	
	
	</body>




</html>