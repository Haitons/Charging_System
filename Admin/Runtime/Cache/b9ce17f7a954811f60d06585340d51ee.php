<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>modify</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/modify.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
	</head>
	<body>
	<form action='__URL__/llupdate' method='post' class="elegant-aero">
<h1>编辑流量包</h1>
<label>
<span>流量包名称:</span>
<input id="llname" type="text" name="llname"  value="<?php echo ($data["llname"]); ?>"style="width:300"/>
</label>
<label>
<span>流量包金额(元):</span>
<input id="money" type="text" name="money"  value="<?php echo ($data["money"]); ?>" style="width:300"/>
</label>
<label>
<span>流量包大小（M）:</span>
<input id="lldata" type="text" name="lldata" value="<?php echo ($data["lldata"]); ?>"style="width:300"/>
</label>
<label>
<span>流量包类型：</span><select name="type" style="width:300">
<option value=1>普通</option>
<option value=0>特殊</option>
</select>
</label>
<label>
<span>有效期（月）:</span>
<input id="date" type="text" name="date" value="<?php echo ($data["date"]); ?>"style="width:300"/>
</label>
<label>
<span>是否立即生效：</span><select name="effect" style="width:300">
<option value=1>是</option>
<option value=0>否</option>
</select>
</label>
<span>&nbsp;</span>
<input type="submit" class="button" value="修改" style="position:relative;left:550px"/>
</label>
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
</form>
	
	
	</body>




</html>