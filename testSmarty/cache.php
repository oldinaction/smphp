<?php

//设置时区
date_default_timezone_set('Asia/Shanghai');

//导入smarty配置文件
require 'smarty.inc.php';

//多重缓存，访问 http://127.0.0.1/smarty/cache.php?id=1&page=1 改变参数的值
$_id = @$_GET['id'];
$_smarty->assign('id', $_id);

//部分片段不缓存
function smarty_block_nocache($param, $content, $smarty) {
    return $content;
}
//注册插件
$_smarty->registerPlugin('block','nocache', 'smarty_block_nocache', false);

//清除所有缓存
//$_smarty->clearAllCache();

//引入模板,多重缓存时要加上第二个参数（可以有多个参数）
//$_smarty->display('cache.tpl', $_id);//多重缓存时也可以将URL中的参数全部传给后面的参数
$_smarty->display('cache.tpl', $_SERVER["REQUEST_URI"]);

?>