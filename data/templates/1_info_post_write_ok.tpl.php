<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布成功!</title>
<link rel="shortcut icon" href="<?=$mymps_global['SiteUrl']?>/favicon.ico" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/global.css" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/style.css" />
<link rel="stylesheet" href="<?=$mymps_global['SiteUrl']?>/template/default/css/post.css" />
<link href="<?=$mymps_global['SiteUrl']?>/template/global/button.css" type="text/css" rel="stylesheet" />
<script src="<?=$mymps_global['SiteUrl']?>/template/global/noerr.js" type="text/javascript"></script>
<script src="<?=$mymps_global['SiteUrl']?>/template/default/js/global.js" type="text/javascript"></script>
<script src="<?=$mymps_global['SiteUrl']?>/template/default/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">var current_domain = '<?=$mymps_global['SiteUrl']?>';</script>
<script language="javascript" src="<?=$mymps_global['SiteUrl']?>/template/global/messagebox.js"></script>
</head>
<body class="<?=$mymps_global['cfg_tpl_dir']?> bodybg<?=$mymps_global['cfg_tpl_dir']?><?=$mymps_global['bodybg']?>"><script type="text/javascript">var current_domain="<?=$mymps_global['SiteUrl']?>";var current_cityid="<?=$city['cityid']?>";var current_logfile="<?=$mymps_global['cfg_member_logfile']?>";</script>
<div class="bartop">
<div class="barcenter">
<div class="barleft">
<ul class="barcity"><span><? if($city['cityname']) { ?><?=$city['cityname']?><?php } else { ?>总站<?php } ?></span>[<a href="<?=$mymps_global['SiteUrl']?>/changecity.php">切换分站</a>]</ul> 
<ul class="line"><u></u></ul>
            <ul class="barcang"><a href="<?=$mymps_global['SiteUrl']?>/desktop.php" target="_blank" title="点击右键，选择“目标另存为”，将此快捷方式保存到桌面即可">保存到桌面</a></ul>
<ul class="line"><u></u></ul>
<ul class="barpost"><a href="<?=$mymps_global['SiteUrl']?>/<?=$mymps_global['cfg_postfile']?>?cityid=<?=$cityid?>">快速发布信息</a></ul>
<ul class="line"><u></u></ul>
<ul class="bardel"><a href="<?=$mymps_global['SiteUrl']?>/delinfo.php?cityid=<?=$cityid?>" rel="nofollow">修改/删除信息</a></ul>
<ul class="line"><u></u></ul>
<ul class="barwap"><a href="<?=$mymps_global['SiteUrl']?>/mobile.php?cityid=<?=$cityid?>">手机浏览</a></ul>
</div>
<div class="barright" id="iflogin"><img src="<?=$mymps_global['SiteUrl']?>/images/loading.gif" border="0" align="absmiddle"></div>
</div>
</div>
<div class="clearfix"></div>
<div class="mhead">
<div class="logo"><a href="<? echo $city['domain']?$city['domain']:$mymps_global['SiteUrl']; ?>" target="_blank"><img src="<?=$mymps_global['SiteUrl']?><?=$mymps_global['SiteLogo']?>" title="<?=$mymps_global['SiteName']?>"/></a></div>
<div class="font">
<span>
        <? if(CURSCRIPT == 'posthistory') { ?>发帖记录<?php } elseif(CURSCRIPT == 'space') { ?>用户中心<?php } elseif(CURSCRIPT == 'mobile') { ?>手机版<?php } elseif(CURSCRIPT == 'login') { ?>帐号升级<?php } elseif(CURSCRIPT == 'delinfo') { ?>修改/删除信息<?php } elseif(CURSCRIPT == 'post') { ?>发布信息<?php } else { ?>切换分站<?php } ?>
</span>
</div>
</div>
<div class="cleafix"></div><div class="body1000">
<div class="clear15"></div>
<div class="wrapper" id="main">
<div class="step3">
<span><font class="number">1</font> 选择信息分类</span>
<span><font class="number">2</font> 填写信息内容</span>
<span class="cur"><font class="number">3</font> 发布成功</span>
</div>
        <div class="fbd">
        <div class="c_border">
        <center id="infobox">
        <ul>
        <div id="mr">
<? if(empty($ok['level'])) { ?>
<h2 class="h">信息通过审核后显示！</h2>
            <p>您发布的ID号为 <strong><?=$ok['id']?></strong> &nbsp;的信息，目前为<b style=color:red>待审状态</b>，管理员审核通过后，就会在本网站上显示！<br /><br /><a href="<?=$mymps_global['SiteUrl']?>/<?=$mymps_global['cfg_postfile']?>?cityid=<?=$cityid?>">我要再发布一条信息&raquo;</a><br /><? if($r['userid']) { ?><a href="<?=$mymps_global['SiteUrl']?>/member/index.php?m=info" style="text-decoration:underline;">[我发布的所有信息]</a><?php } else { ?><a href="<?=$city['domain']?>" style="text-decoration:underline;">[点此返回网站首页]</a><?php } ?></p>
            <?php } else { ?>
<h1 class="h">信息发布成功！</h1>
            <p>您的信息  <a target="_blank"  href="<?=$ok['info_uri']?>" class="mrtitle"><b><?=$ok['title']?></b></a> &nbsp;已经成功发布</p>
            <p><b><font color="#FF0000">温馨提示：</font></b> 该信息将在3分钟后显示在频道列表页上！ <? if($r['userid']) { ?><a href="<?=$mymps_global['SiteUrl']?>/member/index.php?m=info" style="text-decoration:underline;">[我发布的所有信息]</a><?php } else { ?><a href="<?=$mymps_global['SiteUrl']?>" style="text-decoration:underline;">[点此返回网站首页]</a><?php } ?></p>
            <p style="padding:15px 0 0;">
            <a class="button a xxl" href="javascript:setbg('置顶分类信息',538,248,'<?=$mymps_global['SiteUrl']?>/box.php?part=upgrade&id=<?=$ok['id']?>');" style="width:190px; margin-left:50px"><span><i></i>立即置顶该信息</span></a>
            <a class="button c xxl" href="<?=$mymps_global['SiteUrl']?>/<?=$mymps_global['cfg_postfile']?>?cityid=<?=$cityid?>"><span><i></i>我要再发布一条信息&raquo;</span></a></p>
            <?php } ?>
        </div>
        </ul>
        </center>
        </div>
        
        </div>
</div>
<div class="clear"></div>
    <div class="footer">	&copy; <?=$mymps_global['SiteName']?> <a href="http://www.miibeian.gov.cn" target="_blank"><?=$mymps_global['SiteBeian']?></a> <?=$mymps_global['SiteStat']?> <span class="none_<?=$mymps_mymps['debuginfo']?>"><? if($cachetime) { ?>This page is cached at <? echo GetTime($timestamp,'Y-m-d H:i:s'); ?><?php } ?></span><span class="my_mps"><strong><a href="<?=MPS_WWW?>" target="_blank"><?=MPS_SOFTNAME?></a></strong> <em><a href="<?=MPS_BBS?>" target="_blank"><?=MPS_VERSION?></a></em></span></div></div>
</body>
</html>
<script type="text/javascript">loadDefault(['iflogin'])</script>