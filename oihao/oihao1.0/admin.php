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
session_start();
//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件(__DIR__不包含/)
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
//定义一个常量用来指本页内容,用于智能导入CSS文件
define('SCRIPT', 'admin');

if($_POST['action'] == "smalle") {
    $_result_user = _query("SELECT * FROM user WHERE id=1");
    while (@$_user = mysql_fetch_array($_result_user)){
        if($_POST['username'] != '' && $_POST['password'] != ''){
            if($_user['username'] == $_POST['username'] && $_user['password'] == sha1($_POST['password'])){
            	_location('deal.php');
            } else {
            	_location('admin.php', '登陆失败！');
            }    
        } else {
        	_alert_back("请填写用户名或密码！");
        }      
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
    
    <div id="smalle">
        <form action="smalle.php" method="post">
            <input type="hidden" name="action" value="smalle"/>
                            用户名：<input type="text" name="username"/>
                            密码：<input type="password" name="password"/>
            <input type="submit" value="登陆"/>
            <input type="reset" value="重置"/>
        </form>
    </div>
     
     
    <?php
        require ROOT_PATH.'includes/footer.inc.php';
    ?>

</body>
</html>