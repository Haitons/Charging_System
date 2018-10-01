<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/taocan.css" />
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>套餐名称</th>
				<th>套餐类型</th>
				<th>总流量</th>
				<th>缴费周期</th>
				<th>管理操作</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["tcname"]); ?></td>
					<td>
					<?php if($v["type"] == 1): ?>流量
							<?php else: ?>宽带<?php endif; ?>
					</td>
					<td><?php echo ($v["tcmuch"]); ?>M</td>
					<td><?php echo ($v["week"]); ?>个月</td>
					<td><a href="__URL__/edit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="__URL__/del/id/<?php echo ($v["id"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	
	</body>
</html>