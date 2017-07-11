<?php
	//缩小图片	

	header('Content-type: image/png');
	define('DIR',dirname(__FILE__).'/');
	list($width, $height) = getimagesize(DIR.'180.png');
	$_width = $width * 0.7;
	$_height = $height * 0.7;
	$_img = imagecreatetruecolor($_width, $_height);
	$img = imagecreatefrompng(DIR.'180.png');
	imagecopyresampled($_img, $img, 0, 0, 0, 0,$_width, $_height, $width, $height);
	imagepng($_img);
	imagedestroy($img);
	Imagedestroy($_img);

?>