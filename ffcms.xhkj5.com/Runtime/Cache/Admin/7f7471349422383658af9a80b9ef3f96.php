<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>采集配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
<div class="title">
	<div class="left">采集参数配置</div>
</div>
<div class="add">
<form action="?s=Admin-Config-Update-type-caiji" method="post" name="myform" id="myform">
<ul><li class="left">自动生成TAG：</li>
  <li class="right"><select name="config[collect_tags]" class="w128"><option value="1">开启</option><option value="0" <?php if(($collect_tags)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select><label>添加数据时是否自动生成TAG</label></li>
</ul>
<ul><li class="left">采集相似度设置：</li>
  <li class="right"><input type="text" name="config[collect_name]" id="collect_name" value="<?php echo ($collect_name); ?>" maxlength="5" class="w120" title="按名称结尾，减去多少个字符">&nbsp;<label>使用此功能可以减少重名，但会加重采集时的服务器负担(0不检查)</label></li>
</ul>    
<ul><li class="left">采集跳转时间间隔：</li>
  <li class="right"><input type="text" name="config[collect_time]" id="collect_time" value="<?php echo ($collect_time); ?>" maxlength="5" class="w120">&nbsp;<label>每一页采集完毕后暂停几秒</label></li>
</ul>
<ul><li class="left">总人气随机最大值：</li>
  <li class="right"><input type="text" name="config[collect_hits]" id="collect_hits" value="<?php echo ($collect_hits); ?>" maxlength="5" class="w120">&nbsp;</li>
</ul> 
<ul><li class="left">顶踩随机最大值：</li>
  <li class="right"><input type="text" name="config[collect_updown]" id="collect_updown" value="<?php echo ($collect_updown); ?>" maxlength="5" class="w120">&nbsp;</li>
</ul>
<ul><li class="left">评分随机最大值：</li>
  <li class="right"><input type="text" name="config[collect_gold]" id="collect_gold" value="<?php echo ($collect_gold); ?>" maxlength="1" class="w120">&nbsp;</li>
</ul>
<ul><li class="left">评分人数随机最大值：</li>
  <li class="right"><input type="text" name="config[collect_golder]" id="collect_golder" value="<?php echo ($collect_golder); ?>" maxlength="5" class="w120">&nbsp;</li>
</ul>
<ul><li class="left">评论采集用户ID随机最大值：</li>
  <li class="right"><input type="text" name="config[collect_forum]" id="collect_forum" value="<?php echo (($collect_forum)?($collect_forum):99); ?>" maxlength="5" class="w120">&nbsp;</li>
</ul>
<ul><li class="left">第三方采集插件入库密码：</li>
  <li class="right"><input type="text" name="config[collect_passwd]" id="collect_passwd" value="<?php echo ($collect_passwd); ?>" class="w120">&nbsp;</li>
</ul>
<ul><li class="left">资源库API接口IP授权：</li>
  <li class="right"><textarea name="config[collect_ips]" id="collect_ips" style="height:100px"><?php echo ($collect_ips); ?></textarea><label>留空表示开放给所有人采集，多个IP用,号分隔</label></li>
</ul>
<!--  <ul><li class="left">采集伪原创：</li>
  <li class="right"><select name="config[collect_original]" class="w128"><option value="1">开启</option><option value="0" <?php if(($collect_original)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select><label>在采集数据时自动做同义词seo伪造</label></li>
</ul> -->  
<!-- -->
<ul class="footer">
	<input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
</ul>
</form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>