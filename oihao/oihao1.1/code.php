<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-1-21
 */
session_start();//开启session才可以往session中读写数据
//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件（__DIR__不包含/）
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
	
    _code();

?>