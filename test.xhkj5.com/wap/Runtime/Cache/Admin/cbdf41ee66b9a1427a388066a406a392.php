<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-top.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
	$("#clear").click(function(){
		$ajaxurl = $(this).attr('href');
		$.get($ajaxurl,null,function(data){
			$("#cache").show();
			$("#cache").html(' <font color=#ff6600>'+data+'</font> ');
			window.setTimeout(function(){
				$("#cache").hide();
			},2000);
		});
		return false;
	});
	$("#cache").click(function(){
		$("#cache").hide();
		return false;
	});
});
var Tabs = function(obj,sid){
	var tabList = document.getElementById("topmenu").getElementsByTagName("a");
	for(var i=0;i<tabList.length;i++){
		if(obj.innerHTML == tabList[i].innerHTML){
			tabList[i].className = "abcd";
		}else{
			tabList[i].className = "";
		}
	}
	var _frmleft = parent.left;
	for(var i=0;i<=9;i++){
		if(i == sid){
			_frmleft.document.getElementById('menu'+i).style.display = 'block';
		}else{
			_frmleft.document.getElementById('menu'+i).style.display = 'none';
		}
	}
}
</script>
</head>
<body>
<div class="logo"><img src="__PUBLIC__/images/admin/top_logo.gif"></div>
<div class="tabs" id="topmenu">
    <li><a href="?s=Admin-Admin-Config" target="right" onClick="Tabs(this,0)"><span>系统管理</span></a></li>
    <li><a href="?s=Admin-Vod-Show" target="right" onClick="Tabs(this,1)"><span>内容管理</span></a></li>
    <li><a href="?s=Admin-Xml-Show" target="right" onClick="Tabs(this,2)"><span>采集管理</span></a></li>
    <li><a href="?s=Admin-Cache-Show" target="right" onClick="Tabs(this,3)"><span>扩展工具</span></a></li>
    <li><a href="?s=Admin-Tpl-Show" target="right" onClick="Tabs(this,4)"><span>模板管理</span></a></li>
    <li><a href="?s=Admin-Create-Show" target="right" onClick="Tabs(this,5)"><span>静态生成</span></a></li>
    <li><a href="?s=Admin-Admin-Show" target="right" onClick="Tabs(this,6)"><span>用户中心</span></a></li>
    <li><a href="?s=Admin-Data-Show" target="right" onClick="Tabs(this,7)"><span>数据库维护</span></a></li>
    <li><a href="?s=User-Member-manage" target="right" onClick="Tabs(this,9)"><span>会员管理</span></a></li>
    <li><a href="http://www.jiutoushe.cn/vip/bangzhu.html"  target="right" onClick="Tabs(this,8)"><span>官方帮助</span></a></li>
	<li><a href="https://item.taobao.com/item.htm?id=526520981822 "  target="_blank" onClick="Tabs(this,9)"><span>检查更新</span></a></li>

</div>
<div class="tophr">
	<div class="left">你好：<?php echo $_SESSION["admin_name"];?>，<a href="https://item.taobao.com/item.htm?id=526520981822"  target="_blank" >检查更新</a></div>
    <div class="right"><a href="?s=Admin-Cache-Del" target='right' id="clear" title="包括模板,数据库等系统缓存">清空缓存</a> <a id="cache"></a> | <a href="?s=Admin-Index" target='_top'>后台首页</a> | <a href="<?php echo C("site_path");?>" target="_blank">网站首页</a> | <a href="?s=Admin-Login-Logout" target="_top">注销退出</a></div>
</div>
</body>
</html>