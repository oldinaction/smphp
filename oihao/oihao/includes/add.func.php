<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-4-3
 */

//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}

function _check_name($_name, $_min_len, $_max_len) {
    //去掉空格
    $_name = trim($_name);
    //长度判断
	if(mb_strlen($_name, 'utf-8') < $_min_len || mb_strlen($_name, 'utf-8') > $_max_len) {
		_alert_back('网站名称不能超过'.$_max_len.'个字符或者少于'.$_min_len.'个字符');
	}
	return mysql_real_escape_string($_name);
}

/**
 * _check_url() 验证URL地址
 * @access public
 * @param string $_url  URL地址
 * @param int $_min_len     最小长度
 * @param int $_max_len     最大长度
 * @return string  验证后的URL地址
 */
function _check_url($_url, $_min_len, $_max_len) {
    $_pattern = '/((http|ftp|https):\/\/)(([a-zA-Z0-9\._-]+\.[a-zA-Z]{2,6})|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,4})*(\/[a-zA-Z0-9\&%_\.\/-~-]*)?/';
    if(!preg_match($_pattern, $_url)) {
        _alert_back('URL格式不正确！');
    }
    if(strlen($_url) < $_min_len || strlen($_url) > $_max_len) {
        _alert_back('网址太长或太短，本站不收录！');
    }
    return mysql_real_escape_string($_url);
}

/**
 * _check_class     验证网站分类
 * @access public
 * @param string $_class
 * @return string
 */
function _check_class($_class){
	if($_class == 0){
	    _alert_back('请选择网站分类！');
	} else {
	    echo mysql_real_escape_string($_class);
	    return mysql_real_escape_string($_class);
	}
}

function _check_tag($_tag_arr) {
    if(count($_tag_arr) > 0) {
        $_tag = implode(',', $_tag_arr);
        return mysql_real_escape_string($_tag);
    } else {
        _alert_back('请选择网站标签！');
    }
}

function _check_desc($_desc, $_min_len, $_max_len) {
    $_desc = trim($_desc);
    if(mb_strlen($_desc, 'utf-8') < $_min_len || mb_strlen($_desc, 'utf-8') > $_max_len) {
        _alert_back('网站描述不能少于'.$_min_len.'个字符，或者不能大于'.$_max_len.'个字符');
    }
    return mysql_real_escape_string($_desc);
}

function _check_city($_city) {
    if($_city == "0"){
    	_alert_back("请选择站长所在省份，方便大家交流哦！");
    }
    return mysql_real_escape_string($_city);;
}

/**
 * _check_email()   验证邮箱地址
 * @access  public
 * @param string $_email    邮箱地址
 * @param int $_min_len     最小长度
 * @param int $_max_len     最大长度
 * @return string  验证后的邮箱地址
 */
function _check_email($_email, $_min_len, $_max_len) {
    $_pattern = '/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/';
	if(!preg_match($_pattern, $_email)) {
		_alert_back('邮箱格式错误！');
	}	
	if(strlen($_email) < $_min_len || strlen($_email) > $_max_len) {
	    _alert_back('邮箱长度不符合规范！');
	}
	return mysql_real_escape_string($_email);
}


?>