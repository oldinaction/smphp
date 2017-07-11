<?php 
	
	$code = '';
	$codes = array('0','1','2','3','4','5','6','7','8','9','q','w','e','r','t','y','u','i','p','a','s','d','f','g','h','j','k','z','x','c','v','b','n','m');//除去o和l
	for($i = 0; $i <= 3; $i++) {
		$index = mt_rand(0, 33);
		$code .= $codes[$index];
	}
	echo $code;	

?>