<?php
	//设置标头
	header('Content-Type:image/png');
	
	//获取资源句柄
	$img = imagecreatetruecolor(200, 200);
	
	//改背景
	$blue = imagecolorallocate($img, 0, 102, 255);
	imagefill($img, 0, 0, $blue);
	
	//在画布上绘图
	$white = imagecolorallocate($img, 255, 255, 255);
	imageline($img, 0, 0, 200, 200, $white);
	imageline($img, 0, 200, 200, 0, $white);
	imagestring($img, 5, 80, 20, "Smalle", $white);
	
	//输出图像
	imagepng($img);
	
	//清除资源
	imagedestroy($img);
	
?>