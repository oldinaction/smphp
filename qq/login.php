<?php
	session_start();
	//error_reporting(0);
	header("Content-Type: text/html; charset=utf-8");
	include('header.php');
	include('tools/config.php');
	//include('tools/tools.php');
	$fp=fopen($file,"a+");
	$data = fgets($fp);
	fclose($fp);
	$array = explode( ';' , $data );

	$message = "";
	$countSuccess = 0;
	$countFail = 0;
	for ( $i = 0 ; $i < (count($array) - 1) ; $i++ ) {
		$a=explode( ',' , $array[$i] );
		$qq=$a[0];
		$sid=$a[1];
		
		
		$a = file_get_contents ('http://q16.3g.qq.com/g/s?aid=nqqchatMain&sid='.$sid);
		if (strstr ($a,'正在跳转')){
			echo $qq . '登陆成功<br>';
			$a = file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
		}else {
			echo $qq . '登陆失败<br>';
			$a = file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
		}
		
		/*
		$a = file_get_contents ('http://q32.3g.qq.com/g/s?aid=nqqchatMain&sid='.$sid.'&myqq='.$qq);
		if(strstr ($a,'手动刷新')){
			//$message = $message . "    " . $qq . "登陆成功\n";
			$countSuccess ++;
			echo $qq . '登陆成功<br>';
		} else if (strstr ($a,'正在跳转')){
			if(strstr ($a,'手动刷新')){
				//$message = $message . "    " . $qq . "登陆成功\n";
				$countSuccess ++;
				echo $qq . '登陆成功<br>';
			} else if(strstr ($a,'提示')){
				$message = $message . $qq . "登陆失败\n";
				$countFail ++;
				echo $qq . '登陆失败<br>';
				file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
			}else if(strstr ($a,'登录失败，请重新登录!')){
				$message = $message . $qq . "登陆失败\n";
				$countFail ++;
				echo $qq . '登陆失败<br>';
				file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
			}else{
				$message = $message . $qq . "登陆失败\n";
				$countFail ++;
				echo $qq . '登陆失败<br>';
				file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
			}
		} else {
			if(strstr ($a,'手动刷新')){
				//$message = $message . "    " . $qq . "登陆成功\n";
				$countSuccess ++;
				echo $qq . '登陆成功<br>';
			} else {
				$message = $message . $qq . "登陆失败\n";
				$countFail ++;
				echo $qq . '登陆失败<br>';
				file_get_contents ('http://pt.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid='.$sid);
			}
		}
		*/

	}
	
	/*
	//写日志文件
	$file  = dirname(__FILE__).'/log.txt';
	date_default_timezone_set("PRC");
	$time = date("Y-m-j H:i:s ");
	$content = "============>" . $time . "\n" . $message . "总计[".($countSuccess+$countFail)."]"."  成功[".$countSuccess."]"."  失败[".$countFail."]\n";
	file_put_contents($file, $content,FILE_APPEND);
	*/

	$fp=fopen("tools/runtime.txt","a+");
	date_default_timezone_set("PRC");
	$time = date("Y-m-j H:i:s ");
	ftruncate($fp,0);
	fwrite($fp,$time);
	fclose($fp);

	include('bottom.php');
	include('footer.php');
?>