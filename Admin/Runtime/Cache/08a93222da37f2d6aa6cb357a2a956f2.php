<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/information.css" />
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>用户账号</th>
				<th>用户名</th>
				<th>用户类型</th>
				<th>学号/工号</th>
				<th>手机号</th>
				<th>证件号</th>
				<th>余额</th>
				<th>添加用户时间</th>
				<th>管理</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["workid"]); ?></td>
					<td><?php echo ($v["username"]); ?></td>
					<td>
						<?php if($v["type"] == 0): ?>学生
							<?php elseif($v["type"] == 1): ?>教职工
							<?php else: ?>家属区<?php endif; ?>
					</td>
					<td><?php echo ($v["workid"]); ?></td>
					<td><?php echo ($v["telephone"]); ?></td>
					<td><?php echo ($v["credid"]); ?></td>
					<td><?php echo ($v["money"]); ?>元</td>
					<td><?php echo (date("Y年m月d日 H:i:s",$v["ustime"])); ?></td>
					<td><a href="__URL__/tent/id/<?php echo ($v["id"]); ?>">充值</a>|<a href="__URL__/modify/id/<?php echo ($v["id"]); ?>">编辑</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	</body>
</html>