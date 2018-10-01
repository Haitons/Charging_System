//后台登陆验证
function CheckForm()
{
	if($("#adminname").val() == "")
	{
		alert("请输入用户名！");
		$("#adminname").focus();
		return false;
	}
	if($("#password").val() == "")
	{
		alert("请输入密码！");
		$("#password").focus();
		return false;
	}
	if($("#validate").val() == "")
	{
        alert("请输入验证码！");
        $("#validate").focus();
        return false;
    }
}
$(function(){
	$("#username").focus(function(){
		$("#username").attr("class", "login_area_input_on"); 
	}).blur(function(){
		$("#username").attr("class", "login_area_input"); 
	});

	$("#password").focus(function(){
		$("#password").attr("class", "login_area_input_on mar8"); 
	}).blur(function(){
		$("#password").attr("class", "login_area_input mar8"); 
	});

	$("#validate").focus(function(){
		$("#validate").attr("class", "login_area_ckstr_on"); 
	}).blur(function(){
		$("#validate").attr("class", "login_area_ckstr"); 
	});

	$("#username").focus();
});


//验证管理员添加
function cfm_admin()
{
	if($("#username").val() == "")
	{
		alert("请输入用户名！");
		$("#username").focus();
		return false;
	}
	if($("#username").val().length<5 || $("#username").val().length>30)
	{
		alert("用户名长度不得小于5位或大于30位！");
		$("#username").focus();
		return false;
	}
	if($("#password").val() == "")
	{
		alert("请输入密码！");
		$("#password").focus();
		return false;
	}
	if($("#password").val().length<5 || $("#password").val().length>20)
	{
		alert("密码由5-16个字符组成，区分大小写！");
		$("#password").focus();
		return false;
	}
	if($("#repassword").val() == "")
	{
        alert ("请输入确认密码！");
        $("#repassword").focus();
        return false;
    }
	if($("#password").val() != $("#repassword").val())
	{
        alert ("两次密码不同！");
        $("#repassword").focus();
        return false;
    }
	if($("#email").val() == "")
	{
        alert ("邮箱不能为空！");
        $("#email").focus();
        return false;
    }
}

//验证管理员修改
function cfm_upadmin()
{
	if($("#username").val() == "")
	{
		alert("请输入用户名！");
		$("#username").focus();
		return false;
	}
	if($("#username").val().length<5 || $("#username").val().length>30)
	{
		alert("用户名长度不得小于5位或大于30位！");
		$("#username").focus();
		return false;
	}
	if($("#password").val() != "")
	{
		if($("#password").val().length<5 || $("#password").val().length>20)
		{
			alert("密码由5-20个字符组成，区分大小写！");
			$("#password").focus();
			return false;
		}
		if($("#repassword").val() == "")
		{
			alert("请填写确认密码！");
			$("#repassword").focus();
			return false;
		}
		if($("#password").val() != $("#repassword").val())
		{
			alert("两次密码不同！");
			$("#repassword").focus();
			return false;
		}
	}
	if($("#email").val() == "")
	{
        alert ("邮箱不能为空！");
        $("#email").focus();
        return false;
    }
}

//栏目管理验证
function cfm_infoclass()
{
	if($("#classname").val() == "")
	{
		alert("请填写栏目名称！");
		$("#classname").focus();
		return false;
	}
}

//类别验证
function cfm_btype()
{
	if($("#classname").val() == "")
	{
		alert("请填写栏目名称！");
		$("#classname").focus();
		return false;
	}
}

//列表信息验证
function cfm_infolm(v)
{
	if($("#classid").val() == "-1")
	{
		alert("请选择所属栏目！");
		$("#classid").focus();
		return false;
	}
	if(v=='Y' && $("#mainid").val()=="-1")
	{
		alert("请选择所属类别！");
		$("#mainid").focus();
		return false;
	}
	if($("#title").val() == "")
	{
		alert("请填写信息标题！");
		$("#title").focus();
		return false;
	}
}

//广告位验证
function cfm_adtype()
{
	if($("#classname").val() == "")
	{
		alert("请填写广告位名称！");
		$("#classname").focus();
		return false;
	}
	if($("#width") == "")
	{
		alert("请填写广告位宽度！");
		$("#width").focus();
		return false;
	}
	if($("#height") == "")
	{
		alert("请填写广告位高度！");
		$("#height").focus();
		return false;
	}
}

//广告验证
function cfm_admanager()
{
	if($("#title").val() == "")
	{
		alert("请填写广告标识！");
		$("#title").focus();
		return false;
	}
	if($("#classid").val() == "-1")
	{
		alert("请选择投放范围！");
		$("#classid").focus();
		return false;
	}
}

//友情链接验证
function cfm_weblink()
{
	if($("#webname").val() == "")
	{
		alert("请填写站点名称！");
		$("#webname").focus();
		return false;
	}
	if($("#linkurl").val() == "")
	{
		alert("请填写链接地址！");
		$("#linkurl").focus();
		return false;
	}
}

//检查留言提交表单
function cfm_msg()
{
	if($("#nickname").val() == "")
	{
		alert("请填写昵称！");
		$("#nickname").focus();
		return false;
	}
}

//检查会员注册表单
function cfm_member()
{
	if($("#username").val() == "")
	{
		alert("请填写用户名！");
		$("#username").focus();
		return false;
	}
	if($("#isuser").val() == "0")
	{
		$("#username").focus();
		return false;
	}
	if($("#username").val().length < 5)
	{
		alert("用户名不能小于5位！");
		$("#username").focus();
		return false;
	}
	if($("#password").val() == "")
	{
		alert("请填写密码！");
		$("#password").focus();
		return false;
	}
	if($("#password").val().length<6 || $("#password").val().length>20)
	{
		alert("密码不得小于6位或大于20位！");
		$("#password").focus();
		return false;
	}
	if($("#repassword").val() == "")
	{
		alert("请填写确认密码！");
		$("#repassword").focus();
		return false;
	}
	if($("#password").val() != $("#repassword").val())
	{
        alert ("两次密码不同！");
        $("#repassword").focus();
        return false;
    }
}

function cfm_upmember()
{
	if($("#password").val() != "")
	{
		if($("#password").val().length<6 || $("#password").val().length>20)
		{
			alert("密码不得小于6位或大于20位！");
			$("#password").focus();
			return false;
		}
		if($("#repassword").val() == "")
		{
			alert("请填写确认密码！");
			$("#repassword").focus();
			return false;
		}
		if($("#password").val() != $("#repassword").val())
		{
			alert("两次密码不同！");
			$("#repassword").focus();
			return false;
		}
	}
}

//验证商品添加
function cfm_goods()
{
	if($("#classid").val() == "-1")
	{
		alert("请选择所属类别！");
		$("#classid").focus();
		return false;
	}
	if($("#title").val() == "")
	{
		alert("请填写商品名称！");
		$("#title").focus();
		return false;
	}
}

//验证评论
function cfm_review()
{
	if($("#goodsid").val() == "-1")
	{
		alert("请选择商品名称！");
		$("#goodsid").focus();
		return false;
	}
	if($("#nickname").val() == "")
	{
		alert("请填写用户昵称！");
		$("#nickname").focus();
		return false;
	}
	if($("#content").val() == "")
	{
		alert("请填写评论内容！");
		$("#content").focus();
		return false;
	}
}

//验证配送区域
function cfm_postarea()
{
	if($("#classname").val() == "")
	{
		alert("请填写配送区域名称！");
		$("#classname").focus();
		return false;
	}
	if($("#freight").val() == "")
	{
		alert("请填写配送区域价格！");
		$("#freight").focus();
		return false;
	}
}

//自定义菜单
function cfm_diymenu()
{
	if($("#classname").val() == "")
	{
		alert("请填写菜单名称！");
		$("#classname").focus();
		return false;
	}
}

//投票选项
function cfm_vote()
{
	if($("#title").val() == "")
	{
		alert("请填写投票标题！");
		$("#title").focus();
		return false;
	}
}

//导航菜单
function cfm_nav()
{
	if($("#classname").val() == "")
	{
		alert("请填写导航名称！");
		$("#classname").focus();
		return false;
	}
}