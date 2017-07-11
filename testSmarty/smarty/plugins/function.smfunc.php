<?php
/**
 * Smalle 以插件的形式自定义的函数
 * 注意：
 * 1、文件格式为function.xxx.php
 * 2、函数名为smarty_function_xxx($params){}
 * 3、使用：{smfunc a=1 b=2} a、b参数和其值会以关联数组的形式传给此函数的第一个参数
 */

function smarty_function_smfunc($_arr){

    $_cout = $_arr['a'] + $_arr['b'];
    return $_cout;
}

?>
