<?php
/**
 * Guest Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn
 * ================================================
 * Author: smalle
 * Date: 2015-1-21
 */

#核心函数库
//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}

/**
 * _alert_back()   弹窗提示
 * @param $_info   要提示的信息
 */
function _alert_back($_info){
	echo "<script type='text/javascript'>alert('".$_info."');history.back();</script>";
	exit();
}

/**
 * _location()  JS页面跳转
 * @param string $_info     要提示的信息
 * @param string $_url      要跳转的页面
 */
function _location($_url,$_info=null) {
    if($_info == null){
        echo "<script type='text/javascript'>location.href='$_url';</script>";
    }
    echo "<script type='text/javascript'>alert('$_info');location.href='$_url';</script>";
}

/**
 * _sha1_uniqid()   获取一个40位的唯一标示符
 * @access public
 * @return string
 */
function _sha1_uniqid() {
    return mysql_real_escape_string(sha1(uniqid(rand(),true)));
}

/**
 * _check_code()    判断验证码是否正确
 * @access  public
 * @param string $_start_code   第一个验证码
 * @param string $_end_code     第二个验证码
 * @return void
 */
function _check_code($_start_code, $_end_code) {
    if($_start_code != $_end_code) {
        _alert_back('验证码错误！');
    }
}

/**
 * _code() 获取一张验证码图片
 * @param number $_width 图片宽度,默认75
 * @param number $_height 图片高度,默认25
 * @param number $_code_num 验证码位数,默认4位
 * @return void
 * @access public
 */
function _code($_width = 75, $_height = 25, $_code_num = 4) {
    $_code = ''; //不写就报变量没有定义的错误
    $_codes = array('1','2','3','4','5','6','7','8','9','q','w','e','r','t','y','u','i','p','a','s','d','f','g','h','j','k','z','x','c','v','b','n','m');//除去o、l、0
    for($i = 0; $i < $_code_num; $i++) {
        $_index = mt_rand(0, 32);
        $_code .= $_codes[$_index];
    }
    $_SESSION['code'] = $_code;//把验证码放到session中
    //获取图片资源句柄
    $_img = imagecreatetruecolor($_width, $_height);
    //改背景
    $_white = imagecolorallocate($_img, 255, 255, 255);
    imagefill($_img, 0, 0, $_white);
    //加一个黑色边框
    $_black = imagecolorallocate($_img,0,0,0);
    imagerectangle($_img, 0, 0, $_width-1, $_height-1, $_black);
    //加几条随机干扰线
    for($i = 1; $i <= 5; $i++) {
        $_rand_color = imagecolorallocate($_img,mt_rand(0, 255),mt_rand(0, 255),mt_rand(0, 255));
        imageline($_img, mt_rand(1, $_width-8), mt_rand(1, $_height-8), mt_rand(1, $_width-8), mt_rand(1, $_height-8), $_rand_color);
    }
    //随机打雪花
    for ($i=1; $i<60; $i++) {
        $_rand_color = imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
        imagestring($_img, 1, mt_rand(1,$_width-8), mt_rand(1,$_height-8), "*", $_rand_color);
    }
    //在画布上绘验证码
    for($i=0; $i<strlen($_SESSION['code']); $i++) {
        $_rand_color = imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
        imagestring($_img, mt_rand(5,7), $i*$_width/4+mt_rand(1,8), mt_rand(1,$_height/3), $_SESSION['code'][$i], $_rand_color);
    }
    //设置标头
    header('Content-Type:image/png');
    //输出图像
    imagepng($_img);
    //清除资源
    imagedestroy($_img);
}
	
	

?>