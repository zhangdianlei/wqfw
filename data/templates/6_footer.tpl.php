<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<div class="clear"></div>
<div class="foot">
    <div class="footer">
        <ul>
            <div class="foot_nav"><a href="<?=$uri['index']?>" target="_blank">网站首页</a> - <a href="<?=$uri['about']?>" target="_blank">机构简介</a> - <a href="<?=$uri['info']?>" target="_blank">分类信息</a> - <a href="<?=$uri['album']?>" target="_blank">机构相册</a> - <a href="<?=$uri['comment']?>" target="_blank">留言点评</a> - <a href="<?=$uri['contactus']?>" target="_blank">联系我们</a> - <a href="<?=$mymps_global['SiteUrl']?>/<?=$mymps_global['cfg_member_logfile']?>" target="_blank">登录管理</a></div>
            <div class="foot_copyright">版权所有：<?=$store['tname']?> 联系电话：<?=$store['tel']?><br />联系地址：<?=$store['address']?> <?=$mymps_global['SiteStat']?> <font class="none">powered by <a href="http://www.mymps.com.cn">mymps</a></font></div>
        </ul>
    </div>
</div>
<div class="floater">
    <span class="htm">手机收藏，随时查看</span>
    <span class="ctm"><img src="<?=$mymps_global['SiteUrl']?>/qrcode.php?size=2.2&value=<?=$uri['index']?>"></span>
    <span class="btm">手机微站</span>
</div>
<script type="text/javascript">var memberid = <?=$store['id']?>;</script>
<script type="text/javascript" src="<?=$mymps_global['SiteUrl']?>/template/spaces/store/js/store.js"></script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>