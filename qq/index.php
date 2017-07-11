<?php
session_start();
error_reporting(0);
include('tools/config.php');

header("Content-Type: text/html; charset=utf-8");
include('header.php');

?>

	<!--content start-->
	<div class="content">
		<div class="notice">
			<div class="n_title">网站公告：</div>
			<div class="n_text">
				<ol>
					<li>本站现在24小时全天挂机，每30分钟刷新一次，请大家放心使用哦! </li>
					<li>本站挂Q只需要你手动提取SID码,挂Q不需要密码，安全可靠!</li>
					<li>挂Q前请绑定密保、QQ令牌或手机令牌，由此造成的任何损失本站概不负责!</li>
					<li>SID码由腾讯生成,有效期为1个月,1个月之后如果要继续挂Q需要来更换SID码</li>
					<li>本站挂Q邀请码为：qq.aezo.cn</li>
				</ol>
			</div>
		</div>
		<div class="loginBox">
			<div class="login_form" name="Login_Frame" id="Login_Frame">
				<div class="main" id="login">
					<div style="display:none" id="qlogin">
					</div>
					<?php
						$fp=fopen($file,"a+");
						$rand=fgets($fp);
						if ($_POST['com'] != "1") {
							$a = '<form id="loginform" onsubmit="" action="' . $_SERVER['PHP_SELF'] . '" method="POST"		name="loginformtarget=_self" autocomplete="off">
									<ul id="g_list" style="width:100%">
										<input type="hidden" name="com" value="1" >
										<li id="g_u">
											<span>
												<u id="label_uin">Q Q 号：</u>
											</span>
											<input name="qq" onblur="check();" id="u" class="inputstyle" value="" name="u" color="">
										</li>
										<li id="g_p">
											<span>
												<u id="label_pwd">SID  码：</u>
											</span>
											<input name="sid" id="p" class="inputstyle" onfocus="check();" tabindex="2" value=""  type="text" name="p">
											<label>
												<a id="label_forget_pwd" tabindex="6" href="getsid.php" onclick="return onClickForgetPwd()">
													获取sid码
												</a>
											</label>
										</li>
										<li id="g_p">
											<span>
												<u id="label_pwd">邀请码：</u>
											</span>
											<input id="p" name="pwd" class="inputstyle" onfocus="check();" tabindex="2" value=""  type="text" name="p">
										</li>';
								  $b = '<li id="g_p">
											<span>验证码:</span>
											<input name="rand" type="text" size="15">  
											<img src="rand.php">
										</li><br>';
								  $c = '<div class="login_button">
											<input type="submit" tabindex="5" value="我要挂机" id="login_btn" name="login">
											<input type="submit" tabindex="5" value="我要下线" id="logout_btn" name="logout">
											<div style="clear:both;"></div>
										</div><br />
										<a id="label_forget_pwd" tabindex="6" href="look.php" onclick="return onClickForgetPwd()" alt="看看你是否挂Q成功" title="看看你是否挂Q成功">
											挂QQ状态查询
										</a>
									</ul>
								</form>';
							if ($abcd == "1") {
								echo $a . $b . $c;
							} else {
								echo $a . $c;
							}
						}else{
							if(isset($_POST['login'])){
								if(!preg_match("/^[0-9]\d{5,11}$/",$_POST["qq"])) {
									echo '非法QQ号<br><br><a href="index.php">返回上一步</a>';
									exit();
								}
								if ( !in_array($_POST['pwd'],$senior )) {
									if (!in_array($_POST['pwd'],$pwd)) {
										echo '邀请码错误<br><br><a href="index.php">返回上一步</a>';
										exit();
									}
									if (substr_count($rand,$_POST['pwd']) >= 200) {
										echo '邀请码超出使用次数,请联系管理员获取最新邀请码!
										<br><br>
										<a href="http://wpa.qq.com/msgrd?v=3&uin=381740148&site=qq&menu=yes" target="_blank">联系管理员</a>
										<a href="index.php">返回上一步</a>';
										exit();
									}
								}
								/*
								if ($abcd == "1") {
									if ($_POST['rand'] != $_SESSION['rand']) {
										echo '验证码错误<br><br><a href="index.php">返回上一步</a>';
										exit();
									}
									
								}
								*/
								$a = explode(',',$rand);
								for( $i = 0 ; $i <= count($a) ; $i++) {
									if ($a[$i] == $_POST['sid']) {
										echo '此SID已存在或者此SID已过期，请重新检查SID，或者联系管理员！
											<br /><br />
											<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=5IuIgI2KhYeQjYuKpJWVyoeLiQ" style="text-decoration:none;">
												<img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_01.png"/>
											</a>
											<br><br>
											<a href="index.php">返回上一步</a>';
										exit();
									}
								}
								$data = file_get_contents('http://pt5.3g.qq.com/s?aid=nLogin3gqqbysid&3gqqsid=' . $_POST['sid']);
								if (ereg($_POST['qq'],$data) && ereg('nqqchat',$data)) {
									$a = explode(',',$rand);
									for( $i = 0 ; $i <= count($a) ; $i++) {
										if ($a[$i] == $_POST['qq']) {
											$b = str_replace($a[$i+1],$_POST['sid'],$rand);
											ftruncate($fp,0);
											fwrite($fp,$b);
											fclose($fp);
											echo '已成功修改该QQ的SID<br><br><a href="look.php">查看QQ挂机状态</a>';
											exit();
										}
									}
									date_default_timezone_set("PRC");
									$time = date("Y-m-j H:i:s ");
									$data = $_POST['qq'] . ',' . $_POST['sid'] . ',' . $_POST['pwd'] . ',' . $time . ';';
									fwrite($fp,$data);
									fclose($fp);
									echo '挂Q成功,系统已将你的QQ号记录!<br><br><a href="look.php">查看QQ挂机状态</a>';
								} else {
									echo '请检查您的输入是否正确<br><br><a href="index.php">返回上一步</a>';
								}
							}else if(isset($_POST['logout'])){
								if($_POST['qq'] <> '' && $_POST['sid'] <> ''){
									if (file_exists($file)){ //$file指记载挂机的QQ的相关数据的文件
										$fp=fopen($file,"a+");
										$datb = fgets($fp);
										fclose($fp);
										$array = explode( ';' , $datb );//$array为将文件用;分割
										$nun=count($array);
										$num=$nun-1;//$num数组的长度
										fclose($fp);
										//移除数组中对应的QQ
										$yes = 0; //定义一个值表示是否找到匹配输入QQ和SID对应的值，0表示没有找到，1表示找到了
										for($number = 0; $number < $num; $number++){
											$row = explode(",",$array[$number]);
											list($qq,$sid,$pwd,$data)=$row;
											if($_POST['qq'] == $qq && $_POST['sid'] == $sid){
												function array_remove(&$arr, $removeindex) { //移除数组$arr中下标为$removeindex的元素，并把数组重新排列（&的利用）
													array_splice($arr, $removeindex, 1); 
												} 
												array_remove($array, $number); //此时$number即为输入QQ号在数组中的下标

												//把数组值写到文件中
												$datb = '';
												$num =count($array) - 1;
												for($number = 0; $number < $num; $number++){
													$datb = $datb . $array[$number] . ';';
												}
												$fp=fopen($file,"a+");
												ftruncate($fp,0);
												fwrite($fp,$datb);
												fclose($fp);
												$yes = 1;
											}
										}
										if($yes == 1){
											echo '恭喜您，注销成功！
													<br /><br />
													<a href="index.php">返回上一步</a>';
										}else{
											echo '无此QQ号，请检查QQ号和SID码是否输入正确！
												<br /><br />
												<a href="index.php">返回上一步</a>';
										}
									}else{
										echo '系统错误，请联系管理员！
											<br /><br />
											<a href="index.php">返回上一步</a>';
									}
								}else{
									echo '没有输入QQ号或SID码哦！
										<br /><br />
										<a href="index.php">返回上一步</a>';
								}
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!--end content-->
<?php
include('bottom.php');
include('footer.php');
?>

</body>
</html>

