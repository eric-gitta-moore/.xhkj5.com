<!DOCTYPE html>
<html lang="zh-cn">
<head>
<include file="Base:header_meta" />
<include file="Seo:news_channel" />
</head>
<body class="news-list">
<include file="Block:header" />
<div class="container ff-bg">
<volist name=":explode(',',$list_extend['type'])" id="feifei" offset="0" length="12">
<php>$item_news = ff_mysql_news('cid:'.$list_id.';tag_name:'.$feifei.';tag_list:news_type;limit:30;cache_name:default;cache_time:default;order:news_addtime;sort:desc');</php>
<notempty name="item_news">
<div class="page-header">
  <h2>
    <span class="glyphicon glyphicon-list-alt ff-text"></span>
    <a href="{:ff_url('news/type',array('type'=>urlencode($feifei),'id'=>$list_id,'p'=>1),true)}">{$feifei}</a>
  </h2>
</div>
<ul class="news-item-ul ff-row">
  <volist name="item_news" id="feifei">
    <include file="Base:news_item_hot" />
  </volist>
</ul>
<div class="clearfix ff-clearfix"></div>
</notempty>
</volist>
</div><!--container end -->
<div class="clearfix ff-clearfix"></div>
<div class="container ff-bg">
  <include file="Block:footer" />
</div>
</body>
</html>