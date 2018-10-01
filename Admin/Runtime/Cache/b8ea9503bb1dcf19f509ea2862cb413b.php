<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/llb.css" />
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>流量包名称</th>
				<th>流量包金额</th>
				<th>流量包大小</th>
				<th>流量包类型</th>
				<th>有效期</th>
				<th>是否生效</th>
				<th>管理操作</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["llname"]); ?></td>
					<td><?php echo ($v["money"]); ?>元</td>
					<td><?php echo ($v["lldata"]); ?>M</td>
					<td>
					<?php if($v["type"] == 1): ?>普通
							<?php else: ?>特殊<?php endif; ?>
					</td>
					<td><?php echo ($v["date"]); ?>个月</td>
					<td>
					<?php if($v["effect"] == 1): ?>立即生效
							<?php else: ?>下月生效<?php endif; ?>
					</td>
					<td><a href="__URL__/lledit/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="__URL__/lldel/id/<?php echo ($v["id"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	
	</body>
</html>