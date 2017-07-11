<?php
session_start();
error_reporting(0);
$rand=$_SESSION['rand']=rand(10000,99999);
Header("Content-type: image/gif");//通知浏览器将要输出GIF图片
 //准备图片的相关参数 
$im = imagecreate(60,20);//图片大小
$color2 = ImageColorAllocate($im,rand(150,200),rand(150,205),rand(150,200));//RGB标识符
imagefill($im,0,0,$color2);//填充背景
$color3 = ImageColorAllocate($im,rand(0,255),rand(0,0),rand(0,255));
//imagestring($im, 5, 3, 3, $rand, $color3);//开始绘图
imagestring($im, 5, 8, 2, $rand, $color3);
for ($i=1;$i<2;$i++)
{
$randcolor = ImageColorAllocate($im,rand(0,100),rand(0,255),rand(0,100));
imageline($im,0,rand(0,30),60,rand(0,30),$randcolor);//线型干扰
}
for($i=0;$i<100;$i++)
{
$randcolor = ImageColorAllocate($im,rand(0,255),rand(0,255),rand(0,255));
imagesetpixel($im, rand()%50 , rand()%20 , $randcolor);//粒子干扰
 }
ImageGIF($im);//输出验证图片
ImageDestroy($im);//释放图像内存
?>