<?php
	echo htmlentities('<strong>我是吴祁！</strong>');  //转换所有字符
	echo htmlspecialchars('<strong>我是吴祁！</strong>');  //转换特殊字符
	echo strip_tags('<strong>我是吴祁！</strong>');  //去掉了<strong>
	echo '<br />';
	echo addslashes("I'm 小易!");
	echo '<br />';
	
	$str = "I,will.be#back";
	$tok = strtok($str,",.#");
	while($tok) {
		echo "$tok ";
		$tok = strtok(",.#");
	}
	echo '<br />';
	
	echo strspn('ycm608','yc60.com@gmail.com');
	echo '<br />';
	echo strpos('yc60.com@gmail.com','c');
	echo '<br />';
	
	echo strlen("小易");
	echo '<br />';
	echo mb_strlen("小易",'UTF-8');
	echo '<br />';
?>