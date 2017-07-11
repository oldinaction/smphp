<?php
	
	header('Content-Type:text/html;charset=utf-8');

	define('DB_HOST', 'localhost:3306');
	define('DB_USER', 'root');	
	define('DB_PASS', 'root');
	define('DB_NAME', 'test');
	
	$conn = @mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('数据库连接失败，错误SQL信息：'.mysql_error());
	
	mysql_select_db(DB_NAME) or die('选择数据库失败，错误SQL信息：'.mysql_error());
	mysql_query('set names utf8') or die('设置数据库字符集失败，错误SQL信息：'.mysql_error()); //不是utf-8
	
?>