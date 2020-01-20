<? if(!defined('IN_MYMPS')) exit('Access Denied');
/*Mymps分类信息系统
官方网站：http://www.mymps.com.cn*/?>
<?php include mymps_tpl('search_head'); ?>
<script language="javascript">
document.domain = '<?=$document_domain?>';
</script>
<!-- 搜索结果页 -->
<div class="c"></div>
 	<div class="main2 cc" id="mainbox">
    	<div class="h">
        	<span class="fr">搜索<span class="s1"><?=$search['keywords']?></span>获得<?=$search['rows_num']?>条查询结果
        	</span>
            <span class="mr20"><a href="<?=$mymps_global['SiteUrl']?>/search.php"><?=$mymps_global['SiteName']?>搜索</a> &raquo; 信息</span><span class="s6">小提示：多个词用空格分隔，搜索的更准！</span>
        </div>

<div class="content fl">
        	<div class="s_dlA">
                <div class="searchpagelist">
                <ul>
                <? if($search['rows_num'] == 0) { ?>
                <div class="nodata">抱歉！没有找到匹配的相关信息，您可以尝试换个关键词搜索一下。</div>
                <?php } else { ?>
                <?php if(is_array($search['result'])){foreach($search['result'] as $result) { ?>                <li style="height:85px">
                <h3><a href="<?=$result['uri']?>" target="_blank"><?=$result['title']?></a><span class="fgreen" style="margin-left:20px; font-size:12px"><a href="<?=$result['caturi']?>" target="_blank"><?=$result['catname']?></a></span><span class="dateline">[<? echo get_format_time($result['begintime']); ?>]</span></h3>
                <div class="intro">
                    <div class="p"><?=$result['content']?></div>
                    <div class="p-b">
                    <?php if(is_array($result['extra'])){foreach($result['extra'] as $extra) { ?>                    <font color="#666666"><?=$extra?></font>&nbsp;&nbsp;
                    <?php }} ?>
                    </div>

                </div>
                </li>
                <?php }} ?>
                <?php } ?>
                </ul>
                </div>
                <div class="pagination2 mt6"><?=$search['pagination']?></div>
            </div>
        </div>
        <div class="sidebar fr">
        	<div class="p15 s_boxA">
            	<h2>信息详细检索</h2>
                <ul class="quicksearch">
<div style="display:none;">
                        <iframe width=0 height=0 src='' id="iframe_area" name="iframe_area"></iframe> 
                        <iframe width=0 height=0 src='' id="iframe_street" name="iframe_street"></iframe> 
                        <form method="post" target="iframe_area" id="form_area"></form>
                    </div>
                    <form action="search.php?" method="get" />
                    <dl>
                    <dt>选择类别：</dt>
                    <dd>
                    <select name="catid">
                        <option value="" <? if(!$catid) { ?>style="background-color:#6eb00c; color:white!important;"<?php } ?>>不限类别</option>
                        <?php if(is_array($catoption)){foreach($catoption as $options) { ?>                        <option value="<?=$options['catid']?>" <? if($options['catid'] == $catid) { ?>selected style="background-color:#6eb00c; color:white!important;"<?php } ?>><?=$options['catname']?></option>
                        <?php }} ?>
                    </select>
</dd>
                    <dt>所在地区：</dt>
                    <dd><?=$select_where_option?></dd>
                    <dt>发布时间：</dt>
                    <dd><?=$posttime_select?></dd>
                    <?php if(is_array($extra_model)){foreach($extra_model as $model) { ?>                        <dt><?=$model['title']?>：</dt><dd><?=$model['publish']?></dd>
                    <?php }} ?>
                    <dt>联系电话：</dt>
                    <dd><input type="text" name="tel"  class="searchinput inputbox" value="<?=$tel?>" /></dd>
<dt>关键字：</dt>
                    <dd><input type="text" name="keywords"  class="searchinput inputbox" value="<?=$search['keywords']?>" /></dd>
                    <dt>&nbsp;</dt>
                    <dd><input type="submit" class="submit" value="我要搜索"/></dd>
                    </dl>
                    </form>
                </ul>
            </div>
        </div>

        <div class="c">&nbsp;</div>
  
    </div>  

</div></div>

<div class="footer-wrap">
<div class="c mt10"></div>
<?php include mymps_tpl('search_foot'); ?>
</div>
</div>
</body>
</html>