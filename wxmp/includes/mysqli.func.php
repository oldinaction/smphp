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

//防止非法调用
if(!defined('IN_TG')) {
    exit('Access Denied —— 非法调用！');
}

$_conn = null;
function _connect() {
    global $_conn;
    if(!$_conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME)) {
        exit('数据库连接失败！');
    }
}

function _set_names() {
    // $GLOBALS['_conn']获取全局变量的值，此处不能加 $
    if(!mysqli_query($GLOBALS['_conn'],'SET NAMES UTF8')) {
        exit('设置字符集失败！');
    }
}

function _query($_sql) {
    global $_conn;
    if(!$result = mysqli_query($_conn, $_sql)) {
        exit('SQL执行失败！'.mysqli_error($_conn));
    }
    return $result;
}

/**
 * _fetch_array()   从结果集中取得数组
 * @access public
 * @param string $_sql  sql语句
 * @return array
 */
function _fetch_array($_sql) {
    return mysqli_fetch_array(_query($_sql), MYSQLI_ASSOC);
}

/**
 * _affected_rows() 表示执行sql语句后影响的数据条数
 * @access public
 * @return number   返回1表示影响了1条数据，返回-1表示最后一条SQL语句执行失败
 */
function _affected_rows() {
    global $_conn;
    return mysqli_affected_rows($_conn);
}

/**
 * _is_repeat() 判断某个字段是否重复
 * @access public
 * @param string $_sql
 * @param string $_info
 * @return void
 */
function _is_repeat($_sql, $_info) {
    if(_fetch_array($_sql)) {
        _alert_back($_info);
    }
}

function _close() {
    global $_conn;
    if(!mysqli_close($_conn)) {
        exit('关闭数据库异常！');
    }
}








?>