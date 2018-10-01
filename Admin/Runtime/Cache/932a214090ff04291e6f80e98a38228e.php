<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/information.css" />
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>上网账号</th>
				<th>用户名</th>
				<th>当月套餐</th>
				<th>次月套餐</th>
				<th>账号状态</th>
				<th>流量包流量</th>
				<th>开通时间</th>
				<th>套餐操作</th>
				<th>账号操作</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["workid"]); ?></td>
					<td><?php echo ($v["username"]); ?></td>
					<td><?php echo ($v["tcname"]); ?></td>
					<td><?php echo ($v["ntaocan"]["tcname"]); ?></td>
					<td>
					<?php if($v["state"] == 1): ?>正常
							<?php else: ?>销户<?php endif; ?>
					</td>
					<td><?php echo ($v["soil"]); ?>M</td>
					<td><?php echo (date("Y年m月d日 H:i:s",$v["kttime"])); ?></td>
					<td><a href="__URL__/tcchange/id/<?php echo ($v["id"]); ?>">套餐变更</a>|<a href="__URL__/tjllb/id/<?php echo ($v["id"]); ?>">流量包</a></td>
					<td><a href="__URL__/modify/id/<?php echo ($v["id"]); ?>">编辑</a>|<a href="__URL__/account/id/<?php echo ($v["id"]); ?>">销户</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	
	</body>
</html>