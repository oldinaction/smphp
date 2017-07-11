<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-4-9
 */

//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件(__DIR__不包含/)
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
//定义一个常量用来指本页内容,用于智能导入CSS文件
define('SCRIPT', 'deal');

//防止跳过登陆页面直接访问
if( $_SERVER['HTTP_REFERER'] == "" )
{
    header("Location:smalle.php");//如果不是本地访问，则跳转到此页面
    exit;
}

if($_GET['action'] == "deal") {
    $_id = $_GET['id'];
    $_tag = $_GET['tag'];
    _query("UPDATE oihao_blog_sites SET is_deal=1 WHERE id=$_id");
    if($_tag == '1'){
        _query("UPDATE oihao_blog_sites SET is_active=1 WHERE id=$_id");
    }
    if(_affected_rows() ==1){
        _close();
        _location("deal.php");
    } else {
        _close();
        _alert_back("操作失败！");
    }
}


?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>OI主页后台 - 审核</title>
	
	<?php require ROOT_PATH.'includes/title.inc.php';?>
	
</head>
<body>
    <?php 
        require ROOT_PATH.'includes/header.inc.php';
    ?>
    
    <div id="no-deal">
    <?php
        echo '<h2>还未审核的站点</h2>';
        echo '<ul>';
        //从数据库输出未审核的站点
        $_result_site = _query("SELECT * FROM oihao_blog_sites WHERE is_deal=0");
        while(@$_site = mysql_fetch_array($_result_site)) {
            echo '<li><a href="count.php?id='.$_site['id'].'" title="'.$_site['name'].'" class="blog-sites" target="_blank">'.$_site['name'].'</a></li>';
            echo '<form action="deal.php" method="get" >
                <input name=action type=hidden value="deal"/>
                <input name=id type=hidden value="'.$_site['id'].'"/>
                <button type="submit" name=tag value="1">YES</button>
                <button type="submit" name=tag value="0">NO</button>
                </form>';
        }
        echo '</ul>';   	
    ?>
    </div>

     
     
    <?php
        require ROOT_PATH.'includes/footer.inc.php';
    ?>

</body>
</html>