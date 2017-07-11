<?php

//忽略报错
error_reporting(0);
//重写$_SERVER['PHP_SELF']，提交表单到本网页时防止恶意攻击
$phpfile = basename(__FILE__);
$_SERVER['PHP_SELF'] = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], $phpfile)).$phpfile; 

include('tools/config.php');
include('header.php');

if ($_COOKIE["password"] != md5($password)){
	if ($_POST["com"] != '1' ){
		echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST"> <input type="hidden" name="com" value="1" >密码:<input type="password" name="pwd"><br><input type="submit" value="登录"></form>';
		include('tools/config.php');
	}else{
		if ($_POST["pwd"] == "$password"){
			
			$fp=fopen($file,"a+");
			$data = fgets($fp);
			fclose($fp);
			if ($_POST["com"] != "2"){
				echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST"> <input type="hidden" name="com" value="2" > <textarea name="text" rows="20" cols="70">' . $data . '</textarea> <br> <input type="submit" value="修改"><br>';
			}else {
				echo "修改成功";
				$data=$_POST['text'];
				$fp=fopen($file,"a+");
				ftruncate($fp,0);
				fwrite($fp,$data);
				fclose($fp);
			}

			setcookie("password",md5($_POST["pwd"]));
		}else{
			echo "密码错误";
		}
	}
} else {
	$fp=fopen($file,"a+");
	$data = fgets($fp);
	fclose($fp);
	if ($_POST["com"] != "2"){
		echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST"> <input type="hidden" name="com" value="2" > <textarea name="text" rows="20" cols="70">' . $data . '</textarea> <br> <input type="submit" value="修改"><br>';
	}else {
		echo "修改成功";
		$data=$_POST['text'];
		$fp=fopen($file,"a+");
		ftruncate($fp,0);
		fwrite($fp,$data);
		fclose($fp);
	}
	
}



include('bottom.php');
include('footer.php');
?>