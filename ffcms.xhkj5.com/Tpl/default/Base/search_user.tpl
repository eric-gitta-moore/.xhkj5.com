<form class="navbar-form navbar-right ff-search" data-sid="{$site_sid}" data-limit="{:C('ui_search_limit')}" role="search" action="{$root}index.php?s=vod-search-name" method="post">
  <div class="input-group input-group-sm">
    <span class="input-group-addon">
    	<gt name="site_user_id" value="0">
    		<a class="text-muted" href="{:ff_url('user/center')}" data-toggle="tooltip" data-placement="bottom" title="我的用户中心"><span class="glyphicon glyphicon-user"></span></a>
      <else/>
      	<a class="text-muted ff-user user-login-modal" href="{:ff_url('user/login')}" data-href="{:ff_url('user/center')}" data-toggle="tooltip" data-placement="bottom" title="点击登录"><span class="glyphicon glyphicon-user"></span></a>
      </gt>
    </span>
    <input type="text" class="form-control ff-wd" id="ff-wd" name="wd" placeholder="请输入影片名称">
    <div class="input-group-btn">
      <button type="submit" class="btn btn-default" data-action="{:ff_url('vod/search',array('name'=>'FFWD'), true)}">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </div>
  </div>
</form>