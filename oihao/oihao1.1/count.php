<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-4-7
 */

define('IN_TG', true);
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快

$id = $_GET['id'];//接收ID值
$_resu_hit = _query("UPDATE oihao_blog_sites SET hit=hit+'1' WHERE id = '$id'");//增加点击记录，***注意此sql语句的运算***

$_site = _fetch_array("SELECT * FROM oihao_blog_sites WHERE id=$id LIMIT 1");
$url = "{$_site['url']}"; //执行更新后要跳转的地址,就是去文章页面
_close();

sleep(2);
header("location: $url"); //执行跳转
?>