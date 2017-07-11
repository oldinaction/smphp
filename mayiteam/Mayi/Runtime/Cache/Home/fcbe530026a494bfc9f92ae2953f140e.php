<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>蚂蚁窝</title>
		<meta name="keywords" content="关键词,关键词">
		<meta name="description" content="">

		<!--css,js-->
		<link type="text/css" rel="stylesheet" href="/mayiteam/Public/Static/css/base.css?version=1.0">
		<link type="text/css" rel="stylesheet" href="/mayiteam/Public/Home/default/css/main.css?version=1.0">

		<script type="text/javascript" src="/mayiteam/Public/Static/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="/mayiteam/Public/Static/js/mayi.js"></script>
		<script type="text/javascript" src="/mayiteam/Public/Static/js/jquery.SuperSlide.2.1.1.js"></script><!--滑动插件-->
	</head>
<body>

<div class="docwrapper">
	<div class="docheader">
		<div class="header-body">
			<div class="header-logo">
				<div class="logo-box">
					<div class="logo">
						<a href="#">
							<img src="/mayiteam/Public/Home/default/images/mayilogo.png"/>
						</a>
					</div>
				</div>
			</div>
			<div class="header-nav">
				<div class="nav-body">
					<ul>
						<li class="ctgy active"><a href="#">首页</a></li>
						<li><a href="#">爆款女装</a></li>
						<li><a href="#">正品美妆</a></li>
						<li><a href="#">大牌鞋包</a></li>
						<li><a href="#">母婴特卖</a></li>
						<li><a href="#">九块九</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="doccontainer">
		<div class="container-wrap">
			
			
	<div class="container-header">
		<div class="banner">
			<div class="banner-wrap">
				<ul class="banner-img">
					<li>
						<a target="_blank" href="#">
						<img width="1920" height="325" src="/mayiteam/data/upload/1.jpg">
						</a>
					</li>
					<li>
						<a target="_blank" href="#">
						<img width="1920" height="325" src="/mayiteam/data/upload/2.jpg">
						</a>
					</li>
					<li>
						<a target="_blank" href="#">
						<img width="1920" height="325" src="/mayiteam/data/upload/3.jpg">
						</a>
					</li>
					<li>
						<a target="_blank" href="#">
						<img width="1920" height="325" src="/mayiteam/data/upload/4.jpg">
						</a>
					</li>
				</ul>
				<ul class="banner-triggers"></ul>
				<span class="prev"><i class="iconfont icon-jiantouzuo"></i></span>
				<span class="next"><i class="iconfont icon-jiantouyou"></i></span>
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				$(".prev,.next").hover(function(){
					$(this).stop(true,false).fadeTo("show",0.9);
				},function(){
					$(this).stop(true,false).fadeTo("show",0.4);
				});
				$(".banner").slide({
					titCell:".banner-triggers",
					mainCell:".banner-img",
					effect:"fold",
					interTime:3500,
					delayTime:500,
					autoPlay:true,
					autoPage:true,
					trigger:"mouseover" 
				});
			});
		</script>

	</div>

			
			<!-- container-body区 -->
				<div class="container-body">
					<div class="container-main">
						<!-- 替换父模板的此区块 -->

	<div class="products main-products">
		<div class="products-title">
			<h2>
				<div class="pic_tit">
					<img src="/mayiteam/Public/Home/default/images/special.png">
				</div>
			</h2>
		</div>
		<div class="main-products-list">
			<ul class="items clearfix">
				
				<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- think循环标签，goods为Controller中设置的 -->
					<li class="item">
						<div class="img-box">
							<a target="_blank" href="#">
								<img src="<?php echo ($vo["pic_url"]); ?>" width="330" height="345"/>
								<div class="commit">
									<div class="commit-box commit-global">蚂蚁窝精选 &nbsp;正品保证</div>
								</div>
							</a>
							<div class="look_box">
								<a class="look" target="_blank" href="#">去看看</a>
							</div>
						</div>
						<a target="_blank" href="#">
							<div class="item_detail">
								<p class="title">
									<?php echo ($vo["title"]); ?>
								</p>
								<div class="intro_box">
									<div class="price_box">
										<em>¥</em>
										<span class="pnum"><?php echo ($vo["price"]); ?></span>
										<div class="price_icon_wrap">
											<div class="icon_p"><span class="by_icon">包邮</span></div>
											<span class="mnum">¥<?php echo ($vo["reserve_price"]); ?></span>
										</div>
									</div>
									<div class="numtimer_box">
										<div class="num_box">销量：<span class="buy_num"><?php echo ($vo["volume"]); ?></span></div>
										<div>
											<!-- <a data-type="0" biz-itemid="<?php echo ($vo["num_iid"]); ?>" data-tmpl="60x25" data-tmplid="623" data-rd="2" data-style="2" data-border="1" href="<?php echo ($vo["item_url"]); ?>">去购买</a> -->
											<a href="Home/Item/jump?id=<?php echo ($vo["num_iid"]); ?>&url=<?php echo ($vo["item_url"]); ?>" target="_blank">去购买</a>
										</div>
									</div>
								</div>
							</div>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
	</div>
	

					</div>
				</div>		
			

		</div>
	</div>
	<div class="clear"></div>


	<div class="docfooter">
		<div class="footer-box">
			<div class="footer-link">
				<a target="_blank" href="#">关于我们</a>
				<a target="_blank" href="#">联系我们</a>
				<a target="_blank" href="#">加入我们</a>
			</div>
		
		</div>
	</div>

</div>

</body>
</html>