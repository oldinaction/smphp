<?php
	//水印图片

	header('Content-Type:image/png');
	define('DIR', dirname(__FILE__).'/');
	$img = imagecreatefrompng(DIR.'180.png');
	$black = imagecolorallocate($img, 0, 0, 0);
	//使用默认字体
	imagestring($img,3,5,5,'http://www.aezo.cn', $black);
	//使用自己的字体
	$font = 'C:\Windows\Fonts\Yellows.ttf';
	imagettftext($img,20,0,20,100,$black,$font,'Smalle');
	imagepng($img);
	imagedestroy($img);

?>