<?php
/**
 * 淘宝商品链接转成阿里妈妈链接
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn
 * ================================================
 * Author: smalle
 * Date: 2015-12-22
 */
error_reporting(E_ALL & ~E_NOTICE);
//https://detail.tmall.com/item.htm?spm=a230r.1.14.3.rMSqBQ&id=37776225683&cm_id=140105335569ed55e27b&abbucket=18
$url = @$_POST["url"];
if(null != $url) {
    $parten = '/^(.*item\.htm)(.*)([\?\&]{1})(id\=\d+)(.*)/';
    preg_match_all($parten, $url, $result);
    $resultUrl = $result[1][0] . '?' . $result[4][0] . '&ali_trackid=2:mm_30252628_12032718_43406122';
} else {
    $resultUrl = "javascript:alert('请先转化链接后再前往购买');";
}
//mm_30252628_11832164_43344689

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>链接转化器 - smalle</title>
<!--css,js-->
<style type="text/css">
    .*{
        margin:0;
        padding:0;
    }
    body{
        font-size:18px;
    }
    #container{
         width:1000px;
         margin:100px auto;
    }
     #container h2{
        text-align:center;
     }
    input{
       display:block;
       height:30px;
       margin-bottom:20px;
    }
    #changeUrl{
        display:inline-block;
        width:200px;
    }
    input[type=text]{
        width:900px;
    }
    a{
       display:inline-block;
       text-decoration:none;
       margin-left:30px;  
    }
</style>
</head>
<body>
    
	<div id="container">
	   <h2>淘宝商品链接转化器 - 胜强</h2>
		<form action="mmurl.php" method="post">
			原始链接(链接需要包含http://或者https://)
			<input name="url" type="text" placeholder="第一步：请在此处输入相关商品链接" />
			转换后链接(转换后的链接末尾为 <font color="red">mm_30252628_12032718_43406122</font> )
			<input id="resultUrl" type="text" placeholder="转换后的链接" value="<?php if($resultUrl != 'javascript:alert(\'请先转化链接后再前往购买\');') echo $resultUrl;?>"/>
		    <input id="changeUrl" type="submit" value="第二步：点击此按钮转化链接" />
			<a id="urlhref" href="<?php echo $resultUrl;?>" target="_blank">第三步：点击此链接去淘宝购买</a>
		</form>
		<br />
		&copy;copyright : AEZO.CN
	</div>

</body>
</html>





