$task_content_inner = null;
$mainiframe=null;
var tabwidth=118; //标签的默认宽度
$loading=null;
$nav_wraper=$("#nav_wraper");
$(function () {
    $mainiframe=$("#mainiframe");
    $content=$("#content");

    $loading=$("#loading");
    //控制加载动画始终居中
    function loading_b(){ 
        $loading.css({
            top:  ($(window).height() - $loading.height()) / 2,
            left: ($(window).width() - $loading.width()) / 2
        });
    }
    loading_b();

    var headerheight=100;
    $content.height($(window).height()-headerheight);
    $nav_wraper.height($(window).height()-headerheight);
 
    $(window).resize(function(){
        $content.height($(window).height()-headerheight);
        loading_b();
        calcTaskitemsWidth();
    });
    $("#content iframe").load(function(){
        $loading.hide();
    });
    
    $task_content_inner = $("#task-content-inner");
   
    //单独点击某个标签触发的加载函数
    $("#task-content-inner li").live("click", function () {
        openapp($(this).attr("app-url"), $(this).attr("app-id"), $(this).attr("app-name"), $(this));
        return false;
    });
    //双击关闭标签
    $("#task-content-inner li").live("dblclick", function () {
        closeapp($(this));
        return false;
        
    });
    //点击X关闭标签
    $("#task-content-inner a.macro-component-tabclose").live("click", function () {
        closeapp($(this).parent());
        return false;
    });
    
    //向前向后改变标签栏位置
    $("#task-next").click(function () {
        var marginleft = $task_content_inner.css("margin-left");
        marginleft = marginleft.replace("px", "");
        var width = $("#task-content-inner li").length * tabwidth;
        var content_width = $("#task-content").width();
        var lesswidth = content_width - width;
        marginleft = marginleft - tabwidth <= lesswidth ? lesswidth : marginleft - tabwidth;

        $task_content_inner.stop();
        $task_content_inner.animate({ "margin-left": marginleft + "px" }, 300, 'swing');
    });
    $("#task-pre").click(function () {
        var marginleft = $task_content_inner.css("margin-left");
        marginleft = parseInt(marginleft.replace("px", ""));
        marginleft = marginleft + tabwidth > 0 ? 0 : marginleft + tabwidth;
        $task_content_inner.stop();
        $task_content_inner.animate({ "margin-left": marginleft + "px" }, 300, 'swing');
    });
    
    //刷新可见当前iframe
    $("#refresh_wrapper").click(function(){
        var $current_iframe=$("#content iframe:visible");
        $loading.show();
        //$current_iframe.attr("src",$current_iframe.attr("src"));
        $current_iframe[0].contentWindow.location.reload();  //取得可见iframe的window对象contentWindow
        return false;
    });

    calcTaskitemsWidth();
});
//时刻计算便签栏的宽度
function calcTaskitemsWidth() {
    var width = $("#task-content-inner li").length * tabwidth;
    $("#task-content-inner").width(width);
    if (($(document).width()-268-tabwidth- 30 * 2) < width) {
        $("#task-content").width($(document).width() -268-tabwidth- 30 * 2);
        $("#task-next,#task-pre").show();
    } else {
        $("#task-next,#task-pre").hide();
        $("#task-content").width(width);
    }
}
//关闭当前iframe
function close_current_app(){
    closeapp($("#task-content-inner .current"));
}

//关闭标签函数
function closeapp($this){
    if(!$this.is(".noclose")){
        $this.prev().click();
        $this.remove();
        calcTaskitemsWidth();
        $("#task-next").click();
    }
     
}





var task_item_tpl ='<li class="macro-component-tabitem">'+
'<span class="macro-tabs-item-text"></span>'+
'<a class="macro-component-tabclose" href="javascript:void(0)" title="点击关闭标签"><span></span><b class="macro-component-tabclose-icon">×</b></a>'+
'</li>';

var appiframe_tpl='<iframe style="width:100%;height: 100%;" frameborder="0" class="appiframe"></iframe>';

function openapp(url, appid, appname, selectObj) {
    var $app = $("#task-content-inner li[app-id='"+appid+"']");
    $("#task-content-inner .current").removeClass("current");
    if ($app.length == 0) {
        var task = $(task_item_tpl).attr("app-id", appid).attr("app-url",url).attr("app-name",appname).addClass("current");
        task.find(".macro-tabs-item-text").html(appname);
        $task_content_inner.append(task);
        $(".appiframe").hide();
        $loading.show();
        $appiframe=$(appiframe_tpl).attr("src",url).attr("id","appiframe-"+appid);
        $appiframe.appendTo("#content");
        $appiframe.load(function(){
            $loading.hide();
        });
        calcTaskitemsWidth();
    } else {
        $app.addClass("current");
        $(".appiframe").hide();
        var $iframe=$("#appiframe-"+appid);
        var src=$iframe.get(0).contentWindow.location.href;
        src=src.substr(src.indexOf("://")+3);
        /*if(src!=GV.HOST+url){
            $loading.show();
            $iframe.attr("src",url);
            $appiframe.load(function(){
                $loading.hide();
            });
        }*/
        $iframe.show();
        $mainiframe.attr("src",url);
    }
    
    //
    var itemoffset= $("#task-content-inner li[app-id='"+appid+"']").index()* tabwidth;
    var width = $("#task-content-inner li").length * tabwidth;
   
    var content_width = $("#task-content").width();
    var offset=itemoffset+tabwidth-content_width;
    
    var lesswidth = content_width - width;
    
    var marginleft = $task_content_inner.css("margin-left");
   
    marginleft =parseInt( marginleft.replace("px", "") );
    var copymarginleft=marginleft;
    if(offset>0){
        marginleft=marginleft>-offset?-offset:marginleft;
    }else{
        marginleft=itemoffset+marginleft>=0?marginleft:-itemoffset;
    }
    
    if(-itemoffset==marginleft){
        marginleft = marginleft + tabwidth > 0 ? 0 : marginleft + tabwidth;
    }
    
    //alert("cddd:"+(content_width-copymarginleft)+" dddd:"+(-itemoffset));
    if(content_width-copymarginleft-tabwidth==itemoffset){
        marginleft = marginleft - tabwidth <= lesswidth ? lesswidth : marginleft - tabwidth;
    }
    
    $task_content_inner.animate({ "margin-left": marginleft + "px" }, 300, 'swing');
    
    
    
  
}

