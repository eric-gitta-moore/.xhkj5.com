<?php
/*
 * Install Uninstall Upgrade AutoStat System Code
 * This is NOT a freeware, use is subject to license terms
 * From www.1314study.com
 */
if(!defined('IN_ADMINCP')) {
	exit('Access Denied');
}
require_once ('pluginvar.func.php');
$_statInfo = array();
$_statInfo['pluginName'] = $pluginarray['plugin']['identifier'];
$_statInfo['pluginVersion'] = $pluginarray['plugin']['version'];
require_once DISCUZ_ROOT.'./source/discuz_version.php';
$_statInfo['bbsVersion'] = DISCUZ_VERSION;
$_statInfo['bbsRelease'] = DISCUZ_RELEASE;
$_statInfo['timestamp'] = TIMESTAMP;
$_statInfo['bbsUrl'] = $_G['siteurl'];
$_statInfo['SiteUrl'] = 'http://www.xhkj5.com/';
$_statInfo['ClientUrl'] = 'http://www.xhkj5.com/';
$_statInfo['SiteID'] = '00EE4C65-04BB-85D0-571E-AF027D08F9B6';
$_statInfo['bbsAdminEMail'] = $_G['setting']['adminemail'];
$_statInfo['action'] = substr($operation,6);
$_statInfo = base64_encode(serialize($_statInfo));
$_md5Check = md5($_statInfo);
$StatUrl = 'http://addon.1314study.com/stat.php';
$_StatUrl = $StatUrl.'?info='.$_statInfo.'&md5check='.$_md5Check;
echo '<script src="'.$_StatUrl.'" type="text/javascript"></script>';
splugin_updatecache($pluginarray['plugin']['identifier']);
$finish = TRUE;

?>