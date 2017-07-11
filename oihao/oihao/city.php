<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-4-7
 */

session_start();//开启session才可以往session中读写数据
//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件（__DIR__不包含/）
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
//定义一个常量用来指本页内容
define('SCRIPT', 'city');

?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>OI导航 - 省份站点</title>
	
	<?php require ROOT_PATH.'includes/title.inc.php';?>
	
</head>
<body>
    <?php 
        require ROOT_PATH.'includes/header.inc.php';
    ?>
    
    <div id="city">
        <?php
            $id = $_GET['id'];
            //从数据库查找相应省份
            $_result_city = _query("SELECT * FROM city WHERE id=$id LIMIT 1");
            $_city = mysql_fetch_array($_result_city );
            echo '<h2>'.$_city['name'].'站点导航</h2>';
            echo '<ul>';
            //从数据库输出此省份的站点
            $_result_site = _query("SELECT * FROM oihao_blog_sites WHERE city_id=$id ORDER BY hit DESC");
            while(@$_site = mysql_fetch_array($_result_site)) {
                if($_site['is_active'] == '1') {
                    echo '<li><a href="count.php?id='.$_site['id'].'" title="'.$_site['name'].'" class="blog-sites" target="_blank">'.$_site['name'].'</a></li>';
                }
            }
            echo '</ul>';   	
        ?>
    </div>
     
    <?php
        require ROOT_PATH.'includes/footer.inc.php';
    ?>
    
</body>
</html>