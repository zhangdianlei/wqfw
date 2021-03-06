<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<!DOCTYPE html>
<html lang="zh-CN" class="index_page">
<head>
<?php include mymps_tpl('header'); ?>
<title>信息置顶 - <?=$mymps_global['SiteName']?></title>
<link type="text/css" rel="stylesheet" href="template/css/global.css">
<link type="text/css" rel="stylesheet" href="template/css/style.css">
<link type="text/css" rel="stylesheet" href="template/css/member_new.css">
    <script>window['current'] = '会员中心';</script>
</head>

<body class="<?=$mymps_global['cfg_tpl_dir']?>">
<div class="wrapper">
<?php include mymps_tpl('header_search'); ?>
<div class="dl_nav">
<span>
<a href="index.php">首页</a>&gt;<a href="index.php?mod=member">会员中心</a>&gt;<a href="index.php?mod=member&action=mypost">我的信息</a>&gt;推广置顶
</span>
</div>
    
    <div class="inner_html tips">
        <div class="hd">温馨提示</div>
        <div class="bd">
        首页置顶：1天仅需<font color="#FF3300"><?=$mymps_global['cfg_member_upgrade_index_top']?>个</font>金币，在网站<font color="#FF3300">首页第一屏</font>展示您发布的信息,吸引全场眼球！
        <br /><br />
        大类置顶：1天仅需<font color="#FF3300"><?=$mymps_global['cfg_member_upgrade_top']?>个</font>金币</span>显示在<font color="#FF3300"><?=$info['gname']?></font>类目列表页面的最顶部位置，吸引更多关注！
        <br /><br />
        小类置顶：1天仅需<font color="#FF3300"><?=$mymps_global['cfg_member_upgrade_list_top']?>个</font>金币</span>显示在<font color="#FF3300"><?=$info['catname']?></font>类目列表页面的最顶部位置，吸引更多关注！
        </div>
    </div>
    
    <div class="clear"></div>
<form name="form1" action="?mod=member&action=mypost&act=upgrade" method="post">
<input name="dopost" value="1" type="hidden">
<input name="id" value="<?=$info['id']?>" type="hidden">
<div class="tabItem tab-cont" style="display:block;">
 <div class="inp_Itembox">
    <dl class="cfix">
    <dt>信息主题</dt>
    <dd>
    <?=$info['title']?>
    </dd>
    </dl>
 <div class="inp_Itembox">
    <dl class="cfix">
    <dt>选择区域</dt>
    <dd>
    <select name="upgrade_type" id="upgrade_type">
    <option value="cfg_member_upgrade_index_top">上首页</option>
    <option value="cfg_member_upgrade_top">大类置顶</option>
    <option value="cfg_member_upgrade_list_top">小类置顶</option>
    </select>
    </dd>
    <div class="menu">
    <i></i>
    <i></i>
    <i></i>
    </div>
    </dl>
    <dl class="cfix">
    <dt>选择时长</dt>
    <dd>
    <? echo GetUpgradeTime(); ?>    </dd>
    <div class="menu">
    <i></i>
    <i></i>
    <i></i>
    </div>
    </dl>
    <dl class="cfix">
    <dt>需要金币</dt>
    <dd style="color:red; font-weight:bold;">
    <font id="total">0</font>个
    </dd>
    </dl>
 </div>
</div>
 <button type="submit" class="save">确认置顶</button>
</form>
<script language="javascript">
function calculate()
{
var ID0=document.getElementById("upgrade_type").value; 
var ID1=document.getElementById("upgrade_time").value; 
var ID2=document.getElementById("total").value;
if(ID0 == "cfg_member_upgrade_top"){
document.getElementById("total").innerHTML=(<?=$mymps_global['cfg_member_upgrade_top']?>*ID1);
}else if(ID0 == "cfg_member_upgrade_list_top"){
document.getElementById("total").innerHTML=(<?=$mymps_global['cfg_member_upgrade_list_top']?>*ID1);
}else{
document.getElementById("total").innerHTML=(<?=$mymps_global['cfg_member_upgrade_index_top']?>*ID1);
}

if(ID0==""||ID1=="") 
ID2="";
setTimeout("calculate()",30);
} 
calculate();
</script>
</div>
<?php include mymps_tpl('footer'); ?>
</body>
</html>