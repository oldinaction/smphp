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

//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}
//防止非HTML页面调用
if(!defined('SCRIPT')) {
    exit('Script Error —— 页面错误(本页面为非HTML页面)！');
}
?>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/default/basic.css"/>
<link rel="stylesheet" type="text/css" href="css/default/<?php echo SCRIPT;?>.css"/>
