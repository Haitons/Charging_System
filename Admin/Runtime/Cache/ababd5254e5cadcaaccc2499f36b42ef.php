<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/record.css" />
		<script></script>
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>上网账号</th>
				<th>用户名</th>
				<th>流量包名称</th>
				<th>添加时间</th>
				<th>操作人</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["workid"]); ?></td>
					<td><?php echo ($v["username"]); ?></td>
					<td><?php echo ($v["name"]); ?></td>
					<td><?php echo (date("Y年m月d日 H:i:s",$v["time"])); ?></td>
					<td><?php echo ($v["operator"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
	
	</body>
</html>