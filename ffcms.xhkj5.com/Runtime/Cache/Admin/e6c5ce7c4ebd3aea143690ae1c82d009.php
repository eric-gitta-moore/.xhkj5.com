<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>附件配置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/jquery/jquery.insertsome.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script>
$(document).ready(function(){
	<?php if(($upload_thumb)  >  "0"): ?>showtab('thumb',1,1);<?php endif; ?>
	<?php if(($upload_water)  ==  "1"): ?>showtab('water',1,1);<?php endif; ?>
	<?php if(($upload_ftp)  ==  "1"): ?>showtab('ftptab',1,1);<?php endif; ?>	
});
</script>
</head>
<body class="body">
<div class="title">
	<div class="left">附件参数配置</div>
</div>
<div class="add">
	<form action="?s=Admin-Config-Update-type-file" method="post" name="myform" id="myform">
  <ul><li class="left">附件保存路径：</li>
    <li class="right"><input type="text" name="config[upload_path]" id="upload_path" value="<?php echo ($upload_path); ?>" maxlength="20" class="w120">&nbsp;</li>
  </ul>
   <ul><li class="left">附件路径保存风格：</li>
    <li class="right"><input type="text" name="config[upload_style]" id="upload_class" value="<?php echo ($upload_style); ?>" maxlength="20" class="w120">&nbsp;</li>
  </ul>
   <ul><li class="left">允许附件上传类型：</li>
    <li class="right"><input type="text" name="config[upload_class]" id="upload_style" value="<?php echo ($upload_class); ?>" maxlength="20" class="w120"><label>BMP格式的图片不支持水印与缩略图</label></li>
  </ul>        
  <ul><li class="left">批量保存远程图片数量：</li>
    <li class="right"><input type="text" name="config[upload_http_down]" maxlength="4" value="<?php echo ($upload_http_down); ?>" class="w120"> <label>工具>附件管理>每页下载图片的数量</label></li>
  </ul>
  <ul><li class="left">用户上传头像最大宽度：</li>
    <li class="right"><input type="text" name="config[upload_face_width]" id="upload_face_width" maxlength="4" value="<?php echo ($upload_face_width); ?>" class="w120"><label>设为0则不启用头像上传功能</label></li>
  </ul>   
  <ul><li class="left">用户上传头像最大高度：</li>
    <li class="right"><input type="text" name="config[upload_face_height]" id="upload_face_height" maxlength="4" value="<?php echo ($upload_face_height); ?>" class="w120"><label>设为0则不启用头像上传功能</label></li>
  </ul>
     
  <ul><li class="left">自动下载远程图片功能：</li>
    <li class="right"><select name="config[upload_http]" class="w128"><option value="1">开启</option><option value="0" <?php if(($upload_http)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select> <label>后台添加数据与一键采集时自动保存图片</label></li>
  </ul>                       
  <ul><li class="left">生成缩略图功能：</li>
    <li class="right"><select name="config[upload_thumb]" class="w128" onChange="if(this.value>0){showtab('thumb',1,1);}else{showtab('thumb',0,1)};"><option value="1">按等比例缩小</option><option value="2" <?php if(($upload_thumb)  ==  "2"): ?>selected<?php endif; ?>>指定大小截取</option><option value="0" <?php if(($upload_thumb)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select><label>按原图等比率缩小后的宽高小于该指定大小的图片将不生成缩略图</label></li>
  </ul>
  <ul id="thumb1" style="display:none"><li class="left">缩略图宽度与高度：</li>
    <li class="right"><input type="text" name="config[upload_thumb_w]" value="<?php echo ($upload_thumb_w); ?>" class="w120"> X <input  type="text" name="config[upload_thumb_h]" value="<?php echo ($upload_thumb_h); ?>" class="w120"></li>
  </ul>    
  <ul><li class="left">图片加水印功能：</li>
    <li class="right"><select name="config[upload_water]" class="w128" onChange="showtab('water',this.value,1);"><option value="1">开启</option><option value=0 <?php if(($upload_water)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select>&nbsp;</li>
  </ul>
  <div id="water1" style="display:none">
  <ul><li class="left">水印透明度：</li>
    <li class="right"><input type="text" name="config[upload_water_pct]" maxlength="3" value="<?php echo ($upload_water_pct); ?>" class="w120">&nbsp;</li>
  </ul>
  <ul><li class="left">水印位置：</li>
    <li class="right"><input type="text" name="config[upload_water_pos]" maxlength="1" value="<?php echo ($upload_water_pos); ?>" class="w120"><label>(0=随机,从左&gt;右,上&gt;下 可以设置1-9 9个位置)</label></li>
  </ul>
  <ul><li class="left">水印图片路径：</li>
    <li class="right"><input type="text" name="config[upload_water_img]" maxlength="30" value="<?php echo ($upload_water_img); ?>">&nbsp;</li>
  </ul>            	
  </div>         
  <ul><li class="left">FTP远程附件功能：</li>
    <li class="right"><select name="config[upload_ftp]" class="w128" onChange="showtab('ftptab',this.value,1);"><option value="1">开启</option><option value="0" <?php if(($upload_ftp)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select>&nbsp;</li>
  </ul> 
  <div id="ftptab1" style="display:none;"> 
  <ul><li class="left">是否删除本地图片：</li>
    <li class="right"><select name="config[upload_ftp_del]" class="w128"><option value=0>否</option><option value=1 <?php if(($upload_ftp_del)  ==  "1"): ?>selected<?php endif; ?>>是</option></select><label>上传到远程服务器后是否删除本地的</label></li>
  </ul>         
  <ul><li class="left">FTP服务器：</li>
    <li class="right"><input type="text" name="config[upload_ftp_host]" id="upload_ftp_host" maxlength="30" value="<?php echo ($upload_ftp_host); ?>" class="w120"><label>填写FTP服务器的IP或域名</label></li>
  </ul>    
  <ul><li class="left">FTP 用户：</li>
    <li class="right"><input type="text" name="config[upload_ftp_user]" id="upload_ftp_user" value="<?php echo ($upload_ftp_user); ?>" maxlength="30" class="w120">&nbsp;</li>
  </ul>
  <ul><li class="left">FTP 密码：</li>
    <li class="right"><input type="text" name="config[upload_ftp_pass]" id="upload_ftp_pass" value="<?php echo ($upload_ftp_pass); ?>" maxlength="30" class="w120">&nbsp;</li>
  </ul> 
  <ul><li class="left">FTP 端口：</li>
    <li class="right"><input type="text" name="config[upload_ftp_port]" id="upload_ftp_port" value="<?php echo ($upload_ftp_port); ?>" maxlength="8" class="w120">&nbsp;</li>
  </ul>    
   <ul><li class="left">远程附件保存文件夹：</li>
    <li class="right"><input type="text" name="config[upload_ftp_dir]" id="upload_ftp_dir" maxlength="50" value="<?php echo ($upload_ftp_dir); ?>" class="w120"><label>(相对于FTP服务器根目录, 如/wwwroot/upload/)</label></li>
  </ul>                      
  </div>
  <ul><li class="left">远程附件访问地址：</li>
    <li class="right"><input type="text" name="config[upload_http_prefix]" id="upload_http_prefix" maxlength="100" value="<?php echo ($upload_http_prefix); ?>" class="w300"><label>(必须/结尾,留空则不使用,如http://www.feifeicms.com/upload/)</label></li>
  </ul>      
  <ul class="footer">
    <input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置">
  </ul>
  </form>
</div>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>