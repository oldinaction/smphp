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

#公共文件，包含配置信息

#***防止页PHP面中报Undefined index和Undefined variable警告***
error_reporting(E_ALL & ~E_NOTICE);

//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}

//设置字符编码
header('Content-Type:text/html; charset=utf-8');

//定义根目录为常量
define('ROOT_PATH', substr(__DIR__, 0, -8));

//拒绝PHP低版本
if (PHP_VERSION < '4.1.0') {
    exit('Version is too Low —— PHP版本太低！');
}

//调用函数库
require ROOT_PATH.'includes/global.func.php';
require ROOT_PATH.'includes/mysql.func.php';

#数据库配置信息
// define(DB_HOST, 'localhost');
// define(DB_USER, 'root');
// define(DB_PASSWORD, 'root');
// define(DB_NAME, 'oihao');

define(DB_HOST, 'bdm271789431.my3w.com');
define(DB_USER, 'bdm271789431');
define(DB_PASSWORD, 'Y120306sq');
define(DB_NAME, 'bdm271789431_db');

//链接数据库
_connect();
//选择数据库
_select_db();
//设置字符集
_set_names();


?>