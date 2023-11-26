<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script charset="utf-8" src="__PUBLIC__/jquery/1.11.3/jquery.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$feifeicms.show.table();
	//排序
	$('.ff-order').on('click',function(){
		$order = $(this).attr('data-order');
		$sort = $(this).attr('data-sort');
		$url = "<?php echo ($link); ?>".replace("FFLINK",1).replace("<?php echo ($order); ?>",$order);
		if($(this).attr('data-sort') == "desc"){
			$url = $url.replace("desc","asc");
		}else{
			$url = $url.replace("asc","desc");
		}
		self.location.href = $url;
	});
	//排序图标
	$("img.ff-order").each(function(i){
		if($(this).attr('data-order') == '<?php echo ($order); ?>'){
			if($(this).attr('data-sort') == 'desc'){
				$(this).attr('src','__PUBLIC__/images/admin/down.gif').addClass('active');
			}else{
				$(this).attr('src','__PUBLIC__/images/admin/up.gif').addClass('active');
			}
			return false;
		}
	});
});
</script>
</head>
<body class="body">
<form action="?s=Admin-Admin-Delall" method="post" name="myform" id="myform"> 
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th class="r"><span style="float:left">用户管理</span></th></tr></thead>
  <tr>
    <td class="tr ct" style="height:40px">
    <input type="button" value="全部" class="submit" onClick="window.location='?s=Admin-User-Show';">
    <input type="button" value="已封禁" class="submit" onClick="window.location='?s=Admin-User-Show-status-0';return false;">
    <input type="button" value="已审核" class="submit" onClick="window.location='?s=Admin-User-Show-status-1';return false;">
    <input type="text" name="wd" id="wd" maxlength="20" value="<?php echo (urldecode(($wd)?($wd):'可搜索(用户呢称、邮箱)')); ?>" onClick="this.select();" style="color:#666;width:200px">
    <input type="button" value="搜索" class="submit" onClick="post('?s=Admin-User-Show');"></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table">
  <thead>
    <tr class="ct">
      <th class="l" width="80"><img class="ff-order" data-order="user_id" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">ID</th>
      <th class="l">用户邮箱</th>
      <th class="l" width="80"><img class="ff-order" data-order="user_score" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">影币</th>
      <th class="l" width="80"><img class="ff-order" data-order="user_follow" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">关注度</th>
      <th class="l" width="120"><img class="ff-order" data-order="user_logtime" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">上次登录时间</th>
      <th class="l" width="120"><img class="ff-order" data-order="user_deadtime" data-sort="<?php echo ($sort); ?>" src="__PUBLIC__/images/admin/down.gif">VIP到期时间</th>
      <th class="l" width="100">相关</th>
      <th class="r" width="100">操作</th>
    </tr>
  </thead>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$feifei): ++$i;$mod = ($i % 2 )?><tbody>
  <tr>
    <td class="l ct"><input name='ids[]' type='checkbox' value='<?php echo ($feifei["user_id"]); ?>' class="noborder"><?php echo ($feifei["user_id"]); ?></td>
    <td class="l pd"><?php echo (remove_xss($feifei["user_email"])); ?></td>
    <td class="l ct"><?php echo ($feifei["user_score"]); ?></td>
    <td class="l ct"><?php echo ($feifei["user_follow"]); ?></td>
    <td class="l ct"><?php echo (date('Y-m-d H:i',$feifei["user_logtime"])); ?></td>
    <td class="l ct"><?php echo (date('Y-m-d H:i',$feifei["user_deadtime"])); ?></td>
    <td class="l ct">
    <a href="?s=Admin-Forum-Show-uid-<?php echo ($feifei["user_id"]); ?>" target="_blank">评论</a>
    <a href="?s=Admin-Orders-Show-uid-<?php echo ($feifei["user_id"]); ?>" target="_blank">订单</a>
    <a href="?s=Admin-Record-Show-uid-<?php echo ($feifei["user_id"]); ?>" target="_blank">日志</a>
    </td>
    <td class="r ct">
    <?php if(($feifei["user_status"])  ==  "1"): ?><a href="?s=Admin-User-Status-ids-<?php echo ($feifei["user_id"]); ?>-value-0" title="点击隐藏用户">封禁</a>
    <?php else: ?>
    	<a href="?s=Admin-User-Status-ids-<?php echo ($feifei["user_id"]); ?>-value-1" title="点击显示用户"><font color="red">解封</font></a><?php endif; ?>
    <a href="?s=Admin-User-Add-id-<?php echo ($feifei["user_id"]); ?>">编辑</a>
    <a href="?s=Admin-User-Del-ids-<?php echo ($feifei["user_id"]); ?>" onClick="return confirm('确定删除?')">删除</a>
    </td>
  </tr>
  </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
   <tr>
      <td colspan="8" class="r pages"><?php echo ($pages); ?></td>
    </tr> 
  <tfoot>
    <tr>
      <td colspan="8" class="r">
      <input type="button" value="全选" class="submit" onClick="checkall('all');">
      <input name="" type="button" value="反选" class="submit" onClick="checkall();">
      <input type="button" value="解封" class="submit" onClick="post('?s=Admin-User-Status-value-1');">
      <input type="button" value="封禁" class="submit" onClick="post('?s=Admin-User-Status-value-0');">
      <input type="button" value="删除" class="submit" onClick="post('?s=Admin-User-Delall');">
      <input type="button" value="添加" class="submit" onClick="window.location='?s=Admin-User-add';"></td>
    </tr>  
  </tfoot>
</table>
</form>
<center>Powered by <a href="<?php echo L("feifeicms_homeurl");?>" target="_blank">feifeicms</a> <font color="#FF0000"><?php echo L("feifeicms_version");?></font></center>
</body>
</html>