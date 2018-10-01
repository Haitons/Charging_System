<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/cz.css" />
		<script></script>
	</head>
	<body>
		<table class="gridtable">
			<tr>
				<th>套餐名称</th>
				<th>使用人数</th>
			</tr>
			<?php if(is_array($List)): $i = 0; $__LIST__ = $List;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v["tcname"]); ?></td>
					<td>
						<?php switch($<?php echo ($v["id); ?>"]): case "1": ?>ssss1<?php break;?>
						<?php default: ?>ssssss<?php endswitch;?>
					
					
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>

	
	</body>
</html>