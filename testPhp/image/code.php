<?php
    $_width = 75;
    $_height = 25;
    $_code_num = 4;
    
    $_code = ''; //不写就报变量没有定义的错误
    $_codes = array('0','1','2','3','4','5','6','7','8','9','q','w','e','r','t','y','u','i','p','a','s','d','f','g','h','j','k','z','x','c','v','b','n','m');//除去o和l
    for($i = 0; $i < $_code_num; $i++) {
        $_index = mt_rand(0, 33);
        $_code .= $_codes[$_index];
    }
    $_SESSION['code'] = $_code;
    //获取图片资源句柄
    $_img = imagecreatetruecolor($_width, $_height);
    //改背景
    $_white = imagecolorallocate($_img, 255, 255, 255);
    imagefill($_img, 0, 0, $_white);
    //加一个黑色边框
    $_black = imagecolorallocate($_img,0,0,0);
    imagerectangle($_img, 0, 0, $_width-1, $_height-1, $_black);
    //加几条随机干扰线
    for($i = 1; $i <= 5; $i++) {
        $_rand_color = imagecolorallocate($_img,mt_rand(0, 255),mt_rand(0, 255),mt_rand(0, 255));
        imageline($_img, mt_rand(1, $_width-8), mt_rand(1, $_height-8), mt_rand(1, $_width-8), mt_rand(1, $_height-8), $_rand_color);
    }
    //随机打雪花
    for ($i=1; $i<60; $i++) {
        $_rand_color = imagecolorallocate($_img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
        imagestring($_img, 1, mt_rand(1,$_width-8), mt_rand(1,$_height-8), "*", $_rand_color);
    }
    //在画布上绘验证码
    for($i=0; $i<strlen($_SESSION['code']); $i++) {
        $_rand_color = imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
        imagestring($_img, mt_rand(5,7), $i*$_width/4+mt_rand(1,8), mt_rand(1,$_height/3), $_SESSION['code'][$i], $_rand_color);
    }
    //设置标头
    header('Content-Type:image/png');
    //输出图像
    imagepng($_img);
    //清除资源
    imagedestroy($_img);

?>