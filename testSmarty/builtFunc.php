<?php

//导入smarty配置文件
require 'smarty.inc.php';

/**
 * {insert}内置函数中调用的即为此处的函数
 * 注意：
 * 1、函数命名：insert_xxx  (xxx指{insert}内置函数中name的值)
 * 2、{insert}内置函数中的参数会以数组的形式传递给此函数
 */
function insert_getConfig($_arr){
	return $_arr['site'].'：'.$_arr['url'];
}

$_smarty->assign('arr',array('a'=>'一','b'=>'二','c'=>'三'));

//引入模板
$_smarty->display('builtFunc.tpl');

?>