<?php
	//验证码
	
	//设置标头
	header('Content-Type:image/png');
	
	$codes = array('0','1','2','3','4','5','6','7','8','9','q','w','e','r','t','y','u','i','p','a','s','d','f','g','h','j','k','z','x','c','v','b','n','m');//除去o和l
	for($i = 0; $i <= 3; $i++) {
		$index = mt_rand(0, 33);
		$code .= $codes[$index];
	}
	
	//获取资源句柄
	$img = imagecreatetruecolor(60, 24);
	
	//改背景
	$blue = imagecolorallocate($img, 0, 102, 255);
	imagefill($img, 0, 0, $blue);
	
	//在画布上绘图
	$white = imagecolorallocate($img, 255, 255, 255);
	imagestring($img, 6, 12, 4, $code, $white);
	
	//输出图像
	imagepng($img);
	
	//清除资源
	imagedestroy($img);

?>