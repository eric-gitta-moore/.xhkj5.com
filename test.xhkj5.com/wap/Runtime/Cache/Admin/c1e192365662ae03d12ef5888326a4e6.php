<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>模板管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/jquery/jquery-1.7.2.min.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<form action="index.php?s=Admin-Tpl-Update" method="post" name="myform" id="myform">
<thead>
<tr><th class="r pd" colspan="2" style="text-align:left">模板编辑：<input name="filename" type="text" value="<?php echo ($filename); ?>" class="w300">（不允许用 “..” 形式的路径）</th></tr>
</thead>
<tr><td class="r ct" style="padding:5px 0px"><textarea name="content" style="width:95%;height:450px"><?php echo ($content); ?></textarea></td></tr>
<tr><td class="r"><input type="submit" name="submit" class="submit" value="提交" > <input type="reset" name="Input" class="submit" value="重置" ></td></tr>
{__NOTOKEN__}</form> 
</table>
﻿﻿<br /><center>&#80;&#111;&#119;&#101;&#114;&#101;&#100;&#32;&#98;&#121;&#32;<a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#106;&#105;&#117;&#116;&#111;&#117;&#115;&#104;&#101;&#46;&#99;&#110;" target="_blank" ><font color="#FF0000">&#20061;&#22836;&#34503;&#24433;&#38498;</font></a>,&#30001;&#39134;&#39134;&#31243;&#24207;&#20108;&#27425;&#24320;&#21457;</center>
</body>
</html>