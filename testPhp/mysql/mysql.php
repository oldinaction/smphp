<?php
	
	require 'config.php';
	
	//增
	$query = "INSERT INTO study(username, password) VALUES('smalle', '123456')";
	$result = @mysql_query($query) or die('添加数据失败，错误SQL信息：'.mysql_error());
	if($result) echo '添加数据成功！';
	
	//改
	$query = "UPDATE study SET password='abc123' WHERE username='smalle'";
	$result = @mysql_query($query) or die('修改数据失败，错误SQL信息：'.mysql_error());
	if($result) echo '修改数据成功！';
	
	//查
	$query = 'SELECT id,username,password,regdate FROM study ORDER BY regdate DESC';
	$result = @mysql_query($query) or die('查询数据失败，错误SQL信息：'.mysql_error());
	while(!!$row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo $row['id'].'---'.$row['username'].'---'.$row['password'].'---'.$row['regdate'].'<br />';
	}
	
	//删
	$query = "DELETE FROM study WHERE username='smalle'";
	$result = @mysql_query($query) or die('删除数据失败，错误SQL信息：'.mysql_error());
	if($result) echo '删除数据成功！';
	
	mysql_close($conn);
	
?>