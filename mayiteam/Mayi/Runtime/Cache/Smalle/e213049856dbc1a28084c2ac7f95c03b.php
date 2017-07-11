<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>蚂蚁窝控制台</title>
		<meta name="keywords" content="关键词,关键词">
		<meta name="description" content="">

		<!--css,js-->
		<link type="text/css" rel="stylesheet" href="/mayiteam/Public/Static/css/base.css?version=1.0">
		<link type="text/css" rel="stylesheet" href="/mayiteam/Public/Smalle/mayi/css/mayi.css?version=1.0">
		<style type="text/css">

		</style>
		<script type="text/javascript" src="/mayiteam/Public/Static/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			$(function(){
				
				//解决点击后交替改变样式(利用附加数据)
				$(".sidebar-fold").data("sidebarFlag","false");
				$(".sidebar-fold").click(sidebarChange);
				function sidebarChange(){
					var dataSidebarFlag = $(".sidebar-fold").data("sidebarFlag");
					if(dataSidebarFlag == "false") {
						$(".doc-sidebar").css("width","50px");
						$(".doc-content").css("left","50px");
						$(".sidebar-fold-border").css("left","20px");
						$(".sidebar-fold").data("sidebarFlag","true");
					} else {
						$(".doc-sidebar").css("width","180px");
						$(".doc-content").css("left","180px");
						$(".sidebar-fold-border").css("left","80px");
						$(".sidebar-fold").data("sidebarFlag","false");
					}
				}
			});
		</script>

	</head>
<body>

<div class="docwrapper">
	<div class="docheader">
		<div class="header-topbar">
			<div class="topbar-wrap">
				<div class="topbar-head left">
					<div class="topbar-logo left">logo</div>
				</div>
				<div class="topbar-nav left">
					<a class="topbar-nav-btn" href="javascript:void(0);">主菜单</a>
					<div class="dropdown-menu left"></div>
				</div>
				<div class="topbar-info right"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="doccontainer">
		<div class="doc-sidebar">
			<div class="sidebar-content">
				<div class="sidebar-inner">
					<div class="sidebar-fold">
						<span class="sidebar-fold-border"></span><span class="sidebar-fold-border"></span><span class="sidebar-fold-border"></span>
					</div>
					<div class="sidebar-nav">
						<div class="sidebar-title">
							<span class="sidebar-title-icon">采</span>
							<span class="sidebar-title-text">采集设置</span>
						</div>
						<ul class="sidebar-trans">
							<li>
								<a href="#">
									<div class="nav-icon">
										<span>鹊</span>
									</div>
									<span class="nav-title">鹊桥采集</span>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="nav-icon">
										<span>商</span>
									</div>
									<span class="nav-title">商品采集</span>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="doc-content">
			<div class="doc-content-nav">
				
			</div>
			<div class="doc-content-body">
				<!-- 替换父模板的此区块 -->
	
	<table class="">
                <thead>
                    <tr >
                       <th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
                        <th>商品名称</th>
                        <th>商品类型</th>
                        <th>价格(元)</th>
                        
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($_list)): if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr class="pointer even" title="">
                        <td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($data["id"]); ?>" /></td>
                        <td><a href="<?php echo ($data['item_url']); ?>" target='_blank'><?php echo ($data['name']); ?></a></td>
                        <td><?php echo ($data['goods_type']); ?></td>
                        <td><?php echo ($data['price']); ?></td>
           
                        <td> 
                            <a target="_blank" href='http://pub.alimama.com/myunion.htm?spm=a2320.7388781.a214tr8.d006.IyDOZN#!/promo/self/items?q=<?php echo urlencode($data[item_url]);?>'>查看</a>
                            |
                            <a id="" href="<?php echo U('Collect/addToGoods',array('id'=>$data['id']));?>" onclick="if(confirm('上架成功的商品请在商品列表里查看')){return true;}" title="">上架</a>
                            |
                            <a class="confirm ajax-get"  href="<?php echo U('Collect/delCollectGoods',array('id'=>$data['id']));?>" title="删除">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
				<td colspan="9" class="text-center"> aOh! 暂时还没有内容! </td><?php endif; ?>
                </tbody>
            </table>
            
            
	<div class="goods-collect">
		<form action="<?php echo U('Collect/index');?>" method="post">
			<table>
				<thead><h3>商品采集</h3></thead>
				<tbody>
					<tr>
						<td>采集规则名称</td>
						<td><input name="name" value="123"/></td>
					</tr>
					<tr>
						<td>关键字<font color="red">*</font></td>
						<td><input name="q"  value="羽绒服"/></td>
					</tr>
					<tr>
						<td>类目ID<font color="red">*</font></td>
						<td><input name="cid"/></td>
					</tr>
					<tr>
						<td>所属分类</td>
						<td></td>
					</tr>
					<tr>
						<td>起始价格</td>
						<td><input name="start_price" value="1"/></td>
					</tr>
					<tr>
						<td>最高价格</td>
						<td><input name="end_price"  value="1000"/></td>
					</tr>
					<tr>
						<td>佣金比率下限</td>
						<td><input name="start_tk_rate" placeholder="123表示1.23%"  value="123"/></td>
					</tr>
					<tr>
						<td>佣金比率上限</td>
						<td><input name="end_tk_rate" placeholder="1234表示12.34%"  value="1234"/></td>
					</tr>
					<tr>
						<td>排序方式</td>
						<td>
							<select name="sort">
								<option value="total_sales_desc" selected="selected">销量从高到低</option>
								<option value="total_sales_asc">销量从低到高</option>
								<option value="tk_rate_desc">佣金比率从高到低</option>
								<option value="tk_rate_asc">佣金比率从低到高</option>
								<option value="tk_total_sales_desc">累计推广量从高到低</option>
								<option value="tk_total_sales_asc">累计推广量从低到高</option>
								<option value="tk_total_commi_desc">总支出佣金从高到低</option>
								<option value="tk_total_commi_asc">总支出佣金从低到高</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>起始页</td>
						<td><input name="page_no" placeholder="默认为1"/></td>
					</tr>
					<tr>
						<td>总页数</td>
						<td><input name="page_size" placeholder="默认为10，最大为100" value="1"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="采集"/></td>
					</tr>
				</tbody>
			</table>	 
		</form>
	</div>
	

			</div>
		</div>
	</div>
	<div class="clear"></div>


	<div class="docfooter"></div>

</div>

</body>
</html>