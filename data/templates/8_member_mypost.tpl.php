<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<!DOCTYPE html>
<html lang="zh-CN" class="index_page">
<head>
<?php include mymps_tpl('header'); ?>
<title>我的信息 - <?=$mymps_global['SiteName']?></title>
<link type="text/css" rel="stylesheet" href="template/css/global.css">
<link type="text/css" rel="stylesheet" href="template/css/style.css">
<link type="text/css" rel="stylesheet" href="template/css/member.css">
<script>window['current'] = '会员中心';</script>
<script>function refreshid(infoid){if(confirm("刷新一条信息需扣除<?=$mymps_global['cfg_member_info_refresh']?>个金币，确定要刷新吗？")){var url='index.php?mod=member&action=mypost&dopost=1&act=refreshid&id='+infoid;$.get(url,function(data){if(data==='success'){MympsWindowMsg('',1,'该信息已被成功刷新!','index.php?mod=member&action=mypost');return true}else if(data==='余额不足'){MympsWindowMsg('',1,'您当前金币余额不足，请先充值','index.php?mod=member&action=pay');return false}else{alert(data);return false}})}}function redid(infoid){if(confirm("给信息标题套红需扣除<?=$mymps_global['cfg_member_info_red']?>个金币，确定要套红显示吗？")){var url='index.php?mod=member&action=mypost&dopost=1&act=redid&page=<?=$page?>&id='+infoid;$.get(url,function(data){if(data==='success'){MympsWindowMsg('',1,'该信息的标题已被成功套红!','index.php?mod=member&action=mypost&page=<?=$page?>');return true}else if(data==='余额不足'){MympsWindowMsg('',1,'您当前金币余额不足，请先充值','index.php?mod=member&action=pay');return false}else{alert(data);return false}})}}function boldid(infoid){if(confirm("给信息标题加粗需扣除<?=$mymps_global['cfg_member_info_bold']?>个金币，确定要加粗显示吗？")){var url='index.php?mod=member&action=mypost&dopost=1&act=boldid&page=<?=$page?>&id='+infoid;$.get(url,function(data){if(data==='success'){MympsWindowMsg('',1,'该信息的标题已被成功加粗!','index.php?mod=member&action=mypost&page=<?=$page?>');return true}else if(data==='余额不足'){MympsWindowMsg('',1,'您当前金币余额不足，请先充值','index.php?mod=member&action=pay');return false}else{alert(data);return false}})}}function deleteid(infoid){if(confirm("确定要删除该信息吗？该操作不可恢复")){var url='index.php?mod=member&action=mypost&dopost=1&act=deleteid&id='+infoid;$.get(url,function(data){if(data==='success'){MympsWindowMsg('',0,'该信息已被成功删除!');$("#info"+infoid).hide();return true}else{alert(data);return false}})}}</script>
</head>

<body class="<?=$mymps_global['cfg_tpl_dir']?>">
<div class="wrapper">
<?php include mymps_tpl('header_search'); ?>
<div class="dl_nav">
<span>
<a href="index.php">首页</a>&gt;<a href="index.php?mod=member">会员中心</a>&gt;<a href="index.php?mod=member&action=mypost">我的信息</a>
</span>
</div>

<div class="my_info">
    <ul>  
    <?php if(is_array($info_list)){foreach($info_list as $mymps) { ?>        <li id="info<?=$mymps['id']?>">
            <h3><? if(mgetcookie('refreshed'.$mymps['id']) == 1) { ?><font color="red">[已刷新]</font><?php } ?><a style="<? if($mymps['ifred'] == 1) { ?>color:red;<?php } if($mymps['ifbold'] == 1) { ?>font-weight:bold;<?php } ?>" href="index.php?mod=information&id=<?=$mymps['id']?>"><?=$mymps['title']?></a></h3>
            <dl class="cfix">
             <dt>
               <? if($mymps['info_level'] >0) { ?><span style="color:green;">显示中</span><?php } else { ?><span>等待审核</span><?php } ?>
               <? if($mymps['ifred'] == 1) { ?><span style="color:red;">已套红</span><?php } ?>
               <? if($mymps['ifbold'] == 1) { ?><span style="font-weight:bold;">已加粗</span><?php } ?>
               <? if($mymps['upgrade_type_index'] == 2 || $mymps['upgrade_type_list'] == 2 || $mymps['upgrade_type'] == 2) { ?><span>置顶中</span><?php } ?>
             </dt>
             <dd><? echo GetTime($mymps['begintime']); ?></dd>
            </dl>
            <? if($mymps['info_level'] > 0) { ?>
            <div class="opear">
             <span class="f5"><a href="javascript:void(0);" onclick="refreshid('<?=$mymps['id']?>');">刷新</a></span>
             <span class="gg"><a href="index.php?mod=member&action=mypost&act=upgrade&id=<?=$mymps['id']?>">置顶</a></span>
             <span class="ired"><a href="javascript:void(0);" onclick="redid('<?=$mymps['id']?>');">套红</a></span>
             <span class="ibold"><a href="javascript:void(0);" onclick="boldid('<?=$mymps['id']?>');">加粗</a></span>
             <span class="edit"><a href="index.php?mod=post&id=<?=$mymps['id']?>">修改</a></span>
             <span class="del"><a href="javascript:void(0);" onclick="deleteid('<?=$mymps['id']?>');">删除</a></span>
            </div>
            <?php } ?>
        </li>
        <?php }} ?>
    </ul>
</div>
    
<? if($info_list) { ?>
<div class="pager" style="border-top:none; border-bottom:1px #ddd solid;">
    <?=$pageview?>
</div>
<?php } ?>
</div>
<?php include mymps_tpl('footer'); ?>
</body>
</html>