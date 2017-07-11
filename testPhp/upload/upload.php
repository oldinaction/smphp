<?php
		
	define('MAX_SIZE', 2000000);
	define('URL', dirname(__FILE__).'/uploads/');
	$fileMimes = array('image/png','image/x-png','image/jpeg','image/pjpeg');
	
	if(is_array($fileMimes)) {
		if(!in_array($_FILES['userfile']['type'], $fileMimes)) {
			echo "<script>alert('本站只允许上传png和jpeg图片');history.back();</script>";
			exit;
		}
	}

	if($_FILES["userfile"]["error"] > 0) {
		switch($_FILES["userfile"]["error"]) {
			case 1 :
				echo "<script>alert('文件的大小超出了配置约定值');history.back();</script>";
				break;
			case 2 :
				echo "<script>alert('文件的大小超出了表单约定值');history.back();</script>";
				break;
			case 3 :
				echo "<script>alert('文件只被部分上上传');history.back();</script>";
				break;
			case 4 :
				echo "<script>alert('没有上传文件');history.back();</script>";
				break;
			default:
				echo "<script>alert('未知错误');history.back();</script>";
				exit;
		}
	}
	
	if($_FILES['userfile']['size'] > MAX_SIZE) {
		echo "<script>alert('文件的大小超出了配置约定值');history.back();</script>";
		exit();
	}
	
	//判断上传地址是否存在，没有则创建文件夹，最大权限0777
	if(!is_dir(URL)) {
		mkdir(URL,0777);
	}
	
	if (is_uploaded_file($_FILES["userfile"]["tmp_name"])) {
		if (!move_uploaded_file($_FILES["userfile"]["tmp_name"],URL.$_FILES["userfile"]["name"])) {
			echo "<script>alert('移动文件失败');history.back();</script>";
			exit;
		}
	} else {
		echo "<script>alert('找不到上传的文件');history.back();</script>";
		exit;
	}
	
	print_r($_FILES['userfile']);
	echo "<script>alert('文件上传成功');location.href='prev.php?url=".$_FILES['userfile']['name']."';</script>"; 
	

?>