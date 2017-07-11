<?php
/**
 * Guest Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn
 * ================================================
 * Author: smalle
 * Date: 2015-5-6
 */
session_start();//开启session才可以往session中读写数据
//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);

	set_time_limit(0);
	$url = 'http://news.163.com/special/0001386F/rank_whole.html';	
	$s_fname = md5($url).'.txt';
	$r_fname = md5($url).'_rs.txt';
	if(!file_exists($r_fname)){
		if(!file_exists($s_fname)){
			$s = file_get_contents($url);
//$s = iconv("gb2312","UTF-8//IGNORE",$s);//将采集网页的编码gb2312改为UTF-8
//echo $s;
			file_put_contents($s_fname,$s);
		}else{
			$s = file_get_contents($s_fname);
//$s = iconv("gb2312","UTF-8//IGNORE",$s);
//echo $s;
		}
		$reg = '/<div class="area areabg1">[\s\S]*<\/div>/i';
		$reg_item = '/<tr><td[^>]*>(<span>\d*<\/span>)?<a href="([^"]*)">([\s\S]*)<\/a><\/td><td[^>]*>(\d*)<\/td><\/tr>/iU';
		$arr_tab = array('hot_24','hot_week','hot_month','post_24','post_week','post_month');
		preg_match($reg,$s,$d);
		$s = $d[0];
		$arr = array(			
			'/<style[^>]*>[\s\S]*<\/style>/iU',
			'/<!--[\s\S]*-->/U',
			'/<script[^>]*>[\s\S]*<\/script>/iU'
		);
		$s = preg_replace($arr,'',$s);
		$arr = array("/\s+/","/\s*<\s*/","/\s*>\s*/","/\s*=\s*/");
		$to = array(' ','<','>','=');
		$s = preg_replace($arr,$to,$s);
		$arr = explode('<table width="100%" cellpadding="0" cellspacing="0" border="0">',$s);
		$i = -1;	
		foreach($arr as $v){
			preg_match_all($reg_item,$v,$d);
			if(count($d[0])==0) continue;
			$i++;
			unset($d[0]);
			unset($d[1]);
			$d = array_values($d);
			$RS_data[$arr_tab[$i]] = $d;			
		}
		$rs = serialize($RS_data);		
		file_put_contents($r_fname,$rs);
	}else{
		$rs = file_get_contents($r_fname);
		$RS_data = unserialize($rs);
	}
	$_SESSION['RS_data'] = $RS_data;
	
// 	header('Content-Type:text/html;charset=utf-8');
// 	echo '<pre>';
// 	print_r($RS_data);
// 	echo '</pre>';
?>
