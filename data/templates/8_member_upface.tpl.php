<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<!DOCTYPE html>
<html lang="zh-CN" class="index_page">
<head>
<?php include mymps_tpl('header'); ?>
<title>更换头像 - <?=$mymps_global['SiteName']?></title>
<link type="text/css" rel="stylesheet" href="template/css/global.css">
<link type="text/css" rel="stylesheet" href="template/css/style.css">
<link type="text/css" rel="stylesheet" href="template/css/member_new.css">
    <script>window['current'] = '会员中心';</script>
    <script>
    function chkSubmit(){
if($("#mymps_member_logo").val() == ''){
alert('请选择图片上传');
return false;
}
}
    </script>
</head>

<body class="<?=$mymps_global['cfg_tpl_dir']?>">
<div class="wrapper">
<?php include mymps_tpl('header_search'); ?>
<div class="dl_nav">
<span>
<a href="index.php">首页</a>&gt;<a href="index.php?mod=member">会员中心</a>&gt;<a href="index.php?mod=member&action=upface">更换头像</a>
</span>
</div>

<div class="register-form">
    <form name="Form1" onSubmit="return chkSubmit();" method="post" action="index.php?mod=member&action=upface&dopost=1" style="margin:0" enctype="multipart/form-data">
        <input name="face" value="<?=$row['logo']?>" type="hidden">
        <input name="normalface" value="<?=$row['prelogo']?>" type="hidden"><?php $row['prelogo'] = strstr($row['prelogo'],'http') ? $row['prelogo'] : $mymps_global['SiteUrl'].$row['prelogo']; ?>        <p class="box"><span class="form_label">当前头像：</span><span class="form_control"><img src="<? echo $row['prelogo'] ? $row['prelogo'] : 'template/images/center_ico.png'; ?>" id="Image1"  width="110" height="110" /></span></p>
        <p class="box"><span class="form_label">上传头像：</span><span class="form_control"><input type="file" class="codebox2-input" name="mymps_member_logo" id="mymps_member_logo"/></span></p>
        <input class="comn-submit btn_block" type="submit" value="提交上传" />
    </form>
    </div>

</div>
<?php include mymps_tpl('footer'); ?>
</body>
</html>