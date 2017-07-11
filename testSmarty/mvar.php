<?php

//导入smarty配置文件
require 'smarty.inc.php';

$_url = 'http://www.aezo.cn/tag=<strong>小易你好啊</strong>';
$_smarty->assign('url', $_url);

//引入模板
$_smarty->display('mvar.tpl');

?>