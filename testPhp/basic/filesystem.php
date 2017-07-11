<?php 

	$path = 'C:\AppServ\www\Basic6\Demo1.php';
	echo basename($path); 
	echo '<br />';
	echo dirname($path);
	echo '<br />';
	$array_path = pathinfo($path);
	print_r($array_path);
	echo '<br />';
	$path = 'index.php';
	echo realpath($path);
	echo '<br />';
	$file = 'H:/web/wamp/www/study/index.php';
	echo round(filesize($file)/1024,2).'KB';
	echo '<br />';
	$drive = 'C:';
	echo round(disk_free_space($drive)/1024/1024/1024,2).'GB';
	echo '<br />';
	$drive = 'C:';
	echo round(disk_total_space($drive)/1024/1024/1024,2).'GB';
	echo '<br />';
	$file = 'H:/web/wamp/www/study/index.php';
	date_default_timezone_set('Asia/Shanghai');
	echo date("Y-m-d,H:i:s",fileatime($file));
	echo '<br />';
	echo date("Y-m-d,H:i:s",filectime($file));
	echo '<br />';
	echo date("Y-m-d,H:i:s",filemtime($file));
	echo '<br />';
	
	file_put_contents('file.txt', '123');
	
	$dir = opendir('H:/web/wamp/www/study/');
	while (!!$file = readdir($dir)) {
		echo $file.'  ';
	}
	closedir($dir);
	
	
	
	
?>