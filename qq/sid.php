<div>
	
	<?php
	error_reporting(0);
	function get_sid( $qq , $pwd , $type ) {
	$curl = curl_init('http://pt5.3g.qq.com/handleLogin?r=' . time() );
	curl_setopt($curl,CURLOPT_USERAGENT,'TTMobile/09.03.18/symbianOS9.1 Series60/3.0 Nokia6120cAP3.03');
	curl_setopt($curl,CURLOPT_POST,true);
	curl_setopt($curl,CURLOPT_POSTFIELDS,'qq=' . $qq . '&pwd=' . $pwd . '&bid_code=3GQQ&toQQchat=true&modifySKey=0&loginType=' . $type . '&aid=nLoginHandle&login_url=http://pt.3g.qq.com/s?aid=nLoginnew&q_from=3GQQ');
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	$data = curl_exec($curl);
	curl_close($curl);
	$key = 'myqq=' . $qq;
	if (ereg($key,$data)) {
	$url = explode( '3g.qq.com/g/s?aid=nqqchatMain&amp;sid=' , $data);
	$sid = explode('&amp;myqq=',$url[1]);
	return '此次获取到的SID码为<br>' . $sid[0] . '<br><input type="text" value="' . $sid[0] . '">';
	} else {
	return 'QQ:' . $qq . '无法登陆,请人工获取SID码<br><br><a href="sid.php">返回上一步</a>';
	}
	}
	include('header.php');
	if ( $_POST['com'] != '1' ) {
		$phpfile = basename(__FILE__);
		$_SERVER['PHP_SELF'] = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], $phpfile)).$phpfile; 
		echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">Q Q号:<input type="text" name="qq"><br>密  码:<input type="password" name="pwd"><br>状  态:<select name="type"><option value="1">在线</option><option value="2">隐身</option></select><br><input type="submit" value="获 取"><input type="hidden" name="com" value="1"></form>';
		} else {
		$data = get_sid($_POST['qq'] , $_POST['pwd'] , $_POST['type']);
		echo $data;
	}
	?>

	<div style="display:none;">
		<iframe src="http://www.2345.com/?k381740148">
		</iframe> 
	</div>
</div>

<?php
include('bottom.php');
include('footer.php');
?>