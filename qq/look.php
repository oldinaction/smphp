<?php
include('header.php'); //包含头部文件 
?>

<div class="look">
	<?php
		error_reporting(0);
		include('tools/config.php');
		$page = $_GET["page"];
		$pagesize= 8*3; //pagesize只一页中的输出个数
		if (file_exists($file)){ //$file指记载挂机的QQ的相关数据的文件
			$fp=fopen($file,"a+");
			$datb = fgets($fp);
			fclose($fp);
			$array = explode( ';' , $datb ); //$array为将文件用;分割
			$nun=count($array);
			$num=$nun-1; //$num共有多少个QQ号
			fclose($fp);
			if ($num>0){
				$total=ceil($num/$pagesize); //$total要展示的总页数
				if($page<1){ //$page当前页码
					$page=1;
				}
				$number=($page-1)*$pagesize;
				echo '<table class="qqlist">
						<th colspan="6">易挂QQ列表</th>
						<tr class="l_menu">
							<td>QQ号</td>
							<td>状态</td>
							<td>QQ号</td>
							<td>状态</td>
							<td>QQ号</td>
							<td>状态</td>
						</tr>
						<tr>';
				
				$td = 0;
				for($i=0;$i<=$pagesize-1;$i++){
					$row=explode(",",$array[$number]);
					list($qq,$sid,$pwd,$data)=$row;
					   echo '<td>' . $qq . '</td>';
					   echo '<td>
								<a class="l_ads" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=' . $qq . '&site=qq&menu=yes">
									<img border="0" src="images/qqbtn.gif" alt="点击这里给我发消息" title="点击这里给我发消息">
								</a>
							 </td>';
					$td = $td + 1;
					if ($number==$num-1){
						break;
					}
					$number=$number+1;
					if( $td >= 3){
						echo '</tr>
						  <tr>';
						$td = 0;
					}
				}
				echo '</tr>';
				
			}
				echo '<tr class="l_sm">
						<td colspan="6">';
			if ($page<>1){
				$back=$page-1;
				echo"<a href=" . $_SERVER[PHP_SELF] . "?page=1>第一页&nbsp;&nbsp;</a>";
				echo"<a href=" . $_SERVER[PHP_SELF] . "?page=$back>上一页&nbsp;&nbsp;</a>";
			}
			if ($page<>$total){
				$next=$page+1;
				echo"<a href=" . $_SERVER[PHP_SELF] . "?page=$next>下一页&nbsp;&nbsp;</a>";
				echo"<a href=" . $_SERVER[PHP_SELF] . "?page=$total>最后一页</a>";
			}
			echo"&nbsp;&nbsp;&nbsp;&nbsp;页数： $page / $total ";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;共有 $num 个QQ";
		} else {
			echo"<center>数据文件丢失，请联系管理员！</center>";
		}
		$fp=fopen("tools/runtime.txt","a+");
		if (filesize("tools/runtime.txt") > 0) {
			$time=fgets($fp);
		} else {
			$time = '暂无记录';
		}
		fclose($fp);
		echo "&nbsp;&nbsp;&nbsp;&nbsp;系统上次登陆时间：" . $time;
				echo '</td>
					</tr>';
				echo '<tr>
						<td colspan="6">
							本站实行24小时挂Q，每30分钟检测一次，挂Q成功率极高！本站会严格按照在指定的时间准时挂Q,不会影响你正常使用！如果要取消挂Q,请联系我们去掉记录。
						</td>
					</tr>
				</table>';
	?>
</div>

<?php
include('bottom.php');
include('footer.php'); //包含页尾文件
?>