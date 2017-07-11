<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-3-25
 */

//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件(__DIR__不包含/)
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
//定义一个常量用来指本页内容,用于智能导入CSS文件
define('SCRIPT', 'index');	

?>

<!DOCTYPE html>
<html lang="zh-cn" class="switch-vers-default">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>OI导航 - 最贴心的上网导航</title>
    <meta name="keywords" content="OI导航,我爱导航,博客大全,网址大全" />
	<meta name="description" content="OI导航，收录独立博客站点，为IT人提供学习交流的场所 —— 我爱导航！" />
	
	<?php require ROOT_PATH.'includes/title.inc.php';?>
</head>
<body>
<?php 
    require ROOT_PATH.'includes/header.inc.php';
?>

<div class="f-r">    
    <div id="sites">
        <h2>站点列表</h2>
        <?php
            $_result_city = _query("SELECT * FROM city ORDER BY hit DESC");
            $i = 1;
            while (@$_city = mysql_fetch_array($_result_city)) {//获取的某个省份信息
            	if($i <= 34) {
            	    echo '<ul>';
            	    echo '<li><a href="city.php?id='.$_city['id'].'" title="查看更多'.$_city['name'].'站点" class="city" target="_blank">'.$_city['name'].'</a></li>';
            	    $_result_site = _query("SELECT * FROM oihao_blog_sites WHERE city_id={$_city['id']} ORDER BY hit DESC");
            	    $j = 1;
            	    while(@$_site = mysql_fetch_array($_result_site)) {//获取的某个站点的信息
            	        if($j <=5) {
                            if($_site['is_active'] == '1') {
                	            echo '<li><a href="count.php?id='.$_site['id'].'" title="'.$_site['name'].'" class="blog-sites" target="_blank">'.$_site['name'].'</a></li>';
                            }
            	        }
            	        $j ++;
            	    }
            	    echo '<li><a href="city.php?id='.$_city['id'].'" title="查看更多'.$_city['name'].'站点" class="more" target="_blank">&gt;&gt;</a></li>';
            	    echo '</ul>';
            	}
            	$i ++;
            }
        ?>
    </div> 
</div>


<div class="f-l">
     
    <div id="tools">
        <h2>常用网站</h2>
        <div class="good"><img src="images/favicon.ico" width="16" height="16"/><a href="add.php">新站加入</a></div>
        <div class="good"><img src="images/favicon/baidu.png" width="16" height="16"/><a href="http://www.baidu.com" target="_blank">百度</a></div>
        <div class="good"><img src="images/favicon/weibo.ico" width="16" height="16"/><a href="http://weibo.com" target="_blank">新浪微博</a></div>
        <div class="good"><img src="images/favicon/youku.ico" width="16" height="16"/><a href="http://www.youku.com" target="_blank">优酷</a></div>
        <div class="good"><img src="images/favicon/ifeng.ico" width="16" height="16"/><a href="http://www.ifeng.com" target="_blank">凤凰网</a></div>
        <div class="good"><img src="images/favicon/163.ico" width="16" height="16"/><a href="http://www.163.com" target="_blank">网易</a></div>
        <div class="good"><img src="images/favicon/taobao.ico" width="16" height="16"/><a href="http://www.taobao.com" target="_blank">淘宝</a></div>
        <div class="good"><img src="images/favicon/tmall.ico" width="16" height="16"/><a href="http://www.tmall.com" target="_blank">天猫</a></div>
        <div class="good"><img src="images/favicon/12306.ico" width="16" height="16"/><a href="http://www.12306.cn/mormhweb" target="_blank">12306</a></div>
        <div class="good"><img src="images/favicon/ganji.ico" width="16" height="16"/><a href="http://www.ganji.com" target="_blank">赶集网</a></div>
        <div class="good"><img src="images/favicon/autohome.ico" width="16" height="16"/><a href="http://www.autohome.com.cn" target="_blank">汽车之家</a></div>
        <div class="good"><img src="images/favicon/chinaz.ico" width="16" height="16"/><a href="http://www.chinaz.com" target="_blank">站长之家</a></div>
    </div>
    
    <div id="ads">
        <h2>广告</h2>
        <div class="adsite"><img src="images/favicon/2345.ico" width="16" height="16"/><a href="http://www.2345.com/?k381740148" target="_blank">2345网址导航</a></div>
    </div>
</div>
 
     
<?php
    require ROOT_PATH.'includes/footer.inc.php';
?>

</body>
</html>