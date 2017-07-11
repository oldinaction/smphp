<?php
	header("Content-Type:text/html;Charset=utf-8");
	
	echo "小易，你好！";
	echo "<br />";

	$a = $b = 1.1;
	echo intval($a);
	echo settype($b, 'integer');
	echo gettype($a);
	echo gettype($b);
	echo "<br />";

	echo rand();
	echo "<br />";
	echo rand(1,10);
	echo "<br />";
	echo mt_rand(10, 20);
	echo "<br />";
	echo getrandmax();
	echo "<br />";
	echo mt_getrandmax();
	echo "<br />";

	$i = 123456;
	$si = number_format($i,2,".",",");
	echo $si;
	echo "<br />";

	echo $_SERVER["HTTP_HOST"];
	phpinfo();

?>
