<?php
	
	//只有是点击提交按钮跳转过来的，如果只输入url直接访问则false	
	if (!isset($_POST['send'])) {
		header('Location:form.php');
		exit();
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$code = $_POST['code'];
	$email = $_POST['email'];
	
	//利用JS提示错误信息
	if(strlen($username) < 2 || strlen($username) > 16) {
		echo "<script>alert('用户名不能小于两位或者大于10位');history.back();</script>";
		exit();
	}
	
	//验证码判断
	if(strlen($code) != 4 || !is_numeric($code)) {
		echo "<script>alert('验证码错误');history.back();</script>";
		exit();
	}
	
	//正则判断邮箱格式
	$pattern = '/^([\w\.\-]{2,20})@([\w\-]{1,16})(\.(\w{1,4})){1,3}$/';
	if(!preg_match($pattern, $email)) {
		echo "<script>alert('邮箱格式错误');history.back();</script>";
		exit();
	}
	
	//处理用户名
	$username = trim($username);
	$username = htmlspecialchars($username); //屏蔽html特殊标识
	
	echo $username . '<br />';
	echo $email . '<br />';
	
?>