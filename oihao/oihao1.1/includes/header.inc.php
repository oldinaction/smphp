<?php
/**
 * Guest Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn
 * ================================================
 * Author: smalle
 * Date: 2015-1-21
 */

//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}
?>
<!-- 这最后会在根目录的php文件中调用，如index.php，所以路径要按照index.php的来，不能加../ -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/header.js"></script>

<!-- 头部start -->
<div class="wrapper"><!-- a1 -->
<div id="doc-wrap" class="theme-doc"><!-- a2 -->
<div id="doc-view"><!-- a3 -->
<div id="doc-hd"><!-- a41 -->
    <div id="topbar" class="theme-topbar-anchor-parent theme-topbar">
        <div class="topbar-bg"></div>
        <div class="container clearfix">
            <div class="f-l"><a href="#" id="top-calendar"><?php $weekarray=array("日","一","二","三","四","五","六"); echo date("Y年m月d日").'&nbsp;&nbsp;星期'.$weekarray[date("w")];?></a></div>
            <div id="topbar-theme" class="f-r theme-text theme-btn-openpanel">
                <a href="#" onclick="return false" title="换肤" style="color:#f60;">换肤</a>
            </div>
            <div id="top-menu" class="f-r theme-text">
                <a id="setHomepage" href="javascript:void(0);" onclick="SetHome(this,'http://www.oihao.com');">设为首页</a>|
                <a href="javascript:void(0);" onclick="AddFavorite('http://www.oihao.com',location.href)">收藏本站</a>|
                <a href="javascript:void(0);" onclick=" toDesktop(location.href,'http://www.oihao.com')">保存到桌面</a>|
                <a href="#" title="反馈">反馈</a>|
            </div>
        </div>
    </div>
    <script  type="text/javascript">
          //设为首页
          function SetHome(obj,url){
              try{
                  obj.style.behavior='url(#default#homepage)';
                  obj.setHomePage(url);
              }catch(e){
                  if(window.netscape){
                      try{
                          netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                      }catch(e){
                          alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
                      }
                  }else{
                      alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
                  }
              }
          }
          //收藏本站
          function AddFavorite(title, url) {
              try {
                  window.external.addFavorite(url, title);
              }
              catch (e) {
                  try {
                      window.sidebar.addPanel(title, url, "");
                  }
                  catch (e) {
                      alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
                  }
              }
          }
          //保存到桌面
          function toDesktop(sUrl,sName){
          try {
              var WshShell = new ActiveXObject("WScript.Shell");
              var oUrlLink =          WshShell.CreateShortcut(WshShell.SpecialFolders("Desktop")     + "\\" + sName + ".url");
              oUrlLink.TargetPath = sUrl;
              oUrlLink.Save();
              }  
          catch(e)  {  
                    alert("当前IE安全级别不允许操作！");  
          }
          }    
  </script>
 
      </script>
</div><!-- a41 -->
<div id="doc-bd"><!-- a42 -->
<div id="doc-main" class="container"><!-- a5 -->

    <div id="doc-main-hd" class="hd">
        <div id="header-section">
            <div class="item-logo">
                <h1>
                    <a id="imgLogo" class="default-logo" href="index.php" target="_self" title="OI主页,收录独立博客的主页">
                        <img src="images/logo.png">
                    </a>
                    <a id="themeLogo" class="theme-logo" href="index.php" target="_self" title="OI主页,收录独立博客的主页">OI主页</a>
                </h1>
            </div>
            <div class="item-search">
                <div id="search">
                    <div class="search-hd">
                		<ul class="tab theme-search-tab clearfix">
                			<li data-cate="webpage" class="on">
                				<a href="" target="_blank" onclick="return false;">网页</a>
                			</li>
                			<li data-cate="news">
                				<a href="http://news.sina.com.cn" target="_blank" class="link">新闻</a>
                			</li>
                			<li data-cate="video">
                				<a href="http://music.baidu.com" target="_blank" class="link">音乐</a>
                			</li>
                			<li data-cate="image">
                				<a href="http://image.baidu.com" target="_blank" class="link">图片</a>
                			</li>
                			<li data-cate="tieba">
                				<a href="http://tieba.baidu.com" target="_blank" class="link">贴吧</a>
                			</li>
                		</ul>
                	</div>
                	<div class="search-bd">
                        <div class="form-group">
                			<form id="search-form" name="search_form" target="_blank" onsubmit="return gowhere(this)">
                				<fieldset>
                					<legend>百度</legend>
                					<div id="search-input">
                						<input type="hidden" name="ie" value="utf-8" />
                                        <input name=tn type=hidden />
                    					<input name=ct type=hidden />
                    					<input name=lm type=hidden />
                    					<input name=cl type=hidden />
                    					<input name=rn type=hidden />				
                						<input type="text" id=word name=word autocomplete="off" qsuginited="1" />
                					</div>
                					<button id="search-btn" class="theme-search-btn" type="submit">百度一下</button>
                				</fieldset>
                			</form>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <div id="nav-section">
            <div id="nav" class="theme-nav clearfix">
                <ul class="f-l nav-menu clearfix">
            		<li class="item"><a target="_self" href="index.php" class="item-link home on theme-nav-on-item-link">首页</a></li>
            		<li class="item" data-alias="add"><a target="_self" href="add.php" class="item-link theme-nav-item-link">申请加入</a></li>
            		<li class="item" data-alias="email"><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=5IuIgI2KhYeQjYuKpJWVyoeLiQ" class="item-link theme-nav-item-link">留言</a></li>
                    <li class="item" data-alias="smalle"><a target="_self" href="admin.php" class="item-link theme-nav-item-link">审核</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end头部 -->


    <!-- body部分start -->
    <div id="doc-main-bd" class="bd"><!-- b1 -->



