<?php

//获取硬路径
define('ROOT_PATH', dirname(__FILE__).'/');
//引入smarty核心类文件
require ROOT_PATH.'smarty/Smarty.class.php';

//实例化Smarty对象
$_smarty = new Smarty();

//自定义模板文件目录，此时是将Smarty默认路径重写了一遍
$_smarty->template_dir = './templates/';
//编译文件目录
$_smarty->compile_dir = './templates_c/';
//配置变量目录
$_smarty->config_dir = './configs/';
//缓存目录
$_smarty->cache_dir = './cache/';
//是否开启缓存，开发阶段，要关闭缓存，1/true表示开启缓存
$_smarty->caching = 1;
//缓存的时间,默认是1小时
$_smarty->cache_lifetime = 60*60*24;
//左定界符，{}是Smarty默认的左右定界符
$_smarty->left_delimiter = '{';
//右定界符
$_smarty->right_delimiter = '}';

?>