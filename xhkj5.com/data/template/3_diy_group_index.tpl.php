<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('25,26,27,28');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="group.php"><?php echo $_G['setting']['navs']['3']['navname'];?></a><?php echo $navigation;?>
</div>
</div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css">#portal_block_25 {  margin-top:5px !important;margin-right:0px !important;margin-bottom:5px !important;margin-left:0px !important;}#portal_block_27 {  margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}</style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bmw">
<div class="bm_h cl">
<span class="y xw1"><a href="group.php?mod=my">�ҵ�<?php echo $_G['setting']['navs']['3']['navname'];?> &rsaquo;</a></span>
<h2><?php echo $_G['setting']['navs']['3']['navname'];?>����</h2>
</div>
<!--[diy=diy5]--><div id="diy5" class="area"><div id="framezHOyQi" class="cl_frame_bm comiis_qzhot frame move-span cl frame-1-1"><div id="framezHOyQi_left" class="column frame-1-1-l"><div id="framezHOyQi_left_temp" class="move-span temp"></div><?php block_display('25');?></div><div id="framezHOyQi_center" class="column frame-1-1-r"><div id="framezHOyQi_center_temp" class="move-span temp"></div><?php block_display('26');?></div></div></div><!--[/diy]-->
</div>
<!--[diy=diycommendtop]--><div id="diycommendtop" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['index_header'])) echo $_G['setting']['pluginhooks']['index_header'];?>
<div id="g_commend" class="bm">
<div class="bm_h cl">
<h2>�Ƽ�<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c cl"><?php if(is_array(dunserialize($_G['setting']['group_recommend']))) foreach(dunserialize($_G['setting']['group_recommend']) as $val) { ?><dl class="xld">
<dd class="m"><a href="forum.php?mod=group&amp;fid=<?php echo $val['fid'];?>"><img src="<?php echo $val['icon'];?>" alt="<?php echo $val['name'];?>" width="48" height="48" /></a></dd>
<dt><a href="forum.php?mod=group&amp;fid=<?php echo $val['fid'];?>"><?php echo $val['name'];?></a></dt>
<dd class="xg1"><?php echo $val['description'];?></dd>
</dl>
<?php } ?>
</div>
</div>

<!--[diy=diycategorytop]--><div id="diycategorytop" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>
<div class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['3']['navname'];?>����</h2>
</div>
<div class="bm_c"><?php if(is_array($first)) foreach($first as $groupid => $group) { ?><dl class="mbm pbm bbda">
<dt class="pbn">
<span class="y xi2"><?php if(is_array($group['secondlist'])) foreach($group['secondlist'] as $fid) { ?><a href="group.php?sgid=<?php echo $fid;?>"><?php echo $second[$fid]['name'];?></a> <?php } ?><a href="group.php?gid=<?php echo $groupid;?>">���� &rsaquo;</a></span>
<strong class="xs2"><a href="group.php?gid=<?php echo $groupid;?>"><?php echo $group['name'];?></a></strong><?php if($group['groupnum']) { ?><span class="xg1">(<?php echo $group['groupnum'];?>)</span><?php } ?>
</dt>
<dd><?php if(is_array($lastupdategroup[$groupid])) foreach($lastupdategroup[$groupid] as $val) { ?><a href="forum.php?mod=group&amp;fid=<?php echo $val['fid'];?>"><?php echo $val['name'];?></a> &nbsp;&nbsp;
<?php } ?>
</dd>
</dl>
<?php } ?>
</div>
</div>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
</div>

<div class="sd">
<div class="drag">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"><div id="frameXX2XcC" class="cl_frame_bm frame move-span cl frame-1"><div id="frameXX2XcC_left" class="column frame-1-c"><div id="frameXX2XcC_left_temp" class="move-span temp"></div><?php block_display('27');?></div></div></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
<?php if(helper_access::check_module('group')) { if(empty($gid) && empty($sgid)) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>����<?php echo $_G['setting']['navs']['3']['navname'];?>����</h2>
</div>
<div class="bm_c">
<ul id="g_guide" class="mbm">
<li><label><strong class="xi1">����<?php echo $_G['setting']['navs']['3']['navname'];?></strong><span class="xg1">�����Լ��ĵ���</span></label></li>
<li><label><strong class="xi1">��������</strong><span class="xg1">���Ĵ���<?php echo $_G['setting']['navs']['3']['navname'];?>�ռ�</span></label></li>
<li><label><strong class="xi1">�������</strong><span class="xg1">������Ѽ����ҵ�<?php echo $_G['setting']['navs']['3']['navname'];?></span></label></li>
<li><label><strong class="xi1"><?php echo $_G['setting']['navs']['3']['navname'];?>����</strong><span class="xg1"><?php echo $_G['setting']['navs']['3']['navname'];?>��������Ӯ�������Ƽ�</span></label></li>
</ul>
<?php if(helper_access::check_module('group')) { ?>
<a href="forum.php?mod=group&amp;action=create" id="create_group_btn"><img src="<?php echo IMGDIR;?>/create_group.png" alt="����<?php echo $_G['setting']['navs']['3']['navname'];?>" /></a>
<?php } ?>
</div>
</div>
<?php } else { ?>
<div class="bm bw0">
<div class="bm_c">
<a href="forum.php?mod=group&amp;action=create&amp;fupid=<?php echo $fup;?>&amp;groupid=<?php echo $sgid;?>" id="create_group_btn"><img src="<?php echo IMGDIR;?>/create_group.png" alt="����<?php echo $_G['setting']['navs']['3']['navname'];?>" /></a>
</div>
</div>
<?php } } ?>
<div class="drag">
<!--[diy=diysidemiddle]--><div id="diysidemiddle" class="area"></div><!--[/diy]-->
</div>
<?php if($topgrouplist) { ?>
<div id="g_top" class="bm">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['3']['navname'];?>��������</h2>
</div>
<div class="bm_c">
<ol class="xl"><?php if(is_array($topgrouplist)) foreach($topgrouplist as $fid => $group) { ?><li class="top1"><span class="y xi2 xg1"> <?php echo $group['commoncredits'];?></span><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>"><?php echo $group['name'];?></a></li>
<?php } ?>
</ol>
</div>
</div>
<?php } ?>
<div class="drag">
<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"><div id="frameRCBCJD" class="cl_frame_bm frame move-span cl frame-1"><div id="frameRCBCJD_left" class="column frame-1-c"><div id="frameRCBCJD_left_temp" class="move-span temp"></div><?php block_display('28');?></div></div></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
</div>
</div>

<div class="wp mtn">
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>