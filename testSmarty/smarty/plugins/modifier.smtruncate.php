<?php
/**
 * Smalle 自定义变量调节器（截取字符串）
 * 注意：
 * 1、文件命名格式：modifier.xxx.php
 * 2、函数的命名格式：smarty_modifier_xxx($params){}
 * 3、使用：{$str|smtruncate:0:20:'utf-8':'###'} $str是注入进来的变量，会传给函数的第一个参数
 */

function smarty_modifier_smtruncate($_str, $_length, $_start=0, $_encoding='utf-8', $_endStr='...'){
    if(mb_strlen($_str) > $_length){
        return mb_substr($_str, $_start, $_length, $_encoding);
    } else {
        return mb_substr($_str, $_start, $_length, $_encoding).$_endStr;
    }
    
}

?>
