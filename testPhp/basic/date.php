<?php 

	echo date('Y-m-d H:i:s');
	echo '<br />';
	print_r(gettimeofday());
	echo '<br />';
	print_r(getdate(1184557366));
	echo '<br />';
	echo mktime(14,50,59,5,27,2007);
	echo '<br />';
	
	$now = time();
	$taxday = mktime(4,0,0,6,26,1992);
	echo round(($now - $taxday)/60/60/24);
	echo '<br />';
	echo date_default_timezone_get();
	echo '<br />';
	
	function fntime() {
		list($msec, $sec) = explode(' ', microtime());
		return $msec+$sec;
	}
	$start_time = fntime();
	for($i=0;$i<1000000;$i++) {
		//
	}
	$end_time = fntime();
	echo round($end_time - $start_time,4);

?>