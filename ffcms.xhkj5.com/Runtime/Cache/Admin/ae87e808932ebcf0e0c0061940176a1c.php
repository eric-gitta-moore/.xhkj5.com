<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Left</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-left.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("a").click(function(){
		$("a").removeClass("on"); 
		$(this).addClass("on");
		$(this).blur();
	});
});
</script>
<base target="right">
</head>
<body class="body">
<table width="140" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top" class="left">
<div id="menu0" style="display:block">
<a href="?s=Admin-Config-Base" class="on">全局配置</a>
<a href="?s=Admin-Config-Rewrite">URL优化</a>
<a href="?s=Admin-Config-Pay">付费点播</a>
<a href="?s=Admin-Config-Model">内容设置</a>
<a href="?s=Admin-Player-Show">播放器设置</a>
<a href="?s=Admin-Config-Cache">缓存设置</a>
<a href="?s=Admin-Config-Caiji">采集设置</a>
<a href="?s=Admin-Config-File">附件设置</a>
<a href="?s=Admin-Config-Email">邮件设置</a>
<a href="?s=Admin-Config-Register">注册设置</a>
<a href="?s=Admin-Config-User">用户设置</a>
<a href="?s=Admin-Index-Right">运行环境</a>
</div>
<div id="menu1" style="display:none">
<a href="?s=Admin-Cache-Show" class="on">缓存管理</a>
<a href="?s=Admin-Pic-Tool">附件管理</a>
<a href="?s=Admin-Orders-Show">订单管理</a>
<a href="?s=Admin-Tag-Show">标签管理</a>
<a href="?s=Admin-Tpl-Show">模板管理</a>
<a href="?s=Admin-Slide-Show">首页轮播</a>
<a href="?s=Admin-Slide-Add">添加轮播</a>
<a href="?s=Admin-Ads-Show">广告管理</a>
<a href="?s=Admin-Ads-Add">添加广告</a>
<a href="?s=Admin-Link-Show">友情链接</a>
<a href="?s=Admin-Link-Add">添加友情链接</a>
</div>
<div id="menu2" style="display:none">
<a href="?s=Admin-Nav-Show" class="on">导航管理</a>
<a href="?s=Admin-Nav-Add">添加导航</a> 
</div>
<div id="menu3" style="display:none">
<a href="?s=Admin-List-Show" class="on">分类管理</a>
<a href="?s=Admin-List-Add">添加分类</a>
</div>
<div id="menu4" style="display:none">
<a href="?s=Admin-Cj-Add">添加资源库</a>
<a href="?s=Admin-Cj-Show-type-1" class="on">视频资源库</a>
<a href="?s=Admin-Cj-Show-type-2">文章资源库</a>
<!--<a href="?s=Admin-Cj-Show-type-3">专题资源库</a> -->
<a href="?s=Admin-Cj-Show-type-4">用户资源库</a>
<a href="?s=Admin-Cj-Show-type-5">评论资源库</a>
<a href="?s=Admin-Cj-Show-type-6">剧情资源库</a>
<!--<a href="?s=Admin-Cj-Show-type-7">明星资源库</a>
<a href="?s=Admin-Cj-Show-type-8">角色资源库</a> -->
<a href="?s=Admin-Cj-Win" target="_blank">定时自动采集</a>
<a href="http://cdn.feifeicms.co/server/v3/jump.php?id=1&version=<?php echo L("feifeicms_version");?>" style="color:#F00" target="_blank">搜索资源库</a>
</div>
<div id="menu5" style="display:none">
<a href="?s=Admin-Vod-Show" class="on">视频管理</a>
<a href="?s=Admin-Vod-Add">添加视频</a>
<a href="?s=Admin-Vod-Show-url-1" class="line">无播放地址</a>
<a href="?s=Admin-Vod-Show-inputer-feifeicms" class="line">已锁定视频</a>
<a href="?s=Admin-Vod-Show-scenario-1" class="line">有分集剧情</a>
<a href="?s=Admin-Vod-Show-series-1" class="line">有系列影片</a>
<a href="?s=Admin-Vod-Show-ispay-1" class="line">VIP会员包时</a>
<a href="?s=Admin-Vod-Show-price-1" class="line">单片付费点播</a>
</div>
<div id="menu6" style="display:none">
<a href="?s=Admin-News-Show" class="on">文章管理</a>
<a href="?s=Admin-News-Add">添加文章</a>
</div>
<div id="menu7" style="display:none">
<a href="?s=Admin-Special-Show" class="on">专题管理</a>
<a href="?s=Admin-Special-Add">添加专题</a>
</div>
<div id="menu8" style="display:none">
<a href="?s=Admin-Forum-Show" class="on">所有评论</a>
<a href="?s=Admin-Forum-Show-sid-1">视频评论</a>
<a href="?s=Admin-Forum-Show-sid-2">文章评论</a>
<a href="?s=Admin-Forum-Show-sid-3">专题评论</a>
<a href="?s=Admin-Forum-Show-sid-5">留言管理</a>
</div>
<div id="menu9" style="display:none">
<a href="?s=Admin-User-Show" class="on">用户管理</a>
<a href="?s=Admin-User-Add">添加用户</a>
<a href="?s=Admin-Record-Show">用户日志</a>
<a href="?s=Admin-Admin-Show">后台用户</a>
<a href="?s=Admin-Admin-Add">添加管理员</a>
</div>
<div id="menu10" style="display:none">
<a href="?s=Admin-Create-Show" class="on">网站生成选项</a>     
<a href="?s=Admin-Create-Index">生成网站首页</a>
<a href="?s=Admin-Create-vod_detail_day-vod_day-1-jump-1">生成当天视频</a>
<a href="?s=Admin-Create-news_detail_day-news_day-1">生成当天文章</a>
</div>
<div id="menu11" style="display:none">
<a href="?s=Admin-Data-Show" class="on">数据库备份</a>
<a href="?s=Admin-Data-Restore">数据库恢复</a>
<a href="?s=Admin-Data-Sql">执行SQL语句</a>
<a href="?s=Admin-Data-Replace">数据批量替换</a>  
</div>
</td></tr>
</table>
</body>
</html>