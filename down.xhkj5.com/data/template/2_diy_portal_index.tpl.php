<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('14,15,10,13,12,11,16,17,18,19,20,21,22,23,24,25,26,27,28,29');?><?php include template('common/header'); ?><script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script type="text/javascript">
            jq(document).ready(function(){
                jq('.flexslider').flexslider({
                    directionNav: true,
                    pauseOnAction: false
                });
            });
            </script>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
    <div class="deanone">
    	<div class="w1180">
        	<div class="deanflash">
            	<div class="focusBox deanactions fadeInUp">
                	<!--[diy=focusBox]--><div id="focusBox" class="area"><div id="frameOzHEIh" class="frame move-span cl frame-1"><div id="frameOzHEIh_left" class="column frame-1-c"><div id="frameOzHEIh_left_temp" class="move-span temp"></div><?php block_display('14');?></div></div></div><!--[/diy]-->
                    
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>
                    <ul class="hd">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
            </div>
        
            <script type="text/javascript">
                jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:300});
            </script>
            </div>
            <div class="deandisplays">
            	<div class="deandisplaytop">
                	<div class="deandpl">原创作品推荐</div>
                    <div class="deandpnotice deanactions bounceInLeft">
                    	<!--[diy=deanrollgg]--><div id="deanrollgg" class="area"><div id="frameYth6tx" class="frame move-span cl frame-1"><div id="frameYth6tx_left" class="column frame-1-c"><div id="frameYth6tx_left_temp" class="move-span temp"></div><?php block_display('15');?></div></div></div><!--[/diy]-->
                    	
                    </div>
                    <script type="text/javascript">
jQuery(".deandpnotice").slide({ mainCell:".deanrollgg", effect:"topLoop", vis:1, opp:true, autoPlay:true, delayTime:800 });
</script>
                    <div class="deanupload"><a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">发布作品</a></div>
                    <div class="clear"></div>
                </div>
                <div class="deanzxlists">
                    <ul>
                    	<!--[diy=deanzxlists]--><div id="deanzxlists" class="area"><div id="frameXh7pCf" class="frame move-span cl frame-1"><div id="frameXh7pCf_left" class="column frame-1-c"><div id="frameXh7pCf_left_temp" class="move-span temp"></div><?php block_display('10');?></div></div></div><!--[/diy]-->
                        
                        
                        <div class="clear"></div>
                       
                    </ul>
                </div>
                <div class="jquery_pagnation"></div>
                <script type="text/javascript">
                    (function(dfsj_jq){
                        var dfsj_items = dfsj_jq('.deanzxlists li');
                        var dfsj_items2 = 16;
                        var total = dfsj_items.size();
                        total>0 && dfsj_jq('.jquery_pagnation').pagination({pagetotal:total,target:dfsj_items,perpage:dfsj_items2});
                        })(jQuery);
                </script>
            </div>
            
            
        </div>
    </div>
    
    <div class="deanshare">
        <div class="w1180">
            <div class="deandisplaytop">
                <div class="deandpl">经验分享</div>
                <div class="deanupload">
                	<ul>
                    	<li class="cur">设计教程</li>
                        <li>经验分享</li>
                        <li>视频教程</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="deansharebottom">
            	<dl>
                	<dd style="display:block;">
                    	<div class="deanzxlists">
                            <ul>
                                <!--[diy=deanzxlists1]--><div id="deanzxlists1" class="area"><div id="frameciocMR" class="frame move-span cl frame-1"><div id="frameciocMR_left" class="column frame-1-c"><div id="frameciocMR_left_temp" class="move-span temp"></div><?php block_display('13');?></div></div></div><!--[/diy]-->
                                <div class="clear"></div>
                               
                            </ul>
                        </div>
                    </dd>
                    <dd>
                    	<div class="deanzxlists">
                            <ul>
                                <!--[diy=deanzxlists2]--><div id="deanzxlists2" class="area"><div id="frameo85p8p" class="frame move-span cl frame-1"><div id="frameo85p8p_left" class="column frame-1-c"><div id="frameo85p8p_left_temp" class="move-span temp"></div><?php block_display('12');?></div></div></div><!--[/diy]-->
                                <div class="clear"></div>
                               
                            </ul>
                        </div>
                    </dd>
                    <dd>
                    	<div class="deanzxlists">
                            <ul>
                                <!--[diy=deanzxlists3]--><div id="deanzxlists3" class="area"><div id="frameLZG5zZ" class="frame move-span cl frame-1"><div id="frameLZG5zZ_left" class="column frame-1-c"><div id="frameLZG5zZ_left_temp" class="move-span temp"></div><?php block_display('11');?></div></div></div><!--[/diy]-->
                                <div class="clear"></div>
                               
                            </ul>
                        </div>
                    </dd>
                </dl>
            </div>
            <script type="text/javascript">
jq(".deanupload ul li").each(function(s){
jq(this).hover(function(){
jq(this).addClass("cur").siblings().removeClass("cur");
jq(".deansharebottom dl dd").eq(s).show().siblings().hide();
})
})
</script>
        </div>
    </div>
    
    <div class="deantools">
    	<div class="w1180">
        	<div class="deantoolsbox">
            	<ul>
                	<li>
                    	<!--[diy=deantoolsbox]--><div id="deantoolsbox" class="area"><div id="frameLI6zmO" class="frame move-span cl frame-1"><div id="frameLI6zmO_left" class="column frame-1-c"><div id="frameLI6zmO_left_temp" class="move-span temp"></div><?php block_display('16');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=deantoolsbox1]--><div id="deantoolsbox1" class="area"><div id="frameK6HuPH" class="frame move-span cl frame-1"><div id="frameK6HuPH_left" class="column frame-1-c"><div id="frameK6HuPH_left_temp" class="move-span temp"></div><?php block_display('17');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=deantoolsbox2]--><div id="deantoolsbox2" class="area"><div id="framecoxo49" class="frame move-span cl frame-1"><div id="framecoxo49_left" class="column frame-1-c"><div id="framecoxo49_left_temp" class="move-span temp"></div><?php block_display('18');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <li>
                    	<!--[diy=deantoolsbox3]--><div id="deantoolsbox3" class="area"><div id="frameoL4GGS" class="frame move-span cl frame-1"><div id="frameoL4GGS_left" class="column frame-1-c"><div id="frameoL4GGS_left_temp" class="move-span temp"></div><?php block_display('19');?></div></div></div><!--[/diy]-->
                    	
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="deanwenzhang">
    	<div class="w1180">
        	<div class="deanwzl">
            	<div class="deanqiehuan">
                	<ul>
                    	<li class="curs">推荐文章</li>
                        <li>最新文章</li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deannewslists">
                	<dl>
                    	<dd style="display:block;">
                        	<div class="deanwzlists">
                                <ul>
                                	<!--[diy=deanwzlists1x]--><div id="deanwzlists1x" class="area"><div id="frameuoo575" class="frame move-span cl frame-1"><div id="frameuoo575_left" class="column frame-1-c"><div id="frameuoo575_left_temp" class="move-span temp"></div><?php block_display('20');?></div></div></div><!--[/diy]-->
                                    
                                </ul>
                            </div>
                        </dd>
                        <dd>
                        	<div class="deanwzlists">
                                <ul>
                                    <!--[diy=deanwzlists1x1]--><div id="deanwzlists1x1" class="area"><div id="framew45of5" class="frame move-span cl frame-1"><div id="framew45of5_left" class="column frame-1-c"><div id="framew45of5_left_temp" class="move-span temp"></div><?php block_display('21');?></div></div></div><!--[/diy]-->
                                </ul>
                            </div>
                        </dd>
                    </dl>
                </div>
                 <script type="text/javascript">
jq(".deanqiehuan ul li").each(function(s){
jq(this).hover(function(){
jq(this).addClass("curs").siblings().removeClass("curs");
jq(".deannewslists dl dd").eq(s).show().siblings().hide();
})
})
</script>
            </div>
            <div class="deanwzr">
            	<div class="deannewintros deanactions bounceInUp">
                	<div class="deannewitop"><a href="#" target="_blank"><img width="285" src="<?php echo $_G['style']['styleimgdir'];?>/xinshou.png" /></a></div>
                    <div class="deannewibottom">
                    	<ul>
                        	 <!--[diy=deannewibottom]--><div id="deannewibottom" class="area"><div id="frameGo6h56" class="frame move-span cl frame-1"><div id="frameGo6h56_left" class="column frame-1-c"><div id="frameGo6h56_left_temp" class="move-span temp"></div><?php block_display('22');?></div></div></div><!--[/diy]-->
                        	
                        </ul>
                    </div>
                </div>
                <div class="deannewintros deanactions bounceInUp">
                	<div class="deannewitop"><a href="#" target="_blank"><img width="285" src="<?php echo $_G['style']['styleimgdir'];?>/sj520_app_in.png" /></a></div>
                    <div class="deannewibottom">
                    	<ul>
                        	<!--[diy=deannewibottom1]--><div id="deannewibottom1" class="area"><div id="frameVMCisw" class="frame move-span cl frame-1"><div id="frameVMCisw_left" class="column frame-1-c"><div id="frameVMCisw_left_temp" class="move-span temp"></div><?php block_display('23');?></div></div></div><!--[/diy]-->
                        	
                        </ul>
                    </div>
                </div>
                <div class="deannewintros deanactions bounceInUp">
                	<div class="deannewitop"><a href="#" target="_blank"><img width="285" src="<?php echo $_G['style']['styleimgdir'];?>/sj520_sc.png" /></a></div>
                    <div class="deannewibottom">
                    	<div class="deanin_dl"> 
                        	<!--[diy=deanin_dl]--><div id="deanin_dl" class="area"><div id="framegqKqQA" class="frame move-span cl frame-1"><div id="framegqKqQA_left" class="column frame-1-c"><div id="framegqKqQA_left_temp" class="move-span temp"></div><?php block_display('24');?></div></div></div><!--[/diy]-->
                           
                         </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="deanone" style="margin-top:50px;">
        <div class="w1180">
            <div class="deandisplaytop">
                <div class="deandpl">灵感创意</div>
                <div class="deanmorebutton">
                	<a href="#" target="_blank">更多》</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="deanzxlists">
                <ul>
                	<!--[diy=deanin_dl2]--><div id="deanin_dl2" class="area"><div id="framek8IWnw" class="frame move-span cl frame-1"><div id="framek8IWnw_left" class="column frame-1-c"><div id="framek8IWnw_left_temp" class="move-span temp"></div><?php block_display('25');?></div></div></div><!--[/diy]-->
                    
                    <div class="clear"></div>
                </ul>
            </div>
            
            <div class="deandesigners deanactions bounceInLeft">
            	<div class="design_r_title">
                    <h2>推荐设计师</h2>
                    <a href="#" target="_blank">更多<b>&gt;&gt;</b></a>
                </div>
                <div class="design_r_list">
                	<!--[diy=design_r_list]--><div id="design_r_list" class="area"><div id="frameSqq46n" class="frame move-span cl frame-1"><div id="frameSqq46n_left" class="column frame-1-c"><div id="frameSqq46n_left_temp" class="move-span temp"></div><?php block_display('26');?></div></div></div><!--[/diy]-->
                    
                </div>
            </div>        	
            <div class="deandesignbrands deanactions bounceInRight">
            	<div class="design_r_title">
                    <h2>推荐品牌</h2>
                    <a href="#" target="_blank">更多<b>&gt;&gt;</b></a>
                </div>
                <div class="deanbrands">
                	<!--[diy=deanbrands]--><div id="deanbrands" class="area"><div id="frameB9ubET" class="frame move-span cl frame-1"><div id="frameB9ubET_left" class="column frame-1-c"><div id="frameB9ubET_left_temp" class="move-span temp"></div><?php block_display('27');?></div></div></div><!--[/diy]-->
                	
                    <div class="clear"></div>
                </div>
            </div>   
            <div class="clear"></div>  
            
            <div class="deanads"><!--[diy=deanads1]--><div id="deanads1" class="area"><div id="frameEQP5K2" class="frame move-span cl frame-1"><div id="frameEQP5K2_left" class="column frame-1-c"><div id="frameEQP5K2_left_temp" class="move-span temp"></div><?php block_display('28');?></div></div></div><!--[/diy]--></div> 
            
            <div class="deanfriendlinks">
            	<div class="design_r_title">
                    <h2>友情链接</h2>
                    <a href="#" target="_blank">更多<b>&gt;&gt;</b></a>
                </div>
                <div class="design_ra"><!--[diy=design_ra]--><div id="design_ra" class="area"><div id="framenIixLS" class="frame move-span cl frame-1"><div id="framenIixLS_left" class="column frame-1-c"><div id="framenIixLS_left_temp" class="move-span temp"></div><?php block_display('29');?></div></div></div><!--[/diy]--></div>
                <div class="clear"></div>
                </div>
            </div>  
        </div>
    </div>
</div><?php include template('common/footer'); ?>