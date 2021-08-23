<?php
/**
 * 微信小程序相关
 * User: smalle
 * Time: 2019/2/28 22:04
 * Site: http://www.aezo.cn
 */

if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}

# 小程序配置
define(SQ_APPID, 'xxx');
define(SQ_SECRET, 'xxx');
define("CODE2SESSION_URL",
    "https://api.weixin.qq.com/sns/jscode2session?appid=".SQ_APPID."&secret=".SQ_SECRET."&js_code=%s&grant_type=authorization_code");

function wxmp_code_to_session($code) {
    $url = sprintf(CODE2SESSION_URL, $code); // 字符串格式化
    $html = file_get_contents($url); // json转obj
    $json = json_decode($html);
    echo $json;
}
