<?php 
	
	echo preg_match('/ph*p/','pp');
	echo preg_match('/ph*p/','php');
	echo preg_match('/ph*p/','ppp');
	echo preg_match('/ph*p/','pap');
	echo preg_match('/ph*p/','pphp');
	echo '<br />';
	
	echo preg_match('/ph{2}p/','pppp');
	echo preg_match('/ph{2}p/','phhp');
	echo preg_match('/ph{2}p/','pphp');
	echo preg_match('/ph{2}p/','pphphp');
	echo '<br />';
	
	$language = array('php','asp','jsp','python','ruby');
	print_r(preg_grep('/p$/',$language));
	echo '<br />';
	
	$mode = '/([\w\.\_]{2,20})@([\w\-]{1,20}).([a-z]{2,6})/';
	$string = 'yc60.com@gmail.com';
	echo preg_match($mode,$string);
	echo '<br />';
	
	preg_match_all('/php[1-6]/','php5sdfphp4sdflljkphp3sdlfjphp2',$out);
	print_r($out);
	echo '<br />';
	
	$mode = '/\[b\](.*)\[\/b\]/U';
	$replace = '<strong>\1</strong>';
	$string = 'This is a [b]php5[/b],This is a [b]php4[/b]';
	echo preg_replace($mode,$replace,$string);
	echo '<br />';
	
	print_r(preg_split('/[\.@]/','yc60.com@gmail.com'));
	echo '<br />';
	
	
?>