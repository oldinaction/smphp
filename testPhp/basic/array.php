<?php
	
	$arr = array('a', 'b', 'c');
	$nums = range(1, 5);
	print_r($nums);
	echo "<br />";
	foreach ($arr as $i) {
		echo $i;
	}
	echo "<br />";
	
	$myarr = array('baidu'=>'李彦宏','taobao'=>'马云','tencent'=>'马化腾');
	echo $myarr['taobao'];
	echo $myarr['baidu'];
	echo "<br />";
	
	print_r(each($myarr));
	echo "<br />";
	
	reset($myarr);
	while(!! list($key, $value) = each($myarr)) {
		echo "$key --- $value,";
	}
		

?>