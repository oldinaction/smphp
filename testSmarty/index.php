<?php

//导入smarty配置文件
require 'smarty.inc.php';

$_title = 'Smarty模板引擎';
$_array1 = array('1', '2', '3');
$_array2 = array('1'=>'一', '2'=>'二', '3'=>'三');
Class Smalle {
	public $site = 'AEZO';
	public function url(){
		return 'http://www.aezo.cn';
	}
}

define('SMALLE', '微信号：smallelife');

//分配普通变量，第一个参数是Smarty模板引擎变量，第二个参数是PHP变量
$_smarty->assign('title', $_title);
$_smarty->assign('a', 1);
$_smarty->assign('b', 2);
//分配数组变量
$_smarty->assign('array1', $_array1);
$_smarty->assign('array2', $_array2);
//分配对象变量
$_smarty->assign('smalle', new Smalle());

//引入模板
$_smarty->display('index.tpl');

?>