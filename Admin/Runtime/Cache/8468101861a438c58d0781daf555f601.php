<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>校园网络计费系统</title> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/theme.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simplebootadmin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simplebootadminindex.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/daohang.css" />

</head>
 
<body style="min-width:900px;" screen_capture_injected="true">
	<div id="loading"><i class="loadingicon"></i><span>正在加载...</span></div>
	<div id="right_tools_wrapper" >
		<!--<span id="right_tools_clearcache" title="清除缓存" onclick="javascript:openapp('<?php echo u('admin/setting/clearcache');?>','right_tool_clearcache','清除缓存');"><i class="fa fa-trash-o right_tool_icon"></i></span>
		--><span id="refresh_wrapper" title="刷新当前页" style='position:relative;top:-18px' ><i class="fa fa-refresh right_tool_icon"></i></span>
	</div>
	
	<div class="navbar" >
		<div class="navbar-inner">
			<div class="container-fluid" >
				<h2 style='color:red; position:relative;top:-10px'>校园网络计费系统</h2>
				<ul class="nav simplewind-nav pull-right" >
					<li style='background:red;height:1px ;width:900px;position:relative;top:-65px;'>
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="__PUBLIC__/images/logo-18.png" alt="稍等" style='float:right ;position:relative;top:20px;right:100px '>
							<span class="user-info"style='float:right'>
								欢迎,<?php echo (session('adminname')); ?>
							</span>
							<i class="fa fa-caret-down" style='float:right;position:relative;top:30px;left:80px'></i>
						</a>
						<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" style='float:right'>
							
							<li class="divider"></li>
							<li><a href="__APP__/Login/doLogout"><i class="fa fa-sign-out"></i> 退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
<div style='font-size:20px;height:35px;background:gray ;position:relative;top:-20px'>
<ul class="nav nav-pills">
	<li><a href="__URL__/user">用户管理</a></li>
	<li><a href="__URL__/jifei">计费策略</a></li>
	<li class="active"><a href="__URL__/yingzhang">营帐管理</a></li>
	<li><a href="__URL__/yunwei">运维管理</a></li>
	<li><a href="__URL__/quanxian">权限管理</a></li>
</ul>
</div>

	<div class="main-container container-fluid"style='position:relative;top:-20px'>

		<div class="sidebar" id="sidebar">
			<!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
			</div> -->

			<div id="nav_wraper">
			<ul class="nav nav-list">

					<li>
 
							<a href="javascript:openapp('/jifei/index.php/Tent/reCharge','tent_recharge','充值');">
								<i class="fa fa-cog"></i>
								<span class="menu-text">充值</span>
							</a>
 
						
					</li>

					<li>
 
							<a href="#" class="dropdown-toggle">
								<i class="fa fa-cog"></i>
								<span class="menu-text normal">缴费管理</span>
								<b class="arrow fa fa-angle-right normal"></b>
								<i class="fa fa-reply back"></i>
								<span class="menu-text back">返回</span>
								
							</a>
							
							<ul  class="submenu">
									
									<li>
											<a href="javascript:openapp('/jifei/index.php/Tent/czInfo','tent_czinfo','充值查询');">
												<i class="fa fa-caret-right"></i>
												<span class="menu-text">充值查询</span>
											</a>					
									</li>
									<li>
											<a href="javascript:openapp('/jifei/index.php/Tent/kfInfo','tent_kfinfo','扣费管理');">
												<i class="fa fa-caret-right"></i>
												<span class="menu-text">扣费管理</span>
											</a>					
									</li>
							</ul>	
 
						
					</li>
			</ul>
			</div>
			
		</div>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<a id="task-pre" class="task-changebt">←</a>
				<div id="task-content">
				<ul class="macro-component-tab" id="task-content-inner">
					<li class="macro-component-tabitem noclose" app-id="0" app-url="<?php echo u('main/index');?>" app-name="首页">
						<span class="macro-tabs-item-text">首页</span>
					</li>
				</ul>
				<div style="clear:both;"></div>
				</div>
				<a id="task-next" class="task-changebt">→</a>
			</div>

			<div class="page-content" id="content">
				<iframe src="<?php echo U('Main/index');?>" style="width:100%;height: 100%;" frameborder="0" id="appiframe-0" class="appiframe"></iframe>
			</div>
		</div>
		
	</div>
	
	<script src="__PUBLIC__/js/jquery.js"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script>
	var b = $("#sidebar").hasClass("menu-min");
	var a = "ontouchend" in document;  //判断该ontouchend事件是否在此页面可执行！
	$(".nav-list").on(
			"click",
			function(g) {
				var f = $(g.target).closest("a");
				if (!f || f.length == 0) {
					return
				}
				if (!f.hasClass("dropdown-toggle")) {
					if (b && "click" == "tap"
							&& f.get(0).parentNode.parentNode == this) {
						var h = f.find(".menu-text").get(0);
						if (g.target != h && !$.contains(h, g.target)) {
							return false
						}
					}
					return
				}
				var d = f.next().get(0);
				if (!$(d).is(":visible")) {
					var c = $(d.parentNode).closest("ul");
					if (b && c.hasClass("nav-list")) {
						return
					}
					c.find("> .open > .submenu").each(
							function() {
								if (this != d
										&& !$(this.parentNode).hasClass(
												"active")) {
									$(this).slideUp(150).parent().removeClass(
											"open")
								}
							})
				} else {
				}
				if (b && $(d.parentNode.parentNode).hasClass("nav-list")) {
					return false;
				}
				$(d).slideToggle(150).parent().toggleClass("open");
				return false;
			});
	</script>
	<script src="__PUBLIC__/js/index.js"></script>
	




</body>
</html>