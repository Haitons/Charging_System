<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/information.css" />
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>ID</th>
				<th>管理员账号</th>
				<th>所属角色</th>
				<th>邮箱</th>
				<th>手机号</th>
				<th>证件号</th>
				<th>管理操作</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["adminname"]); ?></td>
					<td>
					<?php if($v["level"] == 1): ?>超级管理员
							<?php elseif($v["level"] == 2): ?>管理员
							<?php elseif($v["level"] == 3): ?>一般管理员
							<?php else: ?>操作员<?php endif; ?>
					</td>
					<td><?php echo ($v["mail"]); ?></td>
					<td><?php echo ($v["telephone"]); ?></td>
					<td><?php echo ($v["credid"]); ?></td>
					<td><a href="__URL__/modify/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="__URL__/del/id/<?php echo ($v["id"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	
	</body>
</html>