<?php

//导入smarty配置文件
require 'smarty.inc.php';

$_smarty->assign('array', array('a'=>'一','b'=>'二','c'=>'三'));

//引入模板
$_smarty->display('func.tpl');

?>