<?php
    echo APP_PATH;
	require_once  APP_PATH."TaoBaoSDK/TopSdk.php";
	date_default_timezone_set('Asia/Shanghai'); 

	/* $httpdns = new HttpdnsGetRequest;
	$client = new ClusterTopClient("4272","0ebbcccfee18d7ad1aebc5b135ffa906");
	//$client = new ClusterTopClient("23270297","65c47e48c2eede6f9aa31bb82c16245f");
	//$client->gatewayUrl = "http://api.daily.taobao.net/router/rest";
	$client->gatewayUrl = "http://gw.api.tbsandbox.com/router/rest";//沙箱测试
	var_dump($client->execute($httpdns,"6100e23657fb0b2d0c78568e55a3031134be9a3a5d4b3a365753805")); */

	$c = new TopClient;
	$c->appkey = "23270297";
	$c->secretKey = "65c47e48c2eede6f9aa31bb82c16245f";
	$req = new TbkItemGetRequest;
	$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
	$req->setQ("女装");
	$req->setCat("16,18");
	$req->setItemloc("杭州");
	$req->setSort("tk_rate_des");
	//$req->setIsTmall("false");
	//$req->setIsOverseas("false");
	$req->setStartPrice("1");
	$req->setEndPrice("100");
	$req->setStartTkRate("149");
	$req->setEndTkRate("150");
	$req->setPlatform("1");
	$req->setPageNo("1");
	$req->setPageSize("2");
	$resp = $c->execute($req);
	
	var_dump($resp);
	
?>